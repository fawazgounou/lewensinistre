<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

  <link rel="stylesheet" href="{!! asset('/new-style/css/vertical-layout-light/style.css') !!}">

    <style>
        .box-sh-card{
            box-shadow: 1px 1px 6px rgb(118, 118, 118);
        }
    </style>
</head>
<body>
    {{-- <div>
        <h3 class="text-center">
            CONSTAT AMIABLE AUTOMOBILE {{$compagny}}
        </h3>
    </div> --}}

    <div class="container">

        {{-- <div class="row text-right">
            <div class="col-lg-12">
                <a href="{{route('sinistre.download',[$compagny , $id])}}" class="btn btn-primary text-right"> Télécharger</a>
            </div>
        </div> --}}

        <div class="row dateR">
            <div class="col-lg-12 dateC">

                <h3 class="text-center py-3 mt-2 mb-5 bg-primary text-white font-weight-bold box-sh-card" style="border-radius: 15px">
                    CONSTAT AMIABLE AUTOMOBILE {{$compagny}}
                </h3>

                <div class="border-bottom">

                    {{-- Infos Sinistre --}}
                    <div class="row Ro1">

                        <div class="col-md-4">
                            <h4><strong> Date de l'accident : </strong></h4>{{array_key_exists('dateSinistre' , $Sinistres['sinistre']) ? $Sinistres['sinistre']['dateSinistre'] : ''}}
                        </div>
        
                        <div class="col-md-4">
                            <h4><strong>Heure : </strong></h4>{{array_key_exists('heureSinistre' , $Sinistres['sinistre'] ) ? $Sinistres['sinistre']['heureSinistre'] : ''}}
                        </div>
        
                        <div class="col-md-4">
                            <h4><strong>Localisation : </strong></h4>{{array_key_exists('Localisation' , $Sinistres ) ? $Sinistres['Localisation'] : ''}}
                        </div>
        
                    </div>
        
                    <div class="col-md-12 Ro1"> <br></div>
                    
                    {{-- Les blessés  --}}
                    <h3>Les Blessés</h3>
                    <div class="row Ro1" >

                        @if (count($Sinistres['blesse']['data']) > 0)
                            
                            @foreach ( $Sinistres['blesse']['data'] as $blesse )

                                <div class="col-md-3 my-1">
                                    <strong class="champ">Nom : </strong>{{ array_key_exists('nom' , $blesse) ? $blesse['nom'] : ''}}
                                </div>
                                <div class="col-md-3 my-1">
                                    <strong class="champ">Prénom : </strong>{{ array_key_exists('prenom' , $blesse) ? $blesse['prenom'] : ''}}
                                </div>
                                <div class="col-md-3 my-1">
                                    <strong class="champ">Profession : </strong>{{ array_key_exists('profession' , $blesse) ? $blesse['profession'] : ''}}
                                </div>
                                <div class="col-md-3 my-1">
                                    <strong class="champ">Téléphone : </strong>{{ array_key_exists('telephone' , $blesse) ? $blesse['telephone'] : ''}}
                                </div>
                                <div class="col-md-3 my-1">
                                    <strong class="champ">Adresse : </strong>{{ array_key_exists('Adresse' , $blesse) ? $blesse['Adresse'] : ''}}
                                </div>
                                <div class="col-md-3 my-1">
                                    <strong class="champ">Situation : </strong>{{ array_key_exists('situation' , $blesse) ? $blesse['situation'] : ''}}
                                </div>
                                <div class="col-md-3 my-1">
                                    <strong class="champ">Nature : </strong>{{ array_key_exists('nature' , $blesse) ? $blesse['nature'] : ''}}
                                </div>
                                <div class="col-md-3 my-1">
                                    <strong class="champ">Soins/Hospitalisation : </strong>{{ array_key_exists('centrehospital' , $blesse) ? $blesse['centrehospital'] : ''}}
                                </div>

                            @endforeach

                        @else 
                            <span class="ml-2 text-danger">Aucun blesse enregistré.</span>
                        @endif
                    </div>

                </div>

                <div> <br></div>
                    
                <div  class="row">
                    {{-- Infos A --}}
                    <div class="col-md-5 col1 pt-3 border bg-success box-sh-card" style="border-radius: 15px">
                        <!-- DATA TABLE-->
                        <h3 class="veh bg-light py-2 px-2 box-sh-card">Véhicule A</h3>

                        {{-- Infos Assuré A --}}
                        <div>
                            <h5 class="border-bottom font-weight-bold my-3">Preneur Assurance/Assuré</h5>
                            <strong class="champ">Nom : </strong>{{array_key_exists('nom' , $Sinistres['assure']) ? $Sinistres['assure']['nom'] : ''}}<br>
                            <strong class="champ">Prénom : </strong>{{array_key_exists('prenom' , $Sinistres['assure']) ? $Sinistres['assure']['prenom'] : ''}}<br>
                            <strong class="champ">Adresse : </strong>{{array_key_exists('addresse' , $Sinistres['assure']) ?  $Sinistres['assure']['addresse'] : ''}}<br>
                            <strong class="champ">Téléphone : </strong>{{array_key_exists('telephone' , $Sinistres['assure']) ? $Sinistres['assure']['telephone'] : ''}}<br>
                            <strong class="champ">Code Postal : </strong>{{array_key_exists('code postal' , $Sinistres['assure']) ? $Sinistres['assure']['code postal'] : ''}}<br>
                            <strong class="champ">Email : </strong>{{array_key_exists('email' , $Sinistres['assure']) ? $Sinistres['assure']['email'] : ''}}<br>
                        </div>
                        
                        {{-- Infos Vehicule A --}}
                        <div>
                            <h5 class="border-bottom font-weight-bold my-3">Vehicule</h5>
                            <strong class="champ">Marque : </strong>{{array_key_exists('marque' , $Sinistres['vehicule']) ? $Sinistres['vehicule']['marque'] : ''}}<br>
                            <strong class="champ">N°Immatriculation : </strong>{{array_key_exists('numero_immatriculation' , $Sinistres['vehicule']) ? $Sinistres['vehicule']['numero_immatriculation'] : ''}}<br>
                            <strong class="champ">Pays Immatriculation : </strong>{{array_key_exists('pays_immatriculation' , $Sinistres['vehicule']) ? $Sinistres['vehicule']['pays_immatriculation'] : ''}}<br>
                        </div>
                        
                        {{-- Infos Société d'assurance A --}}
                        {{-- <div>
                            <h5 class="border-bottom font-weight-bold my-3">Société d'assurance</h5>
                            <strong class="champ">Nom : </strong>{{array_key_exists('NomA' , $Sinistres) ?  $Sinistres['NomA'] : ''}}<br>
                            <strong class="champ">N° contrat : </strong>{{array_key_exists('num_contrat' , $Sinistres) ?  $Sinistres['num_contrat'] : ''}}<br>
                            <strong class="champ">N° carteverte : </strong>{{array_key_exists('num_carte_verte' , $Sinistres) ?  $Sinistres['num_carte_verte'] : ''}}<br>
                            <strong class="champ">Du : </strong>{{array_key_exists('du' , $Sinistres) ?  $Sinistres['du'] : ''}}<br>
                            <strong class="champ">Au : </strong>{{array_key_exists('au' , $Sinistres) ?  $Sinistres['au'] : ''}}<br>
                            <strong class="champ">Agence : </strong>{{array_key_exists('agence' , $Sinistres) ?  $Sinistres['agence'] : ''}}<br>
                            <strong class="champ">Nom agence : </strong>{{array_key_exists('nom_agence' , $Sinistres) ?  $Sinistres['nom_agence'] : ''}}<br>
                            <strong class="champ">Adresse : </strong>{{array_key_exists('adresse' , $Sinistres) ?  $Sinistres['adresse'] : ''}}<br>
                            <strong class="champ">Pays : </strong>{{array_key_exists('pays' , $Sinistres) ?  $Sinistres['pays'] : ''}}<br>
                            <strong class="champ">Téléphone : </strong>{{array_key_exists('telephone' , $Sinistres) ?  $Sinistres['telephone'] : ''}}<br>
                            <strong class="champ">Email : </strong>{{array_key_exists('email' , $Sinistres) ?  $Sinistres['email'] : ''}}<br>
                            <strong class="champ">Prise en charge ? </strong>{{array_key_exists('prise_encharge' , $Sinistres) ?  $Sinistres['prise_encharge'] : ''}}<br>
                        </div> --}}
                        
                        {{-- Infos Conducteurs A --}}
                        <div>
                            <h5 class="border-bottom font-weight-bold my-3">Conducteur</h5>
                            <strong class="champ">Nom : </strong>{{ array_key_exists('nom' , $Sinistres['conducteur']) ? $Sinistres['conducteur']['nom'] : ''}}<br>
                            <strong class="champ">Prenom : </strong>{{ array_key_exists('prenom' , $Sinistres['conducteur']) ? $Sinistres['conducteur']['prenom'] : ''}}<br>
                            <strong class="champ">Date de naissance : </strong>{{ array_key_exists('naissance' , $Sinistres['conducteur']) ? $Sinistres['conducteur']['naissance'] : ''}}<br>
                            <strong class="champ">Adresse : </strong>{{ array_key_exists('addresse' , $Sinistres['conducteur']) ? $Sinistres['conducteur']['addresse'] : ''}}<br>
                            <strong class="champ">Téléphone : </strong>{{ array_key_exists('telephone' , $Sinistres['conducteur']) ? $Sinistres['conducteur']['telephone'] : ''}}<br>
                            <strong class="champ">Email : </strong>{{ array_key_exists('email' , $Sinistres['conducteur']) ? $Sinistres['conducteur']['email'] : ''}}<br>
                            <strong class="champ">Permis de conduire N° : </strong>{{ array_key_exists('numpermis' , $Sinistres['conducteur']) ? $Sinistres['conducteur']['numpermis'] : ''}}<br>
                            <strong class="champ">Pays : </strong>{{ array_key_exists('pays' , $Sinistres['conducteur']) ? $Sinistres['conducteur']['pays'] : ''}}<br>
                            <strong class="champ">Catégorie : </strong>{{ array_key_exists('email' , $Sinistres['conducteur']) ? $Sinistres['conducteur']['email'] : ''}}<br>
                            <strong class="champ">Permis valide jusqu'au : </strong>{{ array_key_exists('permis' , $Sinistres['conducteur']) ? $Sinistres['conducteur']['permis'] : ''}}<br>
                        </div>
                        
                        {{-- Observation A --}}
                        <div>
                            <h5 class="border-bottom font-weight-bold my-3">Dégats apparents au véhicule</h5>
                            <strong class="champ">Description : </strong>{{  array_key_exists('degat' , $Sinistres['observation']) ? $Sinistres['observation']['degat'] : ''}}<br>
                            <strong class="champ">Mes Observations : </strong>{{  array_key_exists('observation' , $Sinistres['observation']) ? $Sinistres['observation']['observation'] : ''}}<br>
                        </div>
                        
                        {{-- Circonstance A --}}
                        <h5 class="border-bottom font-weight-bold my-3">Circonstance</h5>
                        <strong class="champ">Circonstance : </strong>{{  array_key_exists('circonstance' , $Sinistres) ? $Sinistres['circonstance'] : ''}}<br>

                        {{-- Capture Vehicule A --}}
                        <div>
                            <h5 class="border-bottom font-weight-bold my-3">Photos</h5>
                            <div class="row pb-2">
                                <div class="col-lg-2">
                                    <a target="_blank" class="" href="{{  array_key_exists('AvantA' , $Sinistres) ? $Sinistres['AvantA'] : '#'}} "style="font-weight: 500">
                                        <img class="img-fluid h-75 w-100 border" style="border-radius: 10px;" src="{{  array_key_exists('AvantA' , $Sinistres) ? $Sinistres['AvantA'] : ''}}" alt="">
                                    </a>
                                    <span>Avant</span>
                                </div>
    
                                <div class="col-lg-2">
                                    <a target="_blank" class="" href="{{  array_key_exists('ArriereA' , $Sinistres) ? $Sinistres['ArriereA'] : '#'}} "style="font-weight: 500">
                                        <img class="img-fluid h-75 w-100 border" style="border-radius: 10px;" src="{{  array_key_exists('ArriereA' , $Sinistres) ? $Sinistres['ArriereA'] : ''}}" alt="">
                                    </a>
                                    <span>Arriere</span>
                                </div>
    
                                <div class="col-lg-2">
                                    <a target="_blank" class="" href="{{  array_key_exists('DroitA' , $Sinistres) ? $Sinistres['DroitA'] : '#'}} " style="font-weight: 500">
                                        <img class="img-fluid h-75 w-100 border" style="border-radius: 10px;" src="{{ array_key_exists('DroitA' , $Sinistres) ? $Sinistres['DroitA'] : ''}}" alt="">
                                    </a>
                                    <span>Droit</span>
                                </div>
    
                                <div class="col-lg-2">
                                    <a target="_blank" class="" href="{{  array_key_exists('GaucheA' , $Sinistres) ? $Sinistres['GaucheA'] : '#'}} "style="font-weight: 500">
                                        <img class="img-fluid h-75 w-100 border" style="border-radius: 10px;" src="{{ array_key_exists('GaucheA' , $Sinistres) ? $Sinistres['GaucheA'] : ''}}" alt="">
                                    </a>
                                    <span>Gauche</span>
                                </div>
    
                                <div class="col-lg-2">
                                    <a target="_blank" class="" href="{{  array_key_exists('HautA' , $Sinistres) ? $Sinistres['HautA'] : '#'}} "style="font-weight: 500">
                                        <img class="img-fluid h-75 w-100 border" style="border-radius: 10px;" src="{{  array_key_exists('HautA' , $Sinistres) ? $Sinistres['HautA'] : ''}}" alt="">
                                    </a>
                                    <span>Haut</span>
                                </div>
                            </div>
                        </div>
                        
                        {{-- Signature A --}}
                        <h5 class="border-bottom font-weight-bold my-3">Signature A</h5>
                        <img class="w-100 border" src="{{ array_key_exists('SignatureA' , $Sinistres) ? $Sinistres['SignatureA'] : ''}}" alt="">

                    </div>
                    
                    <div class="col-md-2"></div>

                    {{-- Infos B --}}
                    <div class="col-md-5 pt-3 col2 border bg-warning box-sh-card" style="border-radius: 15px">
                        <!-- DATA TABLE-->
                        <h3 class="veh bg-light py-2 px-2 box-sh-card">Véhicule B</h3>

                        {{-- Infos Assuré B --}}
                        <div>
                            <h5 class="border-bottom font-weight-bold my-3">Preneur Assurance/Assuré</h5>
                            <strong class="champ">Nom : </strong>{{array_key_exists('nom' , $Sinistres['assureB']) ? $Sinistres['assureB']['nom'] : ''}}<br>
                            <strong class="champ">Prénom : </strong>{{array_key_exists('prenom' , $Sinistres['assureB']) ? $Sinistres['assureB']['prenom'] : ''}}<br>
                            <strong class="champ">Adresse : </strong>{{array_key_exists('addresse' , $Sinistres['assureB']) ?  $Sinistres['assureB']['addresse'] : ''}}<br>
                            <strong class="champ">Téléphone : </strong>{{array_key_exists('telephone' , $Sinistres['assureB']) ? $Sinistres['assureB']['telephone'] : ''}}<br>
                            <strong class="champ">Code Postal : </strong>{{array_key_exists('code postal' , $Sinistres['assureB']) ? $Sinistres['assureB']['code postal'] : ''}}<br>
                            <strong class="champ">Email : </strong>{{array_key_exists('email' , $Sinistres['assureB']) ? $Sinistres['assureB']['email'] : ''}}<br>
                        </div>
                        
                        {{-- Infos Vehicule B --}}
                        <div>
                            <h5 class="border-bottom font-weight-bold my-3">Vehicule</h5>
                            <strong class="champ">Marque : </strong>{{array_key_exists('marque' , $Sinistres['vehiculeB']) ? $Sinistres['vehiculeB']['marque'] : ''}}<br>
                            <strong class="champ">N°Immatriculation : </strong>{{array_key_exists('numero_immatriculation' , $Sinistres['vehiculeB']) ? $Sinistres['vehiculeB']['numero_immatriculation'] : ''}}<br>
                            <strong class="champ">Pays Immatriculation : </strong>{{array_key_exists('pays_immatriculation' , $Sinistres['vehiculeB']) ? $Sinistres['vehiculeB']['pays_immatriculation'] : ''}}<br>
                        </div>
                        
                        {{-- Infos Société d'assurance B --}}
                        {{-- <div>
                            <h5 class="border-bottom font-weight-bold my-3">Société d'assurance</h5>
                            <strong class="champ">Nom : </strong>{{array_key_exists('NomA' , $Sinistres) ?  $Sinistres['NomA'] : ''}}<br>
                            <strong class="champ">N° contrat : </strong>{{array_key_exists('num_contrat' , $Sinistres) ?  $Sinistres['num_contrat'] : ''}}<br>
                            <strong class="champ">N° carteverte : </strong>{{array_key_exists('num_carte_verte' , $Sinistres) ?  $Sinistres['num_carte_verte'] : ''}}<br>
                            <strong class="champ">Du : </strong>{{array_key_exists('du' , $Sinistres) ?  $Sinistres['du'] : ''}}<br>
                            <strong class="champ">Au : </strong>{{array_key_exists('au' , $Sinistres) ?  $Sinistres['au'] : ''}}<br>
                            <strong class="champ">Agence : </strong>{{array_key_exists('agence' , $Sinistres) ?  $Sinistres['agence'] : ''}}<br>
                            <strong class="champ">Nom agence : </strong>{{array_key_exists('nom_agence' , $Sinistres) ?  $Sinistres['nom_agence'] : ''}}<br>
                            <strong class="champ">Adresse : </strong>{{array_key_exists('adresse' , $Sinistres) ?  $Sinistres['adresse'] : ''}}<br>
                            <strong class="champ">Pays : </strong>{{array_key_exists('pays' , $Sinistres) ?  $Sinistres['pays'] : ''}}<br>
                            <strong class="champ">Téléphone : </strong>{{array_key_exists('telephone' , $Sinistres) ?  $Sinistres['telephone'] : ''}}<br>
                            <strong class="champ">Email : </strong>{{array_key_exists('email' , $Sinistres) ?  $Sinistres['email'] : ''}}<br>
                            <strong class="champ">Prise en charge ? </strong>{{array_key_exists('prise_encharge' , $Sinistres) ?  $Sinistres['prise_encharge'] : ''}}<br>
                        </div> --}}
                        
                        {{-- Infos Conducteurs B --}}
                        <div>
                            <h5 class="border-bottom font-weight-bold my-3">Conducteur</h5>
                            <strong class="champ">Nom : </strong>{{ array_key_exists('nom' , $Sinistres['conducteurB']) ? $Sinistres['conducteurB']['nom'] : ''}}<br>
                            <strong class="champ">Prenom : </strong>{{ array_key_exists('prenom' , $Sinistres['conducteurB']) ? $Sinistres['conducteurB']['prenom'] : ''}}<br>
                            <strong class="champ">Date de naissance : </strong>{{ array_key_exists('naissance' , $Sinistres['conducteurB']) ? $Sinistres['conducteurB']['naissance'] : ''}}<br>
                            <strong class="champ">Adresse : </strong>{{ array_key_exists('addresse' , $Sinistres['conducteurB']) ? $Sinistres['conducteurB']['addresse'] : ''}}<br>
                            <strong class="champ">Téléphone : </strong>{{ array_key_exists('telephone' , $Sinistres['conducteurB']) ? $Sinistres['conducteurB']['telephone'] : ''}}<br>
                            <strong class="champ">Email : </strong>{{ array_key_exists('email' , $Sinistres['conducteurB']) ? $Sinistres['conducteurB']['email'] : ''}}<br>
                            <strong class="champ">Permis de conduire N° : </strong>{{ array_key_exists('numpermis' , $Sinistres['conducteurB']) ? $Sinistres['conducteurB']['numpermis'] : ''}}<br>
                            <strong class="champ">Pays : </strong>{{ array_key_exists('pays' , $Sinistres['conducteurB']) ? $Sinistres['conducteurB']['pays'] : ''}}<br>
                            <strong class="champ">Catégorie : </strong>{{ array_key_exists('email' , $Sinistres['conducteurB']) ? $Sinistres['conducteurB']['email'] : ''}}<br>
                            <strong class="champ">Permis valide jusqu'au : </strong>{{ array_key_exists('permis' , $Sinistres['conducteurB']) ? $Sinistres['conducteurB']['permis'] : ''}}<br>
                        </div>
                        
                        {{-- Observation B --}}
                        <div>
                            <h5 class="border-bottom font-weight-bold my-3">Dégats apparents au véhicule</h5>
                            <strong class="champ">Description : </strong>{{  array_key_exists('degat' , $Sinistres['observation']) ? $Sinistres['observation']['degat'] : ''}}<br>
                            <strong class="champ">Mes Observations : </strong>{{  array_key_exists('observation' , $Sinistres['observation']) ? $Sinistres['observation']['observation'] : ''}}<br>
                        </div>
                        
                        {{-- Circonstance B --}}
                        <h5 class="border-bottom font-weight-bold my-3">Circonstance</h5>
                        <strong class="champ">Circonstance : </strong>{{  array_key_exists('circonstance' , $Sinistres) ? $Sinistres['circonstance'] : ''}}<br>

                        {{-- Capture Vehicule B --}}
                        <div>
                            <h5 class="border-bottom font-weight-bold my-3">Photos</h5>
                            <div class="row pb-2">
                                <div class="col-lg-2">
                                    <a target="_blank" class="" href="{{  array_key_exists('AvantB' , $Sinistres) ? $Sinistres['AvantB'] : '#'}} "style="font-weight: 500">
                                        <img class="img-fluid h-75 w-100 border" style="border-radius: 10px;" src="{{  array_key_exists('AvantB' , $Sinistres) ? $Sinistres['AvantB'] : ''}}" alt="">
                                    </a>
                                    <span>Avant</span>
                                </div>
    
                                <div class="col-lg-2">
                                    <a target="_blank" class="" href="{{  array_key_exists('ArriereB' , $Sinistres) ? $Sinistres['ArriereB'] : '#'}} "style="font-weight: 500">
                                        <img class="img-fluid h-75 w-100 border" style="border-radius: 10px;" src="{{  array_key_exists('ArriereB' , $Sinistres) ? $Sinistres['ArriereB'] : ''}}" alt="">
                                    </a>
                                    <span>Arriere</span>
                                </div>
    
                                <div class="col-lg-2">
                                    <a target="_blank" class="" href="{{  array_key_exists('DroitB' , $Sinistres) ? $Sinistres['DroitB'] : '#'}} " style="font-weight: 500">
                                        <img class="img-fluid h-75 w-100 border" style="border-radius: 10px;" src="{{ array_key_exists('DroitB' , $Sinistres) ? $Sinistres['DroitB'] : ''}}" alt="">
                                    </a>
                                    <span>Droit</span>
                                </div>
    
                                <div class="col-lg-2">
                                    <a target="_blank" class="" href="{{  array_key_exists('GaucheB' , $Sinistres) ? $Sinistres['GaucheB'] : '#'}} "style="font-weight: 500">
                                        <img class="img-fluid h-75 w-100 border" style="border-radius: 10px;" src="{{ array_key_exists('GaucheB' , $Sinistres) ? $Sinistres['GaucheB'] : ''}}" alt="">
                                    </a>
                                    <span>Gauche</span>
                                </div>
    
                                <div class="col-lg-2">
                                    <a target="_blank" class="" href="{{  array_key_exists('HautB' , $Sinistres) ? $Sinistres['HautB'] : '#'}} "style="font-weight: 500">
                                        <img class="img-fluid h-75 w-100 border" style="border-radius: 10px;" src="{{  array_key_exists('HautB' , $Sinistres) ? $Sinistres['HautB'] : ''}}" alt="">
                                    </a>
                                    <span>Haut</span>
                                </div>
                            </div>
                        </div>
                        
                        {{-- Signature B --}}
                        <h5 class="border-bottom font-weight-bold my-3">Signature A</h5>
                        <img class="w-100 border" src="{{ array_key_exists('SignatureB' , $Sinistres) ? $Sinistres['SignatureB'] : ''}}" alt="">
                        
                    </div>
                </div>

            <div class="row border-bottom mt-4"><h3 class="tem">Témoin</h3></div>

                <div class="row">
                    @if (count($Sinistres['temoins']['data']) > 0)
                    
                        @foreach ( $Sinistres['temoins']['data'] as $temoin )
                                
                            <div class=" col-md-3">
                                <strong class="champ">Nom : </strong>{{ array_key_exists('nomt' , $temoin) ? $temoin['nomt'] : ''}}
                            </div>
                            <div class=" col-md-3">
                                <strong class="champ">Prénom : </strong>{{ array_key_exists('prenomt' , $temoin) ? $temoin['prenomt'] : ''}}
                            </div>
                            <div class=" col-md-3">
                                <strong class="champ">Adresse : </strong>{{ array_key_exists('Adresse' , $temoin) ? $temoin['Adresse'] : ''}}
                            </div>
                            <div class=" col-md-3">
                                <strong class="champ">Téléphone : </strong>{{ array_key_exists('telephone' , $temoin) ? $temoin['telephone'] : ''}}
                            </div>

                        @endforeach

                    @else 
                            <span>Aucun témoins enregistré.</span>
                    @endif
                </div>

                <div class="row mt-4 border-bottom"><h3 class="tem">Croquis</h3></div>
                
                <div class="row">
                    <img style="transform:rotate(90deg); width: 25%; padding: auto; margin-left:40%; margin-top:2px;margin-bottom:2px" src="{{array_key_exists('CroquisA' , $Sinistres) ? $Sinistres['CroquisA'] : ''}}" alt="" >
                </div>

            </div>
        </div>

        {{-- <div class="row mt-3">
            <div class="col-12">
                <a class="btn btn-danger" href="{{ route('sinistre.index' , $compagny) }}">Retour</a>
            </div>
        </div> --}}
    </div>

</body>
</html>



{{-- @extends('layouts.master')

@section('styles')
    <style>
        .box-sh-card{
            box-shadow: 1px 1px 6px rgb(118, 118, 118);
        }
    </style>
@endsection('styles')

@section('content') --}}



{{-- @endsection --}}
