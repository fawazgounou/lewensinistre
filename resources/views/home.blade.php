@extends('layouts.HeaderDash')

@section('content')
<div class="container" >
    <div class="row">
        <div class="col-md-3">
            <!-- MENU SIDEBAR-->
            <aside class="menu-sidebar3 js-spe-sidebar">
                <nav class="navbar-sidebar2 navbar-sidebar3">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" style="color:rgb(246, 251, 249); background-color:rgb(111, 126, 225);" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard
                                <span class="arrow">
                                    <i class="fas fa"></i>
                                </span>
                            </a>

                        </li>
                        <li>
                            <a href="inbox.html">
                                <i class="fas fa-chart-bar"></i> <span >Boite de reception</span></a>

                        </li>

                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-trophy"></i>Les Sinistres
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="table.html">Dans le mois</a>
                                </li>
                                <li>
                                    <a href="form.html">Dans la semaine</a>
                                </li>
                                <li>
                                    <a href="#">Dans l'année</a>
                                </li>

                            </ul>
                        </li>

                    </ul>
                </nav>
            </aside>
            <!-- END MENU SIDEBAR-->
        </div>


        <div class="col-lg-6">
            <!-- RECENT REPORT-->
            <div class="recent-report3 m-b-40">
                <div class="title-wrap">
                    <h3 class="title-3">Rapport lannée</h3>
                    <div class="chart-info-wrap">
                        <div class="chart-note">
                            <span class="dot dot--blue"></span>
                            <span>Blue</span>
                        </div>
                        <div class="chart-note mr-0">
                            <span class="dot dot--green"></span>
                            <span>green</span>
                        </div>
                    </div>
                </div>
                <div class="filters m-b-55">
                    <div class="rs-select2--dark rs-select2--md m-r-10 rs-select2--border">
                        <select class="js-select2" name="property">
                            <option selected="selected">Products Sales</option>
                            <option value="">Products</option>
                            <option value="">Services</option>
                        </select>
                        <div class="dropDownSelect2"></div>
                    </div>
                    <div class="rs-select2--dark rs-select2--sm rs-select2--border">
                        <select class="js-select2 au-select-dark" name="time">
                            <option selected="selected">All Time</option>
                            <option value="">By Month</option>
                            <option value="">By Day</option>
                        </select>
                        <div class="dropDownSelect2"></div>
                    </div>
                </div>
                <div class="chart-wrap">
                    <canvas id="recent-rep3-chart"></canvas>
                </div>
            </div>
            <!-- END RECENT REPORT-->
        </div>

        <div class="col-lg-3">
            <!-- CHART PERCENT-->
            <div class="chart-percent-3 m-b-40">
                <h3 class="title-3 m-b-25">chart by %</h3>
                <div class="chart-note m-b-5">
                    <span class="dot dot--blue"></span>
                    <span>products</span>
                </div>
                <div class="chart-note">
                    <span class="dot dot--red"></span>
                    <span>services</span>
                </div>
                <div class="chart-wrap m-t-60">
                    <canvas id="percent-chart2"></canvas>
                </div>
            </div>
            <!-- END CHART PERCENT-->
        </div>

    </div>

    @if(empty($usersinistre))

