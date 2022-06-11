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
      // FirebaseAuth.getInstance().getCurrentUser();

      $name = Session::get('name');
      $response = Http::get('http://localhost:3000/api/user/getuser/'.session()->get('names'));
      $responseS = Http::get('http://localhost:3000/api/user/getsinistre/'.session()->get('names'));


        //dd($responseS->json());

    if($response->json("role")==='user'){
      return view('home',['usersinistre'=>$responseS->json()]);
    }
    else if($response->json("role")==='admin'){
        return redirect('administrateur');
      }
      else{
          session()->flush();
          return redirect()->route('login')->with('message',"Patientez le temps que votre compte soit validé");
      };



}
public function voirDash(Request $request)
{
    //dd($request->name);
  Session::put('names',$request->name);
  return  redirect()->route('home');
}

}
