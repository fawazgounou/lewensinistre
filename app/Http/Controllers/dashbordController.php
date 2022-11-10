<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class dashbordController extends Controller
{
    public function detail($campagny , $id){
        dd($id);
        $Sinistre1 = Http::get(env('APP_URL_API').'/user/getdetailssinistre/'.session()->get('name').'/'.$id);
        dd($Sinistre1->json());
        return view('sinistre.details',['id'=>$id,'Sinistres'=>$Sinistre1->json()]);
    }
}
