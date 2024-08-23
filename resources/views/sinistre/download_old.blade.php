<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    {{-- <link rel="stylesheet" href="{!! asset('/css/bootstrap.min.css') !!}"> --}}
    <style>
        .text-center{
            text-align: center;
        }
        .mx-auto{
            margin: 0px auto;
        }
        
        /*Old Style*/
        .SA{
            margin-bottom:3px;
            margin-top: 1px
        }
        aside{
            display:inline-block;
            background:#EBFEFC;
            width:30%;
            margin-top:30px;
            margin-bottom:3px;
            margin-left:90px;
        }
		ul{
            display:inline-block;
            margin-top: 0px;
            margin-bottom: 0%
        }
        /* .page-break {
            page-break-after: always;
        } */
        .dateC{
            background-color: rgb(236, 254, 255);
            padding: 10px;
        }
        .Ro1{
            background-color: rgb(141, 234, 141);
            padding:0px 10px;
        }
        .col1{
            background-color: rgb(150, 207, 242);
            /* padding: auto; */
            text-align: justify;
            /* margin-right:60%; */
            
            /* position: absolute;
            top:100px;
            left:50px; */
            width: 40% !important;
        }
        .col2{
            background-color: rgb(228, 232, 170);
            /* padding: auto; */
            /* margin-top: 0px !important; */
            text-align: justify;
            /* margin-left:60%;
            margin-top: -670px; */
            position: absolute;
            top:102px;
            right:50px;
            width:40%;
        }
        .veh{
            background-color: rgb(244, 147, 147);
            color: white;
            text-align: center;
        }
        h5{
            background-color:rgb(236, 254, 255);
            color: black;
            text-align: center;
            margin-top: 1%;
            margin-bottom: 1%;
        }
        .champ{
            margin-top: 3%;
            margin-bottom: 3%;
            color: black;
            padding-right: 2%;
            margin-left: 3%;
        }
        .tem{
            /* color: black;
            margin-right:5%;
            margin-bottom: 0%;
            margin-left: 3%; */
        }
        .col12{
            display: inline;
        }
        .TB{
            
            /* padding: auto; */
            /* text-align: justify; */
            /* margin-right:60%; */
        }
        .image{
            background-color: rgb(209, 228, 230);
            width:50%;
            height:300px;
            margin-left:50%;
            margin-top:-28%;
            padding: auto;
        }
        .sign{
            margin-top: 3px;
            margin-left: 50px
        }

        .text-danger{
            color: red;
        }

        .cap{
            width: 100%;
            height: 50%;
            border-radius: 10px;
        }
        .w-50{
            width: 50%;
        }
        .cap-not-found{
            border: 1px solid #d1d5d4;
            padding: 10px;
            border-radius: 10px;
        }
        .signature{
            width: 100%; 
            height:200px; 
            margin-bottom:20px; 
            border-radius:10px;
        }

        .content-picture td{
            height: 250px; 
            border-radius:10px;
            padding: 0px;
            background: #f8f9fa;
        }
        .content-picture td img{
            height: 230px;
            border-radius: 10px;
        }

    </style>
