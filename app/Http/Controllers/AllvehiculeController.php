<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AllvehiculeController extends Controller
{
    public function AllVoiture(){
        $allvehiculA = Http::get(env('APP_URL_API').'/vehicule/AllvehiculeA');

        return  view('StatistiqAll',[ 'AllvehiculeA'=>$allvehiculA->json()]);

      }
}
