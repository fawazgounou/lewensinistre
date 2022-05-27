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
      dd($name);
      $user = app('firebase.auth')->getUser($name);
      $response = Http::get('http://localhost:3000/api/user/getuser/'.session()->get('name'));

    if($response->json("role")==='user'){
      return view('home');
    }else{
      return redirect('administrateur');
    };






    /* public function customer()
    {
      $userid = Session::get('uid');
      return view('customers',compact('userid'));
    } */
}}
