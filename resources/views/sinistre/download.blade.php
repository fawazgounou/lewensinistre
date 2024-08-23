<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        .header, .header tr, .header td, .header th{
            /* border: 1px solid; */
            text-align: center;
        }
        .header{
            border-collapse: collapse;
            width: 100%;
        }
        .content-veh{
            /* display: -webkit-flex;
            display: -webkit-box;
            display: flex;
            flex-direction: row;
            justify-content: space-around; */

            /* width: 100%;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            display: -webkit-flex;
            -webkit-flex-direction: row;
            -webkit-justify-content: space-between; */

            width: 100%;
            padding-top: 10px;
        }
        .content-veh .veh{
            width: 100%;
            display: inline-block;
        }
        .content-veh .veh h4{
            text-align: center;
            padding: 5px;
            font-weight: 800;
            font-size: 16px;
            margin: 0px !important;
        }
        .content-veh #veh-a{
            background-color: rgba(146, 222, 255, 0.507);
            border-right: 3px solid rgb(65, 178, 219);
            border-bottom: 3px solid rgb(65, 178, 219);
            padding: 0px;

        }
        .content-veh #veh-a h4{
            background-color: rgb(65, 178, 219);
            color: white;
        }
        .content-veh #veh-b h4{
            background-color: rgb(255, 248, 146);
        }
        .content-veh #veh-b{
            background-color: rgba(255, 248, 146, 0.507);
            border-left: 3px solid rgb(255, 248, 146);
            border-bottom: 3px solid rgb(255, 248, 146);
            padding: 0px;
        }

        .child-content{
            padding: 10px;
        }
        .content-veh #veh-a h5 , .content-veh #veh-b h5{
            font-weight: 900;
            border-bottom: 1px solid;
        }
        .content-veh #veh-a .child-content{
            border-bottom: 1px solid;
            border-left: 1px solid;
        }
        .content-veh #veh-b .child-content{
            border-bottom: 1px solid;
            border-right: 1px solid;
        }

        .img-signature{
            width: 100%;
            height:200px;
            margin-bottom:20px;
            border-radius:10px;
            border: 1px solid;
        }
        .text-orange{
            color: orange;
        }
        .content-croquis{
            /* background: url('/images/grid.webp'); */
            width: 50%;
            margin: auto;
            margin-top: -26px;
        }
        .content-croquis .croquis{
            margin: auto;
            width: 100%;
            text-align: center;
            height: 250px;
            border-radius: 10px;
            border:1px solid;
        }
        .content-croquis h4{
            text-align: center;
            font-weight: 900;
        }
        .content-witnesses , .content-injured{
            padding: 20px 0px;
        }
        .content-witnesses h4 , .content-injured h4{
            font-weight: 900;
        }

        .content-picture td{
            height: 250px;
            border-radius:10px !important;
            padding: 0px;
            /* background: #f8f9fa; */
            border-radius: 10px;
            padding: 0px 40px !important;
            /* border: 1px solid #d1d5d4; */
        }
        .content-picture td img{
            height: 300px;
            border: 1px solid;
        }
        .w-50{
            width: 50%;
        }
        .w-20{
            width: 20%;
        }
        .cap{
            width: 100%;
            /* height: 60%; */
            border-radius: 10px;
        }
        .cap-not-found{
            padding: 10px;
            border-radius: 10px;
        }
        .cap-a , .cap-b{
            padding: 20px 0px;
        }
        .cap-a h4 , .cap-b h4{
            font-weight: 900;
        }
        .cap-title{
            font-weight: 900;
        }
        .text-center{
            text-align: center;
        }
        .text-danger{
            color: red;
        }
    </style>
    
