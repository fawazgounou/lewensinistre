<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;

class DetailController extends Controller
{
    //
    public function Details(){
    $vehiculA = Http::get('http://localhost:3000/api/user/getVehicule/'.session()->get('name'));
            dd($vehiculA->json());

     return  view('detailSinistre',['voiture'=>$vehiculA->json()]);

   }
}
