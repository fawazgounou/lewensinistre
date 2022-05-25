<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AllvehiculeController extends Controller
{
    public function AllVoiture(){
        $allvehiculA = Http::get('http://localhost:3000/api/vehicule/AllvehiculeA');

        return  view('StatistiqAll',[ 'AllvehiculeA'=>$allvehiculA->json()]);

      }
}
