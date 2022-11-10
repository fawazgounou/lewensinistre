<?php

namespace App\Http\Controllers;

use App\Mail\CompagnyRegistrerMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\ValidationException;
use Kreait\Firebase\Exception\FirebaseException;
use Session;

// use App\Providers\RouteServiceProvider;
use Kreait\Firebase\Auth as FirebaseAuth;
// use Illuminate\Foundation\Auth\RegistersUsers;

class CompagnyController extends Controller
{

    public function index(){

        $response = Http::get(env('APP_URL_API').'/user/getusers');
        
        return  view('compagny.index',['user'=>$response->json()]);

    }

    public function create(){
        return view('compagny.create');
    }

    public function store(Request $request , FirebaseAuth $auth){

        //Validation
        $credentials = $request->validate([
            'name'              => 'required|string',
            'email'             => 'required|email',
        ]);

        try {

            $name = $request->name;
            $email = $request->email;

            $userProperties = [
               'email'          => $email,
               'emailVerified'  => false,
               'password'       => '12345678',
               'displayName'    => $name,
               'disabled'       => false,
            ];

            $createdUser = $auth->createUser($userProperties);
                
            $resonpse = Http::post(env('APP_URL_API').'/user/adduser', [
                'uid' => $createdUser->uid,
                'name' => $name,
                'mail' => $email,
                'role' => 'user',
            ]);

            $resonpse = Http::post(env('APP_URL_API').'/user/addcompagnie', [
                'name' => $name,               
            ]);

            // Email details
            $details = [
                'year'   => date('Y'),
                'name'   => $name,
                'email'  => $email,
            ];

            // Send Email
            $email_send = true;
            try {
                //Send mail to admin
                $email = Mail::to($email)->send(new CompagnyRegistrerMail($details) , $details);
            } catch (\Swift_TransportException $e) {
                $email_send = false;
            }

            if ($email_send) {
                return redirect()->route('compagny.index')->with(['success' => "Compagnie enregister avec envoie de mail"]);
            }else{
                return redirect()->route('compagny.index')->with( ['warning' => "Compagnie enregister sans envoie de mail. 
                    Veuillez lui addressé le mail de notification avec mot de passe 12345678."]
                );
            }
        
        } catch (FirebaseException $e) {
            return redirect()->back()->with(['error' => "Une erreur est subvenue lors de l'enregistrement de la compgnie.
                Veuillez rééssayer à nouveau."]);
        }
    }

    public function type($id,$role){
        
        $resonpses = Http::put(env('APP_URL_API').'/user/updateR/'.$id, ['role' => $role, ]);

        if ($role == "New") {
            return redirect()->route('compagny.index')->with(['error' => "Utilisateur désactivé."] );
        }elseif($role == "user"){
            return redirect()->route('compagny.index')->with(['success' => "L'utilisateur est une compagnie maintenant."] );
        }elseif("admin"){
            return redirect()->route('compagny.index')->with(['success' => "L'utilisateur est un administrateur désormais."] );
        }else{
            return redirect()->route('compagny.index')->with(['warning' => "Rôle inconnu."] );
        }
    }

    public function profile($id , FirebaseAuth $auth){
        $compagny  = Http::get(env('APP_URL_API').'/user/getuser/'.$id)->json();

        return view('compagny.profile' , compact('compagny'));
    }

    public function update(Request $request , $id , FirebaseAuth $auth){

        try {

            $user = $auth->getUser(session()->get('user_id'));

            $verify_old_password = false;
            
            if (!$current_password = $request->current_password) {
                return redirect()->back()->with(['error' => "Veuillez saisir votre mot de passe actuel."]);
            }

            try {

                // Verify if it's really user how is connected
                $signInResult = $auth->signInWithEmailAndPassword($user->email, $current_password);
                $update = false;

                // Edit e-mail
                $email = $request->email;
                if ($email != $user->email) {
                    $auth->changeUserEmail($user->uid, $email);
                    Http::put(env('APP_URL_API').'/user/updateR/'.$id, ['mail' => $email, ]);
                    $update = true;
                }

                // Edit password
                $new_password     = $request->new_password;
                $confirm_password = $request->confirm_password;
                if ($new_password) {
                    if ($new_password == $confirm_password) {
                        $auth->changeUserPassword($user->uid, $new_password);
                        $update = true;
                    }
                }

                // Redirection after update
                if ($update) {
                    Session::flush();
                    return redirect()->route('connexion')->with(['success' => "Profile modifié avec succès."]);
                }else{
                    return redirect()->back()->with(['info' => "Aucune modification n'a été apporté à votre profile"]);
                }
                

            } catch (FirebaseException $e) {
                return redirect()->back()->with(['error' => "Veuillez saisir le bon mot de passe."]);
            }
   
        } catch (\Kreait\Firebase\Exception\Auth\UserNotFound $e) {
            echo $e->getMessage();
        }
    }
}
