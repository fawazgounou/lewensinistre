<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AdminController extends Controller
{
    public function Alluser(){
        $responseuser = Http::get('http://localhost:3000/api/user/getusers');
          $responsesinistre = Http::get('http://localhost:3000/api/admin/voirsinistre/');
        return  view('administrateur',['user'=>$responseuser->json(),'sinistre'=>$responsesinistre->json()  ]);
       }
}
