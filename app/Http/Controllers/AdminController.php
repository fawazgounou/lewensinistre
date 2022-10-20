<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use PhpParser\Node\Stmt\Function_;

class AdminController extends Controller
{
    public function Alluser(){
        $response = Http::get('http://localhost:3000/api/user/getusers');
        return  view('administrateur',['user'=>$response->json()]);
    }
    
    public Function update($id,$role){

        $resonpses = Http::put('http://localhost:3000/api/user/updateR/'.$id, 
                            [
                                'role' => $role,
                            ]);
        return redirect('administrateur')->with('message',"Role de l'identifiant modifier avec succès." );
    }

}