</head>
<body>

    <div>
        <h3 class="text-center border-bottom border-primary font-weight-bold">CONSTAT AMIABLE AUTOMOBILE POUR <span class="text-orange">{{strtoupper($compagny)}}</span></h3>

        <table class="header" style="width: 100%">
            <tr>
                <th>Date</th>
                <th>Heure</th>
                <th>Localisation</th>
            </tr>
            <tr>
                <td>{{ array_key_exists('dateSinistre' , $Sinistres['sinistre']) ? $Sinistres['sinistre']['dateSinistre'] : '' }}</td>
                <td>{{ array_key_exists('heureSinistre' , $Sinistres['sinistre'] ) ? $Sinistres['sinistre']['heureSinistre'] : '' }}</td>
                <td>{{ array_key_exists('Localisation' , $Sinistres ) ? $Sinistres['Localisation'] : '' }}</td>
            </tr>
        </table>

        <table class="content-veh">
            <tr>
                <td style="width: 45%; vertical-align:top;">
                    <div class="veh" id="veh-a">
                        <h4>VEHICULE A</h4>
                        <div class="child-content assure">
                            <h5 class="">Preneur Assurance/Assuré</h5>
                            <strong class="champ">Nom : </strong>{{array_key_exists('nom' , $Sinistres['assure']) ? $Sinistres['assure']['nom'] : ''}}<br>
                            <strong class="champ">Prénom : </strong>{{array_key_exists('prenom' , $Sinistres['assure']) ? $Sinistres['assure']['prenom'] : ''}}<br>
                            <strong class="champ">Adresse : </strong>{{array_key_exists('addresse' , $Sinistres['assure']) ?  $Sinistres['assure']['addresse'] : ''}}<br>
                            <strong class="champ">Téléphone : </strong>{{array_key_exists('telephone' , $Sinistres['assure']) ? $Sinistres['assure']['telephone'] : ''}}<br>
                            <strong class="champ">Code Postal : </strong>{{array_key_exists('code postal' , $Sinistres['assure']) ? $Sinistres['assure']['code postal'] : ''}}<br>
                            <strong class="champ">Email : </strong>{{array_key_exists('email' , $Sinistres['assure']) ? $Sinistres['assure']['email'] : ''}}
                        </div>
                        <div class="child-content veh-info">
                            <h5 class="">Vehicule</h5>
                            <strong class="champ">Marque : </strong>{{array_key_exists('marque' , $Sinistres['vehicule']) ? $Sinistres['vehicule']['marque'] : ''}}<br>
                            <strong class="champ">N°Immatriculation : </strong>{{array_key_exists('numero_immatriculation' , $Sinistres['vehicule']) ? $Sinistres['vehicule']['numero_immatriculation'] : ''}}<br>
                            <strong class="champ">Pays Immatriculation : </strong>{{array_key_exists('pays_immatriculation' , $Sinistres['vehicule']) ? $Sinistres['vehicule']['pays_immatriculation'] : ''}}<br>
                        </div>
                        <div class="child-content compagny">
                            <h5>Société d'assurance</h5>
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
                        <div class="child-content driver">
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
                        <div class="child-content observer">
                            <h5>Dégats apparents au véhicule</h5>
                            <strong class="champ">Description : </strong>{{  array_key_exists('degat' , $Sinistres['observation']) ? $Sinistres['observation']['degat'] : ''}}<br>
                            <strong class="champ">Mes Observations : </strong>{{  array_key_exists('observation' , $Sinistres['observation']) ? $Sinistres['observation']['observation'] : ''}}<br>
                        </div>
                        <div class="child-content signature">
                            <h5>Signature A</h5>
                            @if (array_key_exists('SignatureA' , $Sinistres) && $Sinistres['SignatureA'] != "")
                                <img class="img-signature" src="{{ array_key_exists('SignatureA' , $Sinistres) ? $Sinistres['SignatureA'] : ''}}" alt="">
                            @else
                                <div class="text-danger img-signature" style="border-color:black; background-color:white;">Pas de signature</div>
                            @endif
                        </div>
                    </div>
                </td>
                <td style="width: 10%"></td>
                <td style="width: 45%; vertical-align:top;">
                    <div class="veh" id="veh-b">
                        <h4>VEHICULE B</h4>
                        <div class="child-content assure">
                            <h5>Preneur Assurance/Assuré</h5>
                            <strong class="champ">Nom : </strong>{{array_key_exists('nom' , $Sinistres['assureB']) ? $Sinistres['assureB']['nom'] : ''}}<br>
                            <strong class="champ">Prénom : </strong>{{array_key_exists('prenom' , $Sinistres['assureB']) ? $Sinistres['assureB']['prenom'] : ''}}<br>
                            <strong class="champ">Adresse : </strong>{{array_key_exists('addresse' , $Sinistres['assureB']) ?  $Sinistres['assureB']['addresse'] : ''}}<br>
                            <strong class="champ">Téléphone : </strong>{{array_key_exists('telephone' , $Sinistres['assureB']) ? $Sinistres['assureB']['telephone'] : ''}}<br>
                            <strong class="champ">Code Postal : </strong>{{array_key_exists('code postal' , $Sinistres['assureB']) ? $Sinistres['assureB']['code postal'] : ''}}<br>
                            <strong class="champ">Email : </strong>{{array_key_exists('email' , $Sinistres['assureB']) ? $Sinistres['assureB']['email'] : ''}}<br>
                        </div>
                        <div class="child-content veh-info">
                            <h5>Vehicule</h5>
                            <strong class="champ">Marque : </strong>{{array_key_exists('marque' , $Sinistres['vehiculeB']) ? $Sinistres['vehiculeB']['marque'] : ''}}<br>
                            <strong class="champ">N°Immatriculation : </strong>{{array_key_exists('numero_immatriculation' , $Sinistres['vehiculeB']) ? $Sinistres['vehiculeB']['numero_immatriculation'] : ''}}<br>
                            <strong class="champ">Pays Immatriculation : </strong>{{array_key_exists('pays_immatriculation' , $Sinistres['vehiculeB']) ? $Sinistres['vehiculeB']['pays_immatriculation'] : ''}}<br>
                        </div>
                        <div class="child-content compagny">
                            <h5>Société d'assurance</h5>
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
                            @else
                                <strong class="champ">Nom : </strong><br>
                                <strong class="champ">Addresse : </strong><br>
                                <strong class="champ">Agence : </strong><br>
                                <strong class="champ">Du : </strong><br>
                                <strong class="champ">Au : </strong><br>
                                <strong class="champ">Email : </strong><br>
                                <strong class="champ">Nom de la compagnie : </strong><br>
                                <strong class="champ">Numéro de la carte verte : </strong><br>
                                <strong class="champ">Numéro de contrat : </strong><br>
                                <strong class="champ">Pays de la compagnie : </strong><br>
                                <strong class="champ">Prise en charge : </strong><br>
                                <strong class="champ">Téléphone de la compagnie : </strong>
                            @endif
                        </div>
                        <div class="child-content driver">
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
                        <div class="child-content observer">
                            <h5>Dégats apparents au véhicule</h5>
                            <strong class="champ">Description : </strong>{{  array_key_exists('degat' , $Sinistres['observation']) ? $Sinistres['observation']['degat'] : ''}}<br>
                            <strong class="champ">Mes Observations : </strong>{{  array_key_exists('observation' , $Sinistres['observation']) ? $Sinistres['observation']['observation'] : ''}}<br>
                        </div>
                        <div class="child-content signature">
                            <h5>Signature B</h5>
                            @if (array_key_exists('SignatureB' , $Sinistres) && $Sinistres['SignatureB'] != "")
                                <img class="img-signature" src="{{ array_key_exists('SignatureB' , $Sinistres) ? $Sinistres['SignatureB'] : ''}}" alt="">
                            @else
                                <div class="text-danger img-signature" style="border-color:black; background-color:white;">Pas de signature</div>
                            @endif
                        </div>
                    </div>
                </td>
            </tr>
        </table>

        <div class="content-croquis">
            <h4>Croquis</h4>
            @if (array_key_exists('croquis' , $Sinistres) && $Sinistres['croquis'] != "")
                <img class="croquis" src="{{array_key_exists('croquis' , $Sinistres) ? $Sinistres['croquis'] : ''}}" alt="" >
            @else
                <div class="text-danger">Page de croquis</div>
            @endif
        </div>

        <div class="content-witnesses">
            <h4>Témoins</h4>

            @if (count($Sinistres['temoins']['data']) > 0)
                <table style="width: 100%">
                    @foreach ( $Sinistres['temoins']['data'] as $key => $temoin )

                        <tr>
                            <td style="width: 4%;">
                                {{ ++$key.'-' }}
                            </td>
                            <td style="width:21%;">
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
        </div>

        <div class="content-injured" >
            <h4>Information sur les blessés</h4>

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

        {{-- <div class="cap-a">
            <h4>Captures Véhicule A</h4>
            <table class="content-picture" style="width: 100%;">
                <tr>
                    <td class="w-50">
                        @if (array_key_exists('AvantA' , $Sinistres) && $Sinistres['AvantA'] != "")
                            <img class="cap" src="{{ array_key_exists('AvantA' , $Sinistres) ? $Sinistres['AvantA'] : ''}}" alt="">
                        @else
                            <div class="text-center text-danger cap-not-found">Pas de capture</div>
                        @endif
                        <div class="text-center cap-title">Avant</div>
                    </td>
                    <td class="w-50">
                        @if (array_key_exists('ArriereA' , $Sinistres) && $Sinistres['ArriereA'] != "")
                            <img class="cap" src="{{  array_key_exists('ArriereA' , $Sinistres) ? $Sinistres['ArriereA'] : ''}}" alt="">
                        @else
                            <div class="text-center text-danger cap-not-found">Pas de capture</div>
                        @endif
                        <div class="text-center cap-title">Arriere</div>
                    </td>
                </tr>
                <tr>
                    <td class="w-50">
                        @if (array_key_exists('DroitA' , $Sinistres) && $Sinistres['DroitA'] != "")
                            <img class="cap" src="{{ array_key_exists('DroitA' , $Sinistres) ? $Sinistres['DroitA'] : ''}}" alt="">
                        @else
                            <div class="text-center text-danger cap-not-found">Pas de capture</div>
                        @endif
                        <div class="text-center cap-title">Droit</div>
                    </td>
                    <td class="w-50">
                        @if (array_key_exists('GaucheA' , $Sinistres) && $Sinistres['GaucheA'] != "")
                            <img class="cap" src="{{ array_key_exists('GaucheA' , $Sinistres) ? $Sinistres['GaucheA'] : ''}}" alt="">
                        @else
                            <div class="text-center text-danger cap-not-found">Pas de capture</div>
                        @endif
                        <div class="text-center cap-title">Gauche</div>
                    </td>
                </tr>
                <tr>
                    <td class="w-50">
                        @if (array_key_exists('HautA' , $Sinistres) && $Sinistres['HautA'] != "")
                            <img class="cap" src="{{  array_key_exists('HautA' , $Sinistres) ? $Sinistres['HautA'] : ''}}" alt="">
                        @else
                            <div class="text-center text-danger cap-not-found">Pas de capture</div>
                        @endif
                        <div class="text-center cap-title">Haut</div>
                    </td>
                </tr>
            </table>
        </div>

        <div class="cap-b">
            <h4>Captures Véhicule B</h4>
            <table class="content-picture" style="width: 100%;">
                <tr>
                    <td class="w-50">
                        @if (array_key_exists('AvantB' , $Sinistres) && $Sinistres['AvantB'] != "")
                            <img class="cap" src="{{ array_key_exists('AvantB' , $Sinistres) ? $Sinistres['AvantB'] : ''}}" alt="">
                        @else
                            <div class="text-center text-danger cap-not-found">Pas de capture</div>
                        @endif
                        <div class="text-center cap-title">Avant</div>
                    </td>
                    <td class="w-50">
                        @if (array_key_exists('ArriereB' , $Sinistres) && $Sinistres['ArriereB'] != "")
                            <img class="cap" src="{{  array_key_exists('ArriereB' , $Sinistres) ? $Sinistres['ArriereB'] : ''}}" alt="">
                        @else
                            <div class="text-center text-danger cap-not-found">Pas de capture</div>
                        @endif
                        <div class="text-center cap-title">Arriere</div>
                    </td>
                </tr>
                <tr>
                    <td class="w-50">
                        @if (array_key_exists('DroitB' , $Sinistres) && $Sinistres['DroitB'] != "")
                            <img class="cap" src="{{ array_key_exists('DroitB' , $Sinistres) ? $Sinistres['DroitB'] : ''}}" alt="">
                        @else
                            <div class="text-center text-danger cap-not-found">Pas de capture</div>
                        @endif
                        <div class="text-center cap-title">Droit</div>
                    </td>
                    <td class="w-50">
                        @if (array_key_exists('GaucheB' , $Sinistres) && $Sinistres['GaucheB'] != "")
                            <img class="cap" src="{{ array_key_exists('GaucheB' , $Sinistres) ? $Sinistres['GaucheB'] : ''}}" alt="">
                        @else
                            <div class="text-center text-danger cap-not-found">Pas de capture</div>
                        @endif
                        <div class="text-center cap-title">Gauche</div>
                    </td>
                </tr>
                <tr>
                    <td class="w-50">
                        @if (array_key_exists('HautB' , $Sinistres) && $Sinistres['HautB'] != "")
                            <img class="cap" src="{{  array_key_exists('HautB' , $Sinistres) ? $Sinistres['HautB'] : ''}}" alt="">
                        @else
                            <div class="text-center text-danger cap-not-found">Pas de capture</div>
                        @endif
                        <div class="text-center cap-title">Haut</div>
                    </td>
                </tr>
            </table>
        </div> --}}

        <div class="cap-a">
            <h4>Captures Véhicule A</h4>
            @if ($Sinistres['AvantA'] == "" && $Sinistres['ArriereA'] == "" && $Sinistres['DroitA'] == "" && $Sinistres['GaucheA'] == "" && $Sinistres['HautA'] == "")
                <span class="text-danger">Pas de capture</span>
            @else
                <table class="content-picture" style="width: 100%;">

                    <tr>
                        <td class="w-20">
                            @if (array_key_exists('AvantA' , $Sinistres) && $Sinistres['AvantA'] != "")
                                <img class="cap" src="{{ array_key_exists('AvantA' , $Sinistres) ? $Sinistres['AvantA'] : ''}}" alt="">
                                <div class="text-center cap-title">Avant</div>
                            @endif
                        </td>
                        <td class="w-20">
                            @if (array_key_exists('ArriereA' , $Sinistres) && $Sinistres['ArriereA'] != "")
                                <img class="cap" src="{{  array_key_exists('ArriereA' , $Sinistres) ? $Sinistres['ArriereA'] : ''}}" alt="">
                                <div class="text-center cap-title">Arriere</div>
                            @endif
                        </td>
                        <td class="w-20">
                            @if (array_key_exists('DroitA' , $Sinistres) && $Sinistres['DroitA'] != "")
                                <img class="cap" src="{{ array_key_exists('DroitA' , $Sinistres) ? $Sinistres['DroitA'] : ''}}" alt="">
                                <div class="text-center cap-title">Droit</div>
                            @endif
                        </td>
                        <td class="w-20">
                            @if (array_key_exists('GaucheA' , $Sinistres) && $Sinistres['GaucheA'] != "")
                                <img class="cap" src="{{ array_key_exists('GaucheA' , $Sinistres) ? $Sinistres['GaucheA'] : ''}}" alt="">
                                <div class="text-center cap-title">Gauche</div>
                            @endif
                        </td>
                        <td class="w-20">
                            @if (array_key_exists('HautA' , $Sinistres) && $Sinistres['HautA'] != "")
                                <img class="cap" src="{{  array_key_exists('HautA' , $Sinistres) ? $Sinistres['HautA'] : ''}}" alt="">
                                <div class="text-center cap-title">Haut</div>
                            @endif
                        </td>
                    </tr>

                </table>
            @endif
        </div>

        <div class="cap-b">
            <h4>Captures Véhicule B</h4>
            @if ($Sinistres['AvantB'] == "" && $Sinistres['ArriereB'] == "" && $Sinistres['DroitB'] == "" && $Sinistres['GaucheB'] == "" && $Sinistres['HautB'] == "")
                <span class="text-danger">Pas de capture</span>
            @else
                <table class="content-picture" style="width: 100%;">
                    <tr>

                        <td class="w-20">
                            @if (array_key_exists('AvantB' , $Sinistres) && $Sinistres['AvantB'] != "")
                                <img class="cap" src="{{ array_key_exists('AvantB' , $Sinistres) ? $Sinistres['AvantB'] : ''}}" alt="">
                                <div class="text-center cap-title">Avant</div>
                            @endif
                        </td>
                        <td class="w-20">
                            @if (array_key_exists('ArriereB' , $Sinistres) && $Sinistres['ArriereB'] != "")
                                <img class="cap" src="{{  array_key_exists('ArriereB' , $Sinistres) ? $Sinistres['ArriereB'] : ''}}" alt="">
                                <div class="text-center cap-title">Arriere</div>
                            @endif
                        </td>
                        <td class="w-20">
                            @if (array_key_exists('DroitB' , $Sinistres) && $Sinistres['DroitB'] != "")
                                <img class="cap" src="{{ array_key_exists('DroitB' , $Sinistres) ? $Sinistres['DroitB'] : ''}}" alt="">
                                <div class="text-center cap-title">Droit</div>
                            @endif
                        </td>
                        <td class="w-20">
                            @if (array_key_exists('GaucheB' , $Sinistres) && $Sinistres['GaucheB'] != "")
                                <img class="cap" src="{{ array_key_exists('GaucheB' , $Sinistres) ? $Sinistres['GaucheB'] : ''}}" alt="">
                                <div class="text-center cap-title">Gauche</div>
                            @endif
                        </td>
                        <td class="w-20">
                            @if (array_key_exists('HautB' , $Sinistres) && $Sinistres['HautB'] != "")
                                <img class="cap" src="{{  array_key_exists('HautB' , $Sinistres) ? $Sinistres['HautB'] : ''}}" alt="">
                                <div class="text-center cap-title">Haut</div>
                            @endif
                        </td>
                    </tr>
                </table>
            @endif
        </div>

    </div>

</body>
</html>
