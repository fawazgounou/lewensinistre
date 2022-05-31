<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;

class DetailController extends Controller
{
    //
    public function Details($id){

    $Sinistre1 = Http::get('http://localhost:3000/api/user/get1sinistre/'.session()->get('name').'/'.$id);
           //dd($Sinistre1->json());

     return  view('detailSinistre',['Sinistres'=>$Sinistre1->json()]);

   }
}
