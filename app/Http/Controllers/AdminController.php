<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use PhpParser\Node\Stmt\Function_;

class AdminController extends Controller
{
    public function Alluser(){
        $response = Http::get(env('APP_URL_API').'/api/user/getusers');
        return  view('administrateur',['user'=>$response->json()]);
    }
    
    public Function update($id,$role){

        $resonpses = Http::put(env('APP_URL_API').'/user/updateR/'.$id, 
                            [
                                'role' => $role,
                            ]);
        return redirect('administrateur')->with('message',"Role de l'identifiant modifier avec succès." );
    }

}