</head>
<body>
    <div class="mx-auto" style="width:21cm;">
        <h3 class="text-center">CONSTAT AMIABLE AUTOMOBILE {{$compagny}}</h3>
        <div>
            <table style="width:100%;">
                <tr>
                    <td style="40%">
                        <strong> Date de l'accident : </strong> <br>
                        {{ array_key_exists('dateSinistre' , $Sinistres['sinistre']) ? $Sinistres['sinistre']['dateSinistre'] : '' }}
                    </td>
                    <td style="20%">
                        <strong> Heure : </strong> <br>
                        {{ array_key_exists('heureSinistre' , $Sinistres['sinistre'] ) ? $Sinistres['sinistre']['heureSinistre'] : ''}}
                    </td>
                    <td style="40%">
                        <strong> Localisation : </strong> <br>
                        {{ array_key_exists('Localisation' , $Sinistres ) ? $Sinistres['Localisation'] : ''}}
                    </td>
                </tr>
            </table>
        </div>

        <div class="row">

            <div class="col-lg-5">

                <div class="col-md-5 col1">
                    <!-- DATA TABLE-->
                    <h3 class="veh">Véhicule A</h3>

                    {{-- Infos Assuré A --}}
                    <div>
                        <h5>Preneur Assurance/Assuré</h5>
                        <strong class="champ">Nom : </strong>{{array_key_exists('nom' , $Sinistres['assure']) ? $Sinistres['assure']['nom'] : ''}}<br>
                        <strong class="champ">Prénom : </strong>{{array_key_exists('prenom' , $Sinistres['assure']) ? $Sinistres['assure']['prenom'] : ''}}<br>
                        <strong class="champ">Adresse : </strong>{{array_key_exists('addresse' , $Sinistres['assure']) ?  $Sinistres['assure']['addresse'] : ''}}<br>
                        <strong class="champ">Téléphone : </strong>{{array_key_exists('telephone' , $Sinistres['assure']) ? $Sinistres['assure']['telephone'] : ''}}<br>
                        <strong class="champ">Code Postal : </strong>{{array_key_exists('code postal' , $Sinistres['assure']) ? $Sinistres['assure']['code postal'] : ''}}<br>
                        <strong class="champ">Email : </strong>{{array_key_exists('email' , $Sinistres['assure']) ? $Sinistres['assure']['email'] : ''}}<br>
                    </div>

                    {{-- Infos Vehicule A --}}
                    <div>
                        <h5>Vehicule</h5>
                        <strong class="champ">Marque : </strong>{{array_key_exists('marque' , $Sinistres['vehicule']) ? $Sinistres['vehicule']['marque'] : ''}}<br>
                        <strong class="champ">N°Immatriculation : </strong>{{array_key_exists('numero_immatriculation' , $Sinistres['vehicule']) ? $Sinistres['vehicule']['numero_immatriculation'] : ''}}<br>
                        <strong class="champ">Pays Immatriculation : </strong>{{array_key_exists('pays_immatriculation' , $Sinistres['vehicule']) ? $Sinistres['vehicule']['pays_immatriculation'] : ''}}<br>
                    </div>

                    {{-- Infos Société d'assurance A --}}
                    <div>
                        <h5 class="border-bottom font-weight-bold my-3">Société d'assurance</h5>
                        <strong class="champ">Nom : </strong>{{array_key_exists('nomAgence' , $Sinistres['assuranceA']) ? $Sinistres['assuranceA']['nomAgence'] : ''}}<br>
                        <strong class="champ">Addresse : </strong>{{array_key_exists('addresse' , $Sinistres['assuranceA']) ? $Sinistres['assuranceA']['addresse'] : ''}}<br>
                        <strong class="champ">Agence : </strong>{{array_key_exists('agence' , $Sinistres['assuranceA']) ? $Sinistres['assuranceA']['agence'] : ''}}<br>
                        <strong class="champ">Du : </strong>{{array_key_exists('du' , $Sinistres['assuranceA']) ? $Sinistres['assuranceA']['du'] : ''}}<br>
                        <strong class="champ">Au : </strong>{{array_key_exists('au' , $Sinistres['assuranceA']) ? $Sinistres['assuranceA']['au'] : ''}}<br>
                        <strong class="champ">Email : </strong>{{array_key_exists('emailCA' , $Sinistres['assuranceA']) ? $Sinistres['assuranceA']['emailCA'] : ''}}<br>
                        <strong class="champ">Nom de la compagnie : </strong>{{array_key_exists('nomCA' , $Sinistres['assuranceA']) ? $Sinistres['assuranceA']['nomCA'] : ''}}<br>
                        <strong class="champ">Numéro de la carte verte : </strong>{{array_key_exists('nomCarteVerte' , $Sinistres['assuranceA']) ? $Sinistres['assuranceA']['nomCarteVerte'] : ''}}<br>
                        <strong class="champ">Numéro de contrat : </strong>{{array_key_exists('numContrat' , $Sinistres['assuranceA']) ? $Sinistres['assuranceA']['numContrat'] : ''}}<br>
                        <strong class="champ">Pays de la compagnie : </strong>{{array_key_exists('paysCA' , $Sinistres['assuranceA']) ? $Sinistres['assuranceA']['paysCA'] : ''}}<br>
                        <strong class="champ">Prise en charge : </strong>{{array_key_exists('priseEnCharge' , $Sinistres['assuranceA']) ? $Sinistres['assuranceA']['priseEnCharge'] : ''}}<br>
                        <strong class="champ">Téléphone de la compagnie : </strong>{{array_key_exists('telephoneCA' , $Sinistres['assuranceA']) ? $Sinistres['assuranceA']['telephoneCA'] : ''}}<br>
                    </div>

                    {{-- Infos Conducteurs A --}}
                    <div>
                        <h5>Conducteur</h5>
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
                        <h5>Dégats apparents au véhicule</h5>
                        <strong class="champ">Description : </strong>{{  array_key_exists('degat' , $Sinistres['observation']) ? $Sinistres['observation']['degat'] : ''}}<br>
                        <strong class="champ">Mes Observations : </strong>{{  array_key_exists('observation' , $Sinistres['observation']) ? $Sinistres['observation']['observation'] : ''}}<br>
                    </div>

                    {{-- Circonstance A --}}
                    <h5>Circonstance</h5>
                    <strong class="champ">Circonstance : </strong>{{  array_key_exists('circonstance' , $Sinistres) ? $Sinistres['circonstance'] : ''}}<br>
                    
                    {{-- Signature A --}}
                    <h5 class="font-weight-bold">Signature A</h5>
                    @if (array_key_exists('SignatureA' , $Sinistres) && $Sinistres['SignatureA'] != "")
                        <img class="signature" src="{{ array_key_exists('SignatureA' , $Sinistres) ? $Sinistres['SignatureA'] : ''}}" alt="">
                    @else 
                        <div>Pas de signature</div>
                    @endif
                </div>

                <div class="col-md-5 col2">
                    <div style="position: relative; top:-17px;">

                        <!-- DATA TABLE-->
                        <h3 class="veh" >Véhicule B</h3>

                        {{-- Infos Assuré B --}}
                        <div>
                            <h5>Preneur Assurance/Assuré</h5>
                            <strong class="champ">Nom : </strong>{{array_key_exists('nom' , $Sinistres['assureB']) ? $Sinistres['assureB']['nom'] : ''}}<br>
                            <strong class="champ">Prénom : </strong>{{array_key_exists('prenom' , $Sinistres['assureB']) ? $Sinistres['assureB']['prenom'] : ''}}<br>
                            <strong class="champ">Adresse : </strong>{{array_key_exists('addresse' , $Sinistres['assureB']) ?  $Sinistres['assureB']['addresse'] : ''}}<br>
                            <strong class="champ">Téléphone : </strong>{{array_key_exists('telephone' , $Sinistres['assureB']) ? $Sinistres['assureB']['telephone'] : ''}}<br>
                            <strong class="champ">Code Postal : </strong>{{array_key_exists('code postal' , $Sinistres['assureB']) ? $Sinistres['assureB']['code postal'] : ''}}<br>
                            <strong class="champ">Email : </strong>{{array_key_exists('email' , $Sinistres['assureB']) ? $Sinistres['assureB']['email'] : ''}}<br>
                        </div>

                        {{-- Infos Vehicule B --}}
                        <div>
                            <h5>Vehicule</h5>
                            <strong class="champ">Marque : </strong>{{array_key_exists('marque' , $Sinistres['vehiculeB']) ? $Sinistres['vehiculeB']['marque'] : ''}}<br>
                            <strong class="champ">N°Immatriculation : </strong>{{array_key_exists('numero_immatriculation' , $Sinistres['vehiculeB']) ? $Sinistres['vehiculeB']['numero_immatriculation'] : ''}}<br>
                            <strong class="champ">Pays Immatriculation : </strong>{{array_key_exists('pays_immatriculation' , $Sinistres['vehiculeB']) ? $Sinistres['vehiculeB']['pays_immatriculation'] : ''}}<br>
                        </div>

                        {{-- Infos Société d'assurance B --}}
                        <div>
                            <h5 class="border-bottom font-weight-bold my-3">Société d'assurance</h5>
                            @if (array_key_exists('assuranceB' , $Sinistres))
                                <strong class="champ">Nom : </strong>{{array_key_exists('nomAgence' , $Sinistres['assuranceB']) ? $Sinistres['assuranceB']['nomAgence'] : ''}}<br>
                                <strong class="champ">Addresse : </strong>{{array_key_exists('addresse' , $Sinistres['assuranceB']) ? $Sinistres['assuranceB']['addresse'] : ''}}<br>
                                <strong class="champ">Agence : </strong>{{array_key_exists('agence' , $Sinistres['assuranceB']) ? $Sinistres['assuranceB']['agence'] : ''}}<br>
                                <strong class="champ">Du : </strong>{{array_key_exists('du' , $Sinistres['assuranceB']) ? $Sinistres['assuranceB']['du'] : ''}}<br>
                                <strong class="champ">Au : </strong>{{array_key_exists('au' , $Sinistres['assuranceB']) ? $Sinistres['assuranceB']['au'] : ''}}<br>
                                <strong class="champ">Email : </strong>{{array_key_exists('emailCA' , $Sinistres['assuranceB']) ? $Sinistres['assuranceB']['emailCA'] : ''}}<br>
                                <strong class="champ">Nom de la compagnie : </strong>{{array_key_exists('nomCA' , $Sinistres['assuranceB']) ? $Sinistres['assuranceB']['nomCA'] : ''}}<br>
                                <strong class="champ">Numéro de la carte verte : </strong>{{array_key_exists('nomCarteVerte' , $Sinistres['assuranceB']) ? $Sinistres['assuranceB']['nomCarteVerte'] : ''}}<br>
                                <strong class="champ">Numéro de contrat : </strong>{{array_key_exists('numContrat' , $Sinistres['assuranceB']) ? $Sinistres['assuranceB']['numContrat'] : ''}}<br>
                                <strong class="champ">Pays de la compagnie : </strong>{{array_key_exists('paysCA' , $Sinistres['assuranceB']) ? $Sinistres['assuranceB']['paysCA'] : ''}}<br>
                                <strong class="champ">Prise en charge : </strong>{{array_key_exists('priseEnCharge' , $Sinistres['assuranceB']) ? $Sinistres['assuranceB']['priseEnCharge'] : ''}}<br>
                                <strong class="champ">Téléphone de la compagnie : </strong>{{array_key_exists('telephoneCA' , $Sinistres['assuranceB']) ? $Sinistres['assuranceB']['telephoneCA'] : ''}}<br>
                            @endif
                        </div>

                        {{-- Infos Conducteurs B --}}
                        <div>
                            <h5>Conducteur</h5>
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

                        <h5>Dégats apparents au vehicule</h5>
                        <strong class="champ">Description : </strong>{{array_key_exists('DescriptionCB' , $Sinistres) ? $Sinistres['DescriptionCB'] : ''}}<br>
                        <strong class="champ">Mes observations : </strong>{{array_key_exists('DétailleCB' , $Sinistres) ? $Sinistres['DétailleCB'] : ''}}<br>

                        <h5>Circonstance</h5>

                        <strong class="champ">Circonstance : </strong>{{array_key_exists('CirconstanceCB' , $Sinistres) ? $Sinistres['CirconstanceCB'] : ''}}<br>
                        {{--
                        <h5 class="font-weight-bold">Photos</h5>

                            <table style="width: 100%;">
                            <tr>
                                <td style="width: 20%;">
                                    <a class="" href="{{  array_key_exists('AvantB' , $Sinistres) ? $Sinistres['AvantB'] : '#'}} "style="font-weight: 500">
                                        <img class="img-fluid h-75 w-100 border" style="border-radius: 10px; width:20%;" src="{{  array_key_exists('AvantB' , $Sinistres) ? $Sinistres['AvantB'] : ''}}" alt="">
                                    </a>
                                    <span>Avant</span>
                                </td>
                                <td style="width: 20%;">
                                    <a class="" href="{{  array_key_exists('ArriereB' , $Sinistres) ? $Sinistres['ArriereB'] : '#'}} "style="font-weight: 500">
                                        <img class="img-fluid h-75 w-100 border" style="border-radius: 10px; width:20%;" src="{{  array_key_exists('ArriereB' , $Sinistres) ? $Sinistres['ArriereB'] : ''}}" alt="">
                                    </a>
                                    <span>Arriere</span>
                                </td>
                                <td style="width: 20%;">
                                    <a class="" href="{{  array_key_exists('DroitB' , $Sinistres) ? $Sinistres['DroitB'] : '#'}} " style="font-weight: 500">
                                        <img class="img-fluid h-75 w-100 border" style="border-radius: 10px; width:20%;" src="{{ array_key_exists('DroitB' , $Sinistres) ? $Sinistres['DroitB'] : ''}}" alt="">
                                    </a>
                                    <span>Droit</span>
                                </td>
                                <td style="width: 20%;">
                                    <a class="" href="{{  array_key_exists('GaucheB' , $Sinistres) ? $Sinistres['GaucheB'] : '#'}} "style="font-weight: 500">
                                        <img class="img-fluid h-75 w-100 border" style="border-radius: 10px; width:20%;" src="{{ array_key_exists('GaucheB' , $Sinistres) ? $Sinistres['GaucheB'] : ''}}" alt="">
                                    </a>
                                    <span>Gauche</span>
                                </td>
                                <td style="width: 20%;">
                                    <div class="col-lg-2">
                                        <a class="" href="{{  array_key_exists('HautB' , $Sinistres) ? $Sinistres['HautB'] : '#'}} "style="font-weight: 500">
                                            <img class="img-fluid h-75 w-100 border" style="border-radius: 10px; width:20%;" src="{{  array_key_exists('HautB' , $Sinistres) ? $Sinistres['HautB'] : ''}}" alt="">
                                        </a>
                                        <span>Haut</span>
                                    </div>
                                </td>
                            </tr>
                        </table> --}}

                        <h5 class="font-weight-bold">Signature B</h5>
                        @if (array_key_exists('SignatureB' , $Sinistres) && $Sinistres['SignatureB'] != "")
                            <img class="signature" src="{{ array_key_exists('SignatureB' , $Sinistres) ? $Sinistres['SignatureB'] : ''}}" alt="">
                        @else 
                            <div>Pas de signature</div>
                        @endif

                        <!-- END DATA TABLE -->
                    </div>
                </div>
            </div>

        </div>

        <div class="TB" style="padding-top:60px !important;">
            {{-- Testi --}}
            <h3 class="tem"><strong>Témoin</strong></h3>
                
                @if (count($Sinistres['temoins']['data']) > 0)
                    <table style="width: 100%">
                        @foreach ( $Sinistres['temoins']['data'] as $temoin )
                            
                            <tr>
                                <td style="width:25%;">
                                    <strong class="champ">Nom : </strong>{{ array_key_exists('nomt' , $temoin) ? $temoin['nomt'] : ''}}
                                </td>
                                <td style="width:25%;">
                                    <strong class="champ">Prénom : </strong>{{ array_key_exists('prenomt' , $temoin) ? $temoin['prenomt'] : ''}}
                                </td>
                                <td style="width:25%;">
                                    <strong class="champ">Adresse : </strong>{{ array_key_exists('addresse' , $temoin) ? $temoin['addresse'] : ''}}
                                </td>
                                <td style="width:25%;">
                                    <strong class="champ">Téléphone : </strong>{{ array_key_exists('telephone' , $temoin) ? $temoin['telephone'] : ''}}
                                </td>
                            </tr>
                        
                        @endforeach
                    </table>
                @else 
                    <span class="text-danger">Aucun témoins enregistré.</span>
                @endif

            {{-- Infos Blesses --}}
            <h3 class="font-weight-bold px-2">Information sur les blaissés</h3>

            @if (count($Sinistres['blesse']['data']) > 0)
                <table style="width: 100%; ">
                    @foreach ( $Sinistres['blesse']['data'] as $key => $blesse )
                        
                        <tr>
                            <td colspan="4"><strong> => Blessé {{ ++$key }}</strong></td>
                        </tr>
                        <tr>
                            <td style="width:25%;"><strong> Nom : </strong> {{array_key_exists('nom' , $blesse) ? $blesse['nom'] : ''}}</td>
                            <td style="width:25%;"><strong>Prénom : </strong> {{array_key_exists('prenom' , $blesse) ? $blesse['prenom'] : ''}}</td>
                            <td style="width:25%;"><strong>Profession  : </strong> {{array_key_exists('profession' , $blesse) ? $blesse['profession'] : ''}}</td>
                            <td style="width:25%;"><strong>Téléphone : </strong> {{array_key_exists('telephone' , $blesse) ? $blesse['telephone'] : ''}}</td>
                        </tr>
                        <tr>
                            <td style="width:25%;"><strong>Adresse : </strong> {{array_key_exists('Adresse' , $blesse) ? $blesse['Adresse'] : ''}}</td>
                            <td style="width:25%;"><strong>Situation : </strong> {{array_key_exists('situation' , $blesse) ? $blesse['situation'] : ''}}</td>
                            <td style="width:25%;"><strong>Nature  : </strong> {{array_key_exists('nature' , $blesse) ? $blesse['nature'] : ''}}</td>
                            <td style="width:25%;"><strong>Soin/Hospitalisé : </strong> {{array_key_exists('centrehospital' , $blesse) ? $blesse['centrehospital'] : ''}}</td>
                        </tr>
                    
                    @endforeach
                </table>
            @else 
                <span class="text-danger">Aucun blessé enregistré.</span>
            @endif

        </div>

        <div>
            <h3>Captures Véhicule A</h3>
            <table class="content-picture" style="width: 100%;">
                <tr style="border:1px solid red !important;">
                    <td class="w-50">
                        @if (array_key_exists('AvantA' , $Sinistres) && $Sinistres['AvantA'] != "")
                            <img class="cap" src="{{ array_key_exists('AvantA' , $Sinistres) ? $Sinistres['AvantA'] : ''}}" alt="">
                        @else 
                            <div class="text-center text-danger cap-not-found">Pas de capture</div>
                        @endif
                        <div class="text-center">Avant</div>
                    </td>
                    <td class="w-50">
                        @if (array_key_exists('ArriereA' , $Sinistres) && $Sinistres['ArriereA'] != "")
                            <img class="cap" src="{{  array_key_exists('ArriereA' , $Sinistres) ? $Sinistres['ArriereA'] : ''}}" alt="">
                        @else 
                            <div class="text-center text-danger cap-not-found">Pas de capture</div>
                        @endif
                        <div class="text-center">Arriere</div>
                    </td>
                </tr>
                <tr>
                    <td class="w-50">
                        @if (array_key_exists('DroitA' , $Sinistres) && $Sinistres['DroitA'] != "")
                            <img class="cap" src="{{ array_key_exists('DroitA' , $Sinistres) ? $Sinistres['DroitA'] : ''}}" alt="">
                        @else 
                            <div class="text-center text-danger cap-not-found">Pas de capture</div>
                        @endif
                        <div class="text-center">Droit</div>
                    </td>
                    <td class="w-50">
                        @if (array_key_exists('GaucheA' , $Sinistres) && $Sinistres['GaucheA'] != "")
                            <img class="cap" src="{{ array_key_exists('GaucheA' , $Sinistres) ? $Sinistres['GaucheA'] : ''}}" alt="">
                        @else 
                            <div class="text-center text-danger cap-not-found">Pas de capture</div>
                        @endif
                        <div class="text-center">Gauche</div>
                    </td>
                </tr>
                <tr>
                    <td class="w-50">
                        <div class="col-lg-2">
                            @if (array_key_exists('HautA' , $Sinistres) && $Sinistres['HautA'] != "")
                                <img class="cap" src="{{  array_key_exists('HautA' , $Sinistres) ? $Sinistres['HautA'] : ''}}" alt="">
                            @else 
                                <div class="text-center text-danger cap-not-found">Pas de capture</div>
                            @endif
                            <div class="text-center">Haut</div>
                        </div>
                    </td>
                </tr>
            </table>
        </div>

        <div>
            <h3>Captures Véhicule B</h3>
            <table class="content-picture" style="width: 100%;">
                <tr>
                    <td class="w-50">
                        @if (array_key_exists('AvantB' , $Sinistres) && $Sinistres['AvantB'] != "")
                            <img class="cap" src="{{ array_key_exists('AvantB' , $Sinistres) ? $Sinistres['AvantB'] : ''}}" alt="">
                        @else 
                            <div class="text-center text-danger cap-not-found">Pas de capture</div>
                        @endif
                        <div class="text-center">Avant</div>
                    </td>
                    <td class="w-50">
                        @if (array_key_exists('ArriereB' , $Sinistres) && $Sinistres['ArriereB'] != "")
                            <img class="cap" src="{{  array_key_exists('ArriereB' , $Sinistres) ? $Sinistres['ArriereB'] : ''}}" alt="">
                        @else 
                            <div class="text-center text-danger cap-not-found">Pas de capture</div>
                        @endif
                        <div class="text-center">Arriere</div>
                    </td>
                </tr>
                <tr>
                    <td class="w-50">
                        @if (array_key_exists('DroitB' , $Sinistres) && $Sinistres['DroitB'] != "")
                            <img class="cap" src="{{ array_key_exists('DroitB' , $Sinistres) ? $Sinistres['DroitB'] : ''}}" alt="">
                        @else 
                            <div class="text-center text-danger cap-not-found">Pas de capture</div>
                        @endif
                        <div class="text-center">Droit</div>
                    </td>
                    <td class="w-50">
                        @if (array_key_exists('GaucheB' , $Sinistres) && $Sinistres['GaucheB'] != "")
                            <img class="cap" src="{{ array_key_exists('GaucheB' , $Sinistres) ? $Sinistres['GaucheB'] : ''}}" alt="">
                        @else 
                            <div class="text-center text-danger cap-not-found">Pas de capture</div>
                        @endif
                        <div class="text-center">Gauche</div>
                    </td>
                </tr>
                <tr>
                    <td class="w-50">
                        <div class="col-lg-2">
                            @if (array_key_exists('HautB' , $Sinistres) && $Sinistres['HautB'] != "")
                                <img class="cap" src="{{  array_key_exists('HautB' , $Sinistres) ? $Sinistres['HautB'] : ''}}" alt="">
                            @else 
                                <div class="text-center text-danger cap-not-found">Pas de capture</div>
                            @endif
                            <div class="text-center">Haut</div>
                        </div>
                    </td>
                </tr>
            </table>
        </div>

        <div class="row">
            <h3>Croquis</h3>
            @if (array_key_exists('croquis' , $Sinistres) && $Sinistres['croquis'] != "")
                <img style="width: 50%; margin-top:2px;margin-bottom:2px; border-radius:10px;" src="{{array_key_exists('croquis' , $Sinistres) ? $Sinistres['croquis'] : ''}}" alt="" >
            @else
                <div class="text-danger">Page de croquis</div>
            @endif
        </div>

    </div>
</body>
</html>