<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class VehiculeController extends Controller
{
  public function Vehicule($id){
    $allvehiculA = Http::get('http://localhost:3000/api/vehicule/AllvehiculeA');
   $vehiculA = Http::get('http://localhost:3000/api/vehicule/1vehiculeA/'.$id);

    return  view('detailvehicule',[ 'AllvehiculeA'=>$allvehiculA->json(),'vehiculeA'=>$vehiculA->json()]);

  }
}
