<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class VehiculeController extends Controller
{
  public function Vehicule($id){
    $allvehiculA = Http::get(env('APP_URL_API').'/vehicule/AllvehiculeA');
   $vehiculA = Http::get(env('APP_URL_API').'/vehicule/1vehiculeA/'.$id);

    return  view('detailvehicule',[ 'AllvehiculeA'=>$allvehiculA->json(),'vehiculeA'=>$vehiculA->json()]);

  }
}
