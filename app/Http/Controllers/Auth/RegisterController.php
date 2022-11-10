<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\CompagnyRegistrerMail;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Kreait\Firebase\Auth as FirebaseAuth;
use Kreait\Firebase\Exception\FirebaseException;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Session;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;
    protected $auth;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
   // protected $redirectTo = RouteServiceProvider::HOME;

   public function __construct(FirebaseAuth $auth) {
      $this->middleware('guest');
      $this->auth = $auth;
   }

   protected function validator(array $data) {
      return Validator::make($data, [
         'name' => ['required', 'string', 'max:255'],
         'email' => ['required', 'string', 'email', 'max:255'],
      //  'password' => ['required', 'string', 'min:8', 'max:12', 'confirmed'],
      ]);
   }
   protected function register(Request $request) {
      dd($request);
      try {
      $this->validator($request->all())->validate();
      $name = $request->name;
      $email = $request->email;

      $userProperties = [
         'email'           => $email,
         'emailVerified'   => false,
         'password'        => '12345678',
         'displayName'     => $name,
         'disabled'        => false,
      ];

      // DB::beginTransaction();

         $createdUser = $this->auth->createUser($userProperties);
         $resonpse = Http::post(env('APP_URL_API').'/user/adduser', [
            'uid' => $createdUser->uid,
            'name' => $request->name,
            'mail' => $request->email,
            'role' => 'user',
         ]);

         $resonpse = Http::post(env('APP_URL_API').'/user/addcompagnie', [
               'name' => $request->name,               
         ]);

         //Email details
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
      // DB::commit();

      if ($email_send) {
         return redirect()->route('compagny.index')->with(['success' => "Compagnie enregister avec envoie de mail"]);
      }else{
         return redirect()->route('compagny.index')->with( ['warning' => "Compagnie enregister sans envoie de mail. 
               Veuillez lui addressé le mail de notification avec mot de passe 12345678."]
         );
      }

      // return redirect()->route('compagny.index');
      } catch (FirebaseException $e) {
      //  Session::flash('error', $e->getMessage());
      //  return back()->withInput();
      return redirect()->back()->with(['error' => "Une erreur est subvenue lors de l'enregistrement de la compgnie.
                  Veuillez rééssayer à nouveau."]);
      }
   }
 }
