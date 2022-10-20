<!doctype html>
<html>
<head>

    <style>
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
            padding: auto;
            text-align: justify;
            margin-right:60%;
        }
        .col2{
            background-color: rgb(228, 232, 170);
            padding: auto;
            text-align: justify;
            margin-left:60%;
            margin-top:-101%;
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
   </style>

</head>
    <body>
        {{-- <div>
            <div class="row dateR">
                <div class="col-md-9 dateC">

                    <h3 class="text-center py-3 mt-2 mb-5 bg-primary text-white font-weight-bold box-sh-card" style="border-radius: 15px">
                        CONSTAT AMIABLE AUTOMOBILE {{$compagny}}
                    </h3>

                    <div class="row Ro1">
                        <ul>
                            <li><strong> Date de laccident:</strong>{{$Sinistres['date_Sinistre']}}</li>
                            <li><strong>Heure:</strong>{{$Sinistres['Heure_Sinistre']}}</li>
                            <li><strong>Localisation:</strong>{{$Sinistres['Localisation']}}</li>

                        </ul>

                        <ul>
                            <li><strong>Blesser:</strong>
                            {{$Sinistres['blesse']}}</li>
                            <li> <strong>Dégats:</strong>
                            {{$Sinistres['degats']}}</li>
                            <li> <strong>Lieu:</strong>
                            {{$Sinistres['Lieu']}}</li>
                        </ul>

                        <aside>
                            <div class="sign">
                                <p > <strong>Signature A </strong>
                                    &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
                                    <strong>Signature B</strong> </p>
                            <p>   @if($Sinistres['SignatureA']=="")
                                Pas de Signature A
                                @else
                            <img
                                src="data:image/png;base64,{{ base64_encode(file_get_contents($Sinistres['SignatureA'])) }}"
                                alt="" height="30" width="99">
                                @endif &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
                                @if($Sinistres['SignatureB']=="")
                                Pas de SignatureB
                                @else
                                <img

                                src="data:image/png;base64,{{ base64_encode(file_get_contents($Sinistres['SignatureB'])) }}"
                                alt="" height="30" width="99">
                                @endif</p>
                            </div>
                        </aside>
                    </div>

                    <div class="col12">

                        <div class="col-md-5 col1">
                            <!-- DATA TABLE-->
                            <h3 class="veh">Véhicule A</h3>
                            <h5>Preneur Assurance/Assuré</h5>
                            <strong class="champ">Nom:</strong>{{$Sinistres['NomAS']}}<br>
                            <strong class="champ"> Prénom:</strong>{{$Sinistres['PrenomAS']}}<br>
                            <strong class="champ"> Adresse:</strong>{{$Sinistres['AdresseAS']}}<br>
                            <strong class="champ">Téléphone:</strong>{{$Sinistres['TéléphoneAS']}}<br>
                            <strong class="champ"> Code Postal:</strong>{{$Sinistres['Code_PostalAS']}}<br>
                            <strong class="champ">Email:</strong>{{$Sinistres['EmailAS']}}<br>
                            <h5>Vehicule</h5>
                            <strong class="champ">Marque:</strong>{{$Sinistres['MarqueV']}}<br>
                            <strong class="champ">N°Immatriculation:</strong>{{$Sinistres['Numero_immatriculationV']}}<br>
                            <strong class="champ">Pays Immatriculation:</strong>{{$Sinistres['Pays_immatriculationV']}}<br>
                            <h5>Société d'assurance</h5>
                            <strong class="champ">Nom:</strong>{{$Sinistres['NomA']}}<br>
                            <strong class="champ">N° contrat:</strong>{{$Sinistres['num_contrat']}}<br>
                            <strong class="champ">N° carteverte:</strong>{{$Sinistres['num_carte_verte']}}<br>
                            <strong class="champ">Du:</strong>{{$Sinistres['du']}}<br>
                            <strong class="champ">Au:</strong>{{$Sinistres['au']}}<br>
                            <strong class="champ">Agence:</strong>{{$Sinistres['agence']}}<br>
                            <strong class="champ">Nom agence:</strong>{{$Sinistres['nom_agence']}}<br>
                            <strong class="champ">Adresse:</strong>{{$Sinistres['adresse']}}<br>
                            <strong class="champ">Pays:</strong>{{$Sinistres['pays']}}<br>
                            <strong class="champ">Téléphone:</strong>{{$Sinistres['telephone']}}<br>
                            <strong class="champ">Email:</strong>{{$Sinistres['email']}}<br>
                            <strong class="champ">Prise en charge ?</strong>{{$Sinistres['prise_encharge']}}<br>
                            <h5>Conducteur</h5>
                            <strong class="champ">Nom:</strong>{{$Sinistres['NomC']}}<br>
                            <strong class="champ">Prenom:</strong>{{$Sinistres['PrenomC']}}<br>
                            <strong class="champ">Date de naissance:</strong>{{$Sinistres['date_naissanceC']}}<br>
                            <strong class="champ">Adresse:</strong>{{$Sinistres['AdresseC']}}<br>
                            <strong class="champ">Téléphone:</strong>{{$Sinistres['telephoneC']}}<br>
                            <strong class="champ">Email:</strong>{{$Sinistres['num_permisC']}}<br>
                            <strong class="champ">Permis de conduire N°:</strong>{{$Sinistres['fin_valide_permisC']}}<br>
                            <strong class="champ">Pays:</strong>{{$Sinistres['paysC']}}<br>
                            <strong class="champ">Catégorie:</strong>{{$Sinistres['emailC']}}<br>
                            <strong class="champ">Permis valide jusqu'au:</strong>{{$Sinistres['categorieC']}}<br>
                            <h5>Dégats apparents au véhicule</h5>
                            <strong class="champ">Description:</strong>{{$Sinistres['Description']}}<br>
                            <strong class="champ">Mes Observations:</strong>{{$Sinistres['Détaille']}}<br>
                            <h5>Circonstance</h5>
                            <strong class="champ">Circonstance:</strong>{{$Sinistres['Circonstance']}}<br>
                                    -->
                        </div>

                        <div class="col-md-5 col2">

                            <h3 class="veh">Véhicule B</h3>

                            <h5>Preneur Assurance/Assuré</h5>
                            <strong class="champ">Nom:</strong>{{$Sinistres['NomASB']}}<br>
                            <strong class="champ"> Prénom:</strong>{{$Sinistres['PrenomASB']}}<br>
                            <strong class="champ"> Adresse:</strong>{{$Sinistres['AdresseASB']}}<br>
                            <strong class="champ">Téléphone:</strong>{{$Sinistres['TéléphoneASSB']}}<br>
                            <strong class="champ"> Code Postal:</strong>{{$Sinistres['Code_PostalASB']}}<br>
                            <strong class="champ">Email:</strong>{{$Sinistres['EmailASB']}}<br>
                            <h5>Véhicule</h5>
                            <strong class="champ">Marque:</strong>{{$Sinistres['MarqueB']}}<br>
                            <strong class="champ">N° Immatriculation:</strong>{{$Sinistres['Numero_immatriculationB']}}<br>
                            <strong class="champ">Pays Immatriculation:</strong>{{$Sinistres['Pays_immatriculationB']}}<br>
                            <h5>Société d'assurance</h5>
                            <strong class="champ">Nom:</strong>{{$Sinistres['NomB']}}<br>
                            <strong class="champ">N° contrat:</strong>{{$Sinistres['num_contratB']}}<br>
                            <strong class="champ">N° carteverte:</strong>{{$Sinistres['num_carte_verteB']}}<br>
                            <strong class="champ">Du:</strong>{{$Sinistres['duB']}}<br>
                            <strong class="champ">Au:</strong>{{$Sinistres['auB']}}<br>
                            <strong class="champ">Agence:</strong>{{$Sinistres['agenceB']}}<br>
                            <strong class="champ">Nom agence:</strong>{{$Sinistres['nom_agenceB']}}<br>
                            <strong class="champ">Adresse:</strong>{{$Sinistres['adresseB']}}<br>
                            <strong class="champ">Pays:</strong>{{$Sinistres['paysB']}}<br>
                            <strong class="champ">Téléphone:</strong>{{$Sinistres['telephoneAB']}}<br>
                            <strong class="champ">Email:</strong>{{$Sinistres['emailB']}}<br>
                            <strong class="champ">Prise en charge ?</strong>{{$Sinistres['prise_enchargeB']}}<br>
                            <h5>Conducteur</h5>
                            <strong class="champ">Nom:</strong>{{$Sinistres['NomCB']}}<br>
                            <strong class="champ">Prénom:</strong>{{$Sinistres['PrenomCB']}}<br>
                            <strong class="champ">Date de naissance:</strong>{{$Sinistres['date_naissanceCB']}}<br>
                            <strong class="champ">Adresse:</strong>{{$Sinistres['AdresseCB']}}<br>
                            <strong class="champ">Téléphone:</strong>{{$Sinistres['telephoneCB']}}<br>
                            <strong class="champ">Email:</strong>{{$Sinistres['emailCB']}}<br>
                            <strong class="champ">Permis de conduire N°:</strong>{{$Sinistres['num_permisCB']}}<br>
                            <strong class="champ">Pays:</strong>{{$Sinistres['paysCB']}}<br>
                            <strong class="champ">Catégorie:</strong>{{$Sinistres['categorieCB']}}<br>
                            <strong class="champ">Permis valide jusqu'au:</strong>{{$Sinistres['fin_valide_permisCB']}}<br>
                            <h5>Dégats apparents au vehicule</h5>
                            <strong class="champ">Description:</strong>{{$Sinistres['DescriptionCB']}}<br>
                            <strong class="champ">Mes observations:</strong>{{$Sinistres['DétailleCB']}}<br>
                            <h5>Circonstance</h5>
                            <strong class="champ">Circonstance:</strong>{{$Sinistres['CirconstanceCB']}}<br>
                        </div>
                    </div>


                    <div class="TB">

                        <div class="row"><h3 class="tem">Témoin</h3>
                            <div class=" col-md-3">
                                <strong class="champ">Nom:</strong>{{$Sinistres['nomT']}}
                            </div>
                            <div class=" col-md-3">
                                <strong class="champ">Prénom:</strong>{{$Sinistres['prenomT']}}
                            </div>
                            <div class=" col-md-3">
                                <strong class="champ">Adresse:</strong>{{$Sinistres['AdresseT']}}
                            </div>
                            <div class=" col-md-3">
                                <strong class="champ">Téléphone:</strong>{{$Sinistres['TelephoneT']}}
                            </div>
                        </div>

                        <div class="row"><h3 class="tem">Blesse</h3>
                            <div class=" col-md-3">
                                <strong class="champ">Nom:</strong>{{$Sinistres['nomB']}}
                            </div>
                            <div class=" col-md-3">
                                <strong class="champ">Prénom:</strong>{{$Sinistres['prenomB']}}
                            </div>
                            <div class=" col-md-3">
                                <strong class="champ">Adresse:</strong>{{$Sinistres['AdresseB']}}
                            </div>
                            <div class=" col-md-3">
                                <strong class="champ">Téléphone:</strong>{{$Sinistres['telephoneB']}}
                            </div>
                            <div class="row">
                                <div class=" col-md-3">
                                    <strong class="champ">Profession</strong>{{$Sinistres['ProfessionB']}}
                                </div>
                                <div class=" col-md-3">
                                    <strong class="champ">Situation:</strong>{{$Sinistres['SituationB']}}
                                </div>
                                <div class=" col-md-3">
                                    <strong class="champ">Casque/Ceinture:</strong>{{$Sinistres['CasqueB']}}
                                </div>
                                <div class=" col-md-3">
                                    <strong class="champ">Hospitalisation:</strong>{{$Sinistres['Centre_HospitalierB']}}
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="image">
                        @if($Sinistres['CroquisA']==" ")
                            <h6> Pas de Croquis</h6>
                        @else
                            <img   style=" transform:rotate(90deg); margin-top:-1px;margin-bottom:-3px;	width:300px;
                            height:305px;
                            margin-left:95px;
                            "
                            src="data:image/png;base64,{{ base64_encode(file_get_contents($Sinistres['CroquisA'])) }}"
                            alt="">
                        @endif
                    </div>
                </div>
            </div>
        </div> --}}

        <div class="">
    
            <div class="row dateR">
                <div class="col-lg-12 dateC">
    
                    <h3 style="text-align:center;">
                        CONSTAT AMIABLE AUTOMOBILE {{$compagny}}
                    </h3>
    
                    <div class="border-bottom">

                        {{-- Header Infos --}}
                        <div class="row Ro1">
                            {{-- Infos Sinistre --}}
                            <table style="width: 100%">
                                <tr>
                                    <td>
                                        <strong> Date de laccident : </strong> {{ array_key_exists('dateSinistre' , $Sinistres['sinistre']) ? $Sinistres['sinistre']['dateSinistre'] : '' }}
                                    </td>
                                    <td>
                                        <strong> Heure : </strong> {{array_key_exists('heureSinistre' , $Sinistres['sinistre'] ) ? $Sinistres['sinistre']['heureSinistre'] : ''}}
                                    </td>
                                    <td>
                                        <strong>Localisation :</strong> {{array_key_exists('Localisation' , $Sinistres ) ? $Sinistres['Localisation'] : ''}}
                                    </td>
                                </tr>
                            </table>

                        </div>

                    </div>
    
                    <div> <br></div>
                        
                    <div  class="col12">
                        {{-- Infos for A --}}
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
                            {{-- <div>
                                <h5>Société d'assurance</h5>
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

                            {{-- Capture Vehicule A --}}
                            <div>
                                <h5 class="font-weight-bold">Photos</h5>
                                <table style="width: 100%;">
                                    <tr>
                                        <td style="width: 20%;">
                                                @if (array_key_exists('AvantA' , $Sinistres))
                                                    <img style="border-radius: 10px; wight:100%;" src="{{ array_key_exists('AvantA' , $Sinistres) ? $Sinistres['AvantA'] : ''}}" alt="">
                                                @else 
                                                    <div class=""></div>
                                                @endif
                                            
                                            <span>Avant</span>
                                        </td>
                                        <td style="width: 20%;">
                                            <a class="" href="{{  array_key_exists('ArriereA' , $Sinistres) ? $Sinistres['ArriereA'] : '#'}} "style="font-weight: 500">
                                                <img class="img-fluid h-75 w-100 border" style="border-radius: 10px;" src="{{  array_key_exists('ArriereA' , $Sinistres) ? $Sinistres['ArriereA'] : ''}}" alt="">
                                            </a>
                                            <span>Arriere</span>
                                        </td>
                                        <td style="width: 20%;">
                                            <a class="" href="{{  array_key_exists('DroitA' , $Sinistres) ? $Sinistres['DroitA'] : '#'}} " style="font-weight: 500">
                                                <img class="img-fluid h-75 w-100 border" style="border-radius: 10px;" src="{{ array_key_exists('DroitA' , $Sinistres) ? $Sinistres['DroitA'] : ''}}" alt="">
                                            </a>
                                            <span>Droit</span>
                                        </td>
                                        <td style="width: 20%;">
                                            <a class="" href="{{  array_key_exists('GaucheA' , $Sinistres) ? $Sinistres['GaucheA'] : '#'}} "style="font-weight: 500">
                                                <img class="img-fluid h-75 w-100 border" style="border-radius: 10px;" src="{{ array_key_exists('GaucheA' , $Sinistres) ? $Sinistres['GaucheA'] : ''}}" alt="">
                                            </a>
                                            <span>Gauche</span>
                                        </td>
                                        <td style="width: 20%;">
                                            <div class="col-lg-2">
                                                <a class="" href="{{  array_key_exists('HautA' , $Sinistres) ? $Sinistres['HautA'] : '#'}} "style="font-weight: 500">
                                                    <img class="img-fluid h-75 w-100 border" style="border-radius: 10px;" src="{{  array_key_exists('HautA' , $Sinistres) ? $Sinistres['HautA'] : ''}}" alt="">
                                                </a>
                                                <span>Haut</span>
                                            </div>
                                        </td>
                                    </tr>
                                </table>


                                {{-- <div class="row pb-2" style="display: flex !important;">
                                    <div class="col-lg-2">
                                        <a class="" href="{{  array_key_exists('AvantA' , $Sinistres) ? $Sinistres['AvantA'] : '#'}} "style="font-weight: 500">
                                            <img class="img-fluid h-75 w-100 border" style="border-radius: 10px;" src="{{  array_key_exists('AvantA' , $Sinistres) ? $Sinistres['AvantA'] : ''}}" alt="">
                                        </a>
                                        <span>Avant</span>
                                    </div>
        
                                    <div class="col-lg-2">
                                        <a class="" href="{{  array_key_exists('ArriereA' , $Sinistres) ? $Sinistres['ArriereA'] : '#'}} "style="font-weight: 500">
                                            <img class="img-fluid h-75 w-100 border" style="border-radius: 10px;" src="{{  array_key_exists('ArriereA' , $Sinistres) ? $Sinistres['ArriereA'] : ''}}" alt="">
                                        </a>
                                        <span>Arriere</span>
                                    </div>
        
                                    <div class="col-lg-2">
                                        <a class="" href="{{  array_key_exists('DroitA' , $Sinistres) ? $Sinistres['DroitA'] : '#'}} " style="font-weight: 500">
                                            <img class="img-fluid h-75 w-100 border" style="border-radius: 10px;" src="{{ array_key_exists('DroitA' , $Sinistres) ? $Sinistres['DroitA'] : ''}}" alt="">
                                        </a>
                                        <span>Droit</span>
                                    </div>
        
                                    <div class="col-lg-2">
                                        <a class="" href="{{  array_key_exists('GaucheA' , $Sinistres) ? $Sinistres['GaucheA'] : '#'}} "style="font-weight: 500">
                                            <img class="img-fluid h-75 w-100 border" style="border-radius: 10px;" src="{{ array_key_exists('GaucheA' , $Sinistres) ? $Sinistres['GaucheA'] : ''}}" alt="">
                                        </a>
                                        <span>Gauche</span>
                                    </div>
        
                                    <div class="col-lg-2">
                                        <a class="" href="{{  array_key_exists('HautA' , $Sinistres) ? $Sinistres['HautA'] : '#'}} "style="font-weight: 500">
                                            <img class="img-fluid h-75 w-100 border" style="border-radius: 10px;" src="{{  array_key_exists('HautA' , $Sinistres) ? $Sinistres['HautA'] : ''}}" alt="">
                                        </a>
                                        <span>Haut</span>
                                    </div>
                                </div> --}}
                            </div>
                            
                            {{-- Signature A --}}
                            <h5 class="font-weight-bold">Signature A</h5>
                            <img class="w-100 border" src="{{ array_key_exists('SignatureA' , $Sinistres) ? $Sinistres['SignatureA'] : ''}}" alt="">

                        </div>
                                        
                        {{-- Infos for B --}}
                        <div class="col-md-5 col2">
                            <!-- DATA TABLE-->
                            <h3 class="veh">Véhicule B</h3>
    
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
                            {{-- <div>
                                <h5>Société d'assurance</h5>
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
                                </table>
    
                                <h5 class="font-weight-bold">Signature B</h5>
                                <img class="w-100 border" src="{{array_key_exists('SignatureB' , $Sinistres) ? $Sinistres['SignatureB'] : ''}}" alt=""  width="79">
            
    
                            <!-- END DATA TABLE -->
                        </div>
                    </div>
    
                    {{-- <div class="TB">
                        <h3 class="tem">Témoin</h3></div>
        
                        <div class="row">
                            @if (count($Sinistres['temoins']['data']) > 0)
                            
                                @foreach ( $Sinistres['temoins']['data'] as $temoin )
                                        
                                    <div class=" col-md-3">
                                        <strong class="champ">Nom : </strong>{{ array_key_exists('nomt' , $Sinistres) ? $temoin['nomt'] : ''}}
                                    </div>
                                    <div class=" col-md-3">
                                        <strong class="champ">Prénom : </strong>{{ array_key_exists('prenomt' , $Sinistres) ? $temoin['prenomt'] : ''}}
                                    </div>
                                    <div class=" col-md-3">
                                        <strong class="champ">Adresse : </strong>{{ array_key_exists('Adresse' , $Sinistres) ? $temoin['Adresse'] : ''}}
                                    </div>
                                    <div class=" col-md-3">
                                        <strong class="champ">Téléphone : </strong>{{ array_key_exists('telephone' , $Sinistres) ? $temoin['telephone'] : ''}}
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
                    --}}
                

                    <div class="TB">
                        {{-- Testi --}}
                        <h3 class="tem"><strong>Témoin</strong></h3>
                            
                            @if (count($Sinistres['temoins']['data']) > 0)
                                <table style="width: 100%">
                                    @foreach ( $Sinistres['temoins']['data'] as $temoin )
                                        
                                        <tr>
                                            <td style="width:25%;">
                                                <strong class="champ">Nom : </strong>{{ array_key_exists('nom' , $Sinistres) ? $temoin['nom'] : ''}}
                                            </td>
                                            <td style="width:25%;">
                                                <strong class="champ">Prénom : </strong>{{ array_key_exists('prenom' , $Sinistres) ? $temoin['prenom'] : ''}}
                                            </td>
                                            <td style="width:25%;">
                                                <strong class="champ">Adresse : </strong>{{ array_key_exists('Adresse' , $Sinistres) ? $temoin['Adresse'] : ''}}
                                            </td>
                                            <td style="width:25%;">
                                                <strong class="champ">Téléphone : </strong>{{ array_key_exists('telephone' , $Sinistres) ? $temoin['telephone'] : ''}}
                                            </td>
                                        </tr>
                                    
                                    @endforeach
                                </table>
                            @else 
                                <span>Aucun témoins enregistré.</span>
                            @endif

                        {{-- Infos Blesses --}}
                        <h3 class="font-weight-bold px-2">Information sur les blaissés</h3>

                        @if (count($Sinistres['blesse']['data']) > 0)
                            <table style="width: 100%; ">
                                @foreach ( $Sinistres['blesse']['data'] as $key => $blesse )
                                    
                                    <tr>
                                        <td colspan="4"><strong>--Blessé {{ ++$key }}</strong></td>
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
                            <span>Aucun blessé enregistré.</span>
                        @endif

                    </div>

                    {{-- <div class="image">
                        @if(!array_key_exists('CroquisA' , $Sinistres))
                            <h6> Pas de Croquis</h6>
                        @else
                            <img   style=" transform:rotate(90deg); margin-top:-1px;margin-bottom:-3px;	width:300px;
                            height:305px;
                            margin-left:95px;
                            "
                            src="data:image/png;base64,{{ base64_encode(file_get_contents($Sinistres['CroquisA'])) }}"
                            alt="">
                        @endif
                    </div> --}}
                </div>
            </div>
        </div>

    </body>

</html>

