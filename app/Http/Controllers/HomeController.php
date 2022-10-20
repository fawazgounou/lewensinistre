<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use Kreait\Firebase\Auth;
use Kreait\Firebase\Exception\FirebaseException;
use Session;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      // Get user connected for check out status
      $user  = Http::get('http://localhost:3000/api/user/getuser/'.session()->get('names'));

      // if user is user redirection to sinistre page

      if ($user->json("role") == 'user') {
        return redirect()->route('sinistre.index' , $user->json("name"));
      }elseif($user->json("role") == 'admin'){ // if user is admin redirection to compagny page
        return redirect()->route('compagny.index');
      }else{ // Else redirection to login page with message ...
        session()->flush();
        return redirect()->route('connexion')->with('message',"Patientez le temps que votre compte soit validé");
      }
      
      // dd($name);
      
      // $responseS = Http::get('http://localhost:3000/api/user/getsinistre/'.$compagny);
      // dd($response->json("role") );  


      // if($response->json("role") == 'user'){
      //   return view('sinistre.index', ['usersinistre'=>$responseS->json() , 'compagny' => $compagny]);
      // }else if($response->json("role") == 'admin'){
      //   return redirect('administrateur');
      // }else{
      //   session()->flush();
      //   return redirect()->route('connexion')->with('message',"Patientez le temps que votre compte soit validé");
      // };
    }

    public function voirDash(Request $request)
    {
      Session::put('names',$request->name);
      return  redirect()->route('home');
    }

    public function rechercher(Request $request)
    {
        $recherche = Http::get('http://localhost:3000/api/user/recherche/'.session()->get('names').'/'.$request->recherche);
    //dd($recherche->json());
    return view('home',['usersinistre'=>$recherche->json()]);
    }

}
