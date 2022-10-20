<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CompagnyController extends Controller
{
    public function index(){
        $response = Http::get('http://localhost:3000/api/user/getusers');
        return  view('compagny.index',['user'=>$response->json()]);
    }
}
