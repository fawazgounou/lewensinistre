<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
// use Dompdf\Dompdf;
use PDF;
Use Dompdf\Options;
use Illuminate\Support\Facades\Storage;

class SinistreController extends Controller
{
    public function index($compagny=null){
        // If $compagny is'nt declared take user connected
        if ($compagny==null) {
            $compagny = Session::get('name');
        }

        // Get sinistre to this compagny
        $sinistre = Http::get(env('APP_URL_API').'/user/getsinistre/'.$compagny);
        // dd($sinistre->json());
        return view('sinistre.index', ['usersinistre'=>$sinistre->json() , 'compagny' => $compagny]);

    }

    public function details($compagny , $id){

        $Sinistre_details = Http::get(env('APP_URL_API').'/user/getdetailssinistre/'.$compagny.'/'.$id);
        // dd($Sinistre_details->json());
        return view('sinistre.details' , ['id'=>$id , 'Sinistres'=>$Sinistre_details->json() , 'compagny'=>$compagny]);

    }

    public function download($compagny , $id){

        $Sinistre_details = Http::get(env('APP_URL_API').'/user/getdetailssinistre/'.$compagny.'/'.$id);
        $Sinistre_details_json = $Sinistre_details->json();
        // dd($Sinistre_details_json['temoins']['data']);
        // return view('sinistre.download',['id'=>$id , 'Sinistres'=>$Sinistre_details_json , 'compagny'=>$compagny]);
        // ->setPaper('a3', 'portrait');

        $options = new Options(); // Options PDF
        $options->set('isRemoteEnabled', true);
        $pdf = new PDF($options);
        try {
            $pdf = PDF::loadView('sinistre.download',
                [
                    'id'=>$id ,
                    'Sinistres'=>$Sinistre_details_json ,
                    'compagny'=>$compagny
                ])->setPaper('a3', 'portrait');
        } catch (\Throwable $th) {
            throw $th;
        }


        return $pdf->download('Sinistre.pdf');
    }
}
