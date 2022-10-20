<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Dompdf\Dompdf;
use Dompdf\Options;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    //
    public function Details($id){
        // dd('Details');
    $Sinistre1 = Http::get('http://localhost:3000/api/user/getdetailssinistre/'.session()->get('name').'/'.$id);
           //dd($Sinistre1->json());

           $dompdf = new Dompdf();
           $dompdf->loadHtml(view('detailSinistre',['Sinistres'=>$Sinistre1->json()]));

           // (Optional) Setup the paper size and orientation
           $dompdf->setPaper('a3', 'portrait');

           // Render the HTML as PDF
           $dompdf->render();

           // Output the generated PDF to Browser
           $dompdf->stream('Sinistre');



   }
}