<h4 style="text-align: center; color:rgb(111, 126, 225)"> Vous n'avez aucune soumission de sinistre</h4>
    @else

                         @foreach($usersinistre as $Sinistres)
                                <div class="save" >
                                    <a href="detailSinistre/{{$Sinistres['id']}}"class="btn btn-primary" >Télécharger le PDF</a>
                                  </div>

                                <div class="row dateR">
                                    <div class="col-md-9 dateC">
                                    <div class="row Ro1">

                                        <div class="col-md-4">
                                        <h4><strong> Date de l'accident:</strong></h4>{{$Sinistres['date_Sinistre']}}

                                        </div>
                                        <div class="col-md-4">
                                            <h4><strong>Heure:</strong></h4>{{$Sinistres['Heure_Sinistre']}}

                                        </div>
                                        <div class="col-md-4">
                                            <h4><strong>Localisation:</strong></h4>{{$Sinistres['Localisation']}}

                                        </div>

                                    </div>
        <div class="col-md-12 Ro1"> <br></div>
                                    <div class="row Ro1" >

                                        <div class="col-md-4">
                                            <h4><strong>Blesser:</strong></h4>
                                        {{$Sinistres['blesse']}}

                                        </div>
                                        <div class="col-md-4">
                                            <h4><strong>Dégats:</strong></h4>
                                        {{$Sinistres['degats']}}
                                        </div>
                                        <div class="col-md-4">
                                            <h4><strong>Lieu:</strong></h4>
                                            {{$Sinistres['Lieu']}}
                                            </div>

                                        </div>
                                        <div > <br></div>
                             <div  class="row">

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
                                        <strong class="champ">Email:</strong>{{$Sinistres['emailC']}}<br>
                                        <strong class="champ">Permis de conduire N°:</strong>{{$Sinistres['num_permisC']}}<br>
                                        <strong class="champ">Pays:</strong>{{$Sinistres['paysC']}}<br>
                                        <strong class="champ">Catégorie:</strong>{{$Sinistres['categorieC']}}<br>
                                        <strong class="champ">Permis valide jusqu'au:</strong>{{$Sinistres['fin_valide_permisC']}}<br>
                                        <h5>Dégats apparents au véhicule</h5>
                                        <strong class="champ">Description:</strong>{{$Sinistres['Description']}}<br>
                                        <strong class="champ">Mes Observations:</strong>{{$Sinistres['Détaille']}}<br>
                                        <h5>Circonstance</h5>
                                    <strong class="champ">Circonstance:</strong>{{$Sinistres['Circonstance']}}<br>

                                    {{-- <h5>Photos</h5>
                                    <a href="{{$Sinistres['PhotosA']}}"></a><strong class="champ">url:</strong>{{$Sinistres['PhotosA']}}<br> --}}
                                    <h5>SignatureA</h5>
                                    <img style=" width: 50px;transform:rotate(90deg); margin-left:40%; margin-top:2%  margin-bottom:0%"
                                    src="{{$Sinistres['SignatureA']}}"
                                    alt="">

                                        <!-- END DATA TABLE                  -->
                                </div>
                                 <div class="col-md-2"> </div>

                                 <div class="col-md-5 col2">
                                        <!-- DATA TABLE-->
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
                                      {{--
                                         <h5>Photos</h5>
                                         <strong class="champ">url:</strong>{{$Sinistres['PhotosB']}}<br> --}}
                                         <h5>SignatureA</h5>
                                    <img style=" width: 50px;transform:rotate(90deg); margin-left:40%; margin-top:2%  margin-bottom:0%"
                                    src="{{$Sinistres['SignatureB']}}"
                                    alt="">


                                        <!-- END DATA TABLE                  -->
                                    </div>
                             </div>


    <div class="row"><h3 class="tem">Témoin</h3></div>
    <div class="row">
<div class=" col-md-3">
    <strong class="champ">Nom</strong>{{$Sinistres['nomT']}}
</div>
<div class=" col-md-3">
    <strong class="champ">Prénom:</strong>{{$Sinistres['prenomT']}}
</div>
<div class=" col-md-3">
    <strong class="champ">Adresse:</strong>{{$Sinistres['TelephoneT']}}
</div>
<div class=" col-md-3">
    <strong class="champ">Téléphone:</strong>{{$Sinistres['AdresseT']}}
</div>
</div>
<div class="row"><h3 class="tem" style="margin-top: 2%">Croquis</h3></div>
<div class="row" >

    <img style=" width: 25%;transform:rotate(90deg); margin-left:40%; margin-top:-5%;margin-bottom:-5% "
    src="{{$Sinistres['CroquisA']}}"
    alt="">
</div>
{{--
<div class="row"><h3 class="tem">Blesse</h3></div>

<div class="row">
    <div class=" col-md-3">
    <strong class="champ">Nom</strong>{{$Sinistres['nomB']}}
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
<div class="row"><h3 class="tem"><br> <br></h3></div>

<div class="row">
    <div class=" col-md-3">
    <strong class="champ">Profession</strong>{{$Sinistres['ProfessionB']}}
    </div>
    <div class=" col-md-3">
    <strong class="champ">Situation:</strong>{{$Sinistres['SituationB']}}
    </div>
    <div class=" col-md-3">
    <strong class="champ">Casque/:</strong>{{$Sinistres['CasqueB']}}
    </div>
    <div class=" col-md-3">
    <strong class="champ">Hospitalisation:</strong>{{$Sinistres['Centre_HospitalierB']}}
    </div>

</div> --}}

                                    </div>
                                </div>
                         @endforeach
                        
                        @endif
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="copyright">
                                            <small>Réalisé par MONRA Fawaz❤️ </small>
                                        </div>
                                    </div>
                                </div>


</div>


@endsection
