@extends('layouts.HeaderDash')

@section('content')

    <div class="page-wrapper">

            <!-- PAGE CONTENT-->
        <div class="page-container3">
                      <section>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3">
                            <!-- MENU SIDEBAR-->
                            <aside class="menu-sidebar3 js-spe-sidebar">
                                <nav class="navbar-sidebar2 navbar-sidebar3">
                                    <ul class="list-unstyled navbar__list">
                                        <li class="active has-sub">
                                            <a class="js-arrow" href="#">
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

                                        <li>
                                            <a href="inbox.html">
                                                <i class="fas fa-chart-bar"></i> <span >Historique</span></a>

                                        </li>
                                    </ul>
                                </nav>
                            </aside>
                            <!-- END MENU SIDEBAR-->
                        </div>
                        <div class="col-xl-9">
                            <!-- PAGE CONTENT-->
                            <div class="page-content">
                                <div class="row">
                                    <div class="col-lg-8">
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
                                    <div class="col-lg-4">
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

                                @foreach($usersinistre as $Sinistres)
                                <div class="btn-group mb-4">
                                    <a href="detailSinistre/{{$Sinistres['id']}}" class="btn btn-success">Save as PDF</a>
                                  </div>
                                <div class="row" style="align-content: center">
                                    <div class="row">

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
                                    <div class="row col-md-12" > <br> </div>
                                    <div class="row" >

                                        <div class="col-md-4">
                                            <h4><strong>Blesser:</strong></h4>
                                        {{$Sinistres['blesse']}}

                                        </div>
                                        <div class="col-md-4">
                                            <h4><strong>degats:</strong></h4>
                                        {{$Sinistres['degats']}}
                                        </div>
                                        <div class="col-md-4">
                                            <h4><strong>Lieu:</strong></h4>
                                            {{$Sinistres['Lieu']}}
                                            </div>

                                        </div>
                                        <div class="row col-md-12" > <br> <br></div>
                                    <div  class="row">

                                    <div class="col-lg-6">
                                        <!-- DATA TABLE-->
                                        <h3>Vehicule A</h3>
                                        <h5>Preneur d'assurance/Assuré</h5>
                                       <h6>Nom:</h6>{{$Sinistres['NomAS']}}
                                       <h6> Prenoms:</h6>{{$Sinistres['PrenomAS']}}
                                      <h6> Adresse:</h6>{{$Sinistres['AdresseAS']}}
                                        <h6>Téléphone:</h6>{{$Sinistres['TéléphoneASS']}}
                                       <h6> Code_Postal:</h6>{{$Sinistres['Code_PostalAS']}}
                                       <h6>Email:</h6>{{$Sinistres['EmailAS']}}
                                       <h5>Vehicule</h5>
                                       <h6>Marque!</h6>{{$Sinistres['MarqueV']}}
                                       <h6>Numero_immatriculation:</h6>{{$Sinistres['Numero_immatriculationV']}}
                                       <h6>Pays_immatriculation:</h6>{{$Sinistres['Pays_immatriculationV']}}
                                       <h5>Société d'assurance</h5>
                                       <h6>Nom:</h6>{{$Sinistres['NomA']}}
                                       <h6>Num de contrat:</h6>{{$Sinistres['num_contrat']}}
                                       <h6>Num de carteverte:</h6>{{$Sinistres['num_carte_verte']}}
                                         <h6>Du:</h6>{{$Sinistres['du']}}
                                         <h6>Au:</h6>{{$Sinistres['au']}}
                                         <h6>Agence:</h6>{{$Sinistres['agence']}}
                                         <h6>Nom agence:</h6>{{$Sinistres['nom_agence']}}
                                         <h6>Adresse:</h6>{{$Sinistres['adresse']}}
                                         <h6>Pays:</h6>{{$Sinistres['pays']}}
                                         <h6>Téléphone:</h6>{{$Sinistres['telephone']}}
                                         <h6>Email:</h6>{{$Sinistres['email']}}
                                         <h6>Prise en charge ?</h6>{{$Sinistres['prise_encharge']}}
                                         <h5>Conducteur</h5>
                                         <h6>Nom:</h6>{{$Sinistres['NomC']}}
                                        <h6>Prenom:</h6>{{$Sinistres['PrenomC']}}
                                        <h6>Date de naissance:</h6>{{$Sinistres['date_naissanceC']}}
                                        <h6>Adresse:</h6>{{$Sinistres['AdresseC']}}
                                        <h6>Téléphone:</h6>{{$Sinistres['telephoneC']}}
                                        <h6>Email:</h6>{{$Sinistres['emailC']}}
                                        <h6>Permis de conduire Num:</h6>{{$Sinistres['num_permisC']}}
                                        <h6>Pays:</h6>{{$Sinistres['paysC']}}
                                        <h6>Categorie:</h6>{{$Sinistres['categorieC']}}
                                        <h6>Permis valide jusqu'au:</h6>{{$Sinistres['fin_valide_permisC']}}
                                        <h5>Degats apparents au vehicule</h5>
                                        <h6>Description:</h6>{{$Sinistres['Description']}}
                                    <h6>Détaille</h6>{{$Sinistres['Détaille']}}

                                    <h5>Circonstance</h5>
                                   <h6> Circonstance:</h6>{{$Sinistres['Circonstance']}}
                                    <h5>Croquis</h5>
                                        <h6>url:</h6>{{$Sinistres['CroquisA']}}
                                    <h5>Photos</h5>
                                    <h6>url:</h6>{{$Sinistres['PhotosA']}}
                                    <h5>Signature</h5>
                                    <h6>url:</h6>{{$Sinistres['SignatureA']}}

                                        <!-- END DATA TABLE                  -->
                                    </div>

                                    <div class="col-md-6">
                                        <!-- DATA TABLE-->
                                        <h3>Vehicule B</h3>
                                            <br>
                                            <h5>Preneur d'assurance/Assuré</h5>
                                            <h6>Nom:</h6>{{$Sinistres['NomASB']}}
                                            <h6> Prenoms:</h6>{{$Sinistres['PrenomASB']}}
                                           <h6> Adresse:</h6>{{$Sinistres['AdresseASB']}}
                                             <h6>Téléphone:</h6>{{$Sinistres['TéléphoneASSB']}}
                                            <h6> Code_Postal:</h6>{{$Sinistres['Code_PostalASB']}}
                                            <h6>Email:</h6>{{$Sinistres['EmailASB']}}
                                            <h5>Vehicule</h5>
                                            <h6>Marque!</h6>{{$Sinistres['MarqueB']}}
                                            <h6>Numero_immatriculation:</h6>{{$Sinistres['Numero_immatriculationB']}}
                                            <h6>Pays_immatriculation:</h6>{{$Sinistres['Pays_immatriculationB']}}
                                            <h5>Société d'assurance</h5>
                                            <h6>Nom:</h6>{{$Sinistres['NomB']}}
                                            <h6>Num de contrat:</h6>{{$Sinistres['num_contratB']}}
                                            <h6>Num de carteverte:</h6>{{$Sinistres['num_carte_verteB']}}
                                              <h6>Du:</h6>{{$Sinistres['duB']}}
                                              <h6>Au:</h6>{{$Sinistres['auB']}}
                                              <h6>Agence:</h6>{{$Sinistres['agenceB']}}
                                              <h6>Nom agence:</h6>{{$Sinistres['nom_agenceB']}}
                                              <h6>Adresse:</h6>{{$Sinistres['adresseB']}}
                                              <h6>Pays:</h6>{{$Sinistres['paysB']}}
                                              <h6>Téléphone:</h6>{{$Sinistres['telephoneAB']}}
                                              <h6>Email:</h6>{{$Sinistres['emailB']}}
                                              <h6>Prise en charge ?</h6>{{$Sinistres['prise_enchargeB']}}
                                              <h5>Conducteur</h5>
                                              <h6>Nom:</h6>{{$Sinistres['NomCB']}}
                                             <h6>Prenom:</h6>{{$Sinistres['PrenomCB']}}
                                             <h6>Date de naissance:</h6>{{$Sinistres['date_naissanceCB']}}
                                             <h6>Adresse:</h6>{{$Sinistres['AdresseCB']}}
                                             <h6>Téléphone:</h6>{{$Sinistres['telephoneCB']}}
                                             <h6>Email:</h6>{{$Sinistres['emailCB']}}
                                             <h6>Permis de conduire Num:</h6>{{$Sinistres['num_permisCB']}}
                                             <h6>Pays:</h6>{{$Sinistres['paysCB']}}
                                             <h6>Categorie:</h6>{{$Sinistres['categorieCB']}}
                                             <h6>Permis valide jusqu'au:</h6>{{$Sinistres['fin_valide_permisCB']}}
                                             <h5>Degats apparents au vehicule</h5>
                                             <h6>Description:</h6>{{$Sinistres['DescriptionCB']}}
                                         <h6>Détaille</h6>{{$Sinistres['DétailleCB']}}

                                         <h5>Circonstance</h5>
                                        <h6> Circonstance:</h6>{{$Sinistres['CirconstanceCB']}}
                                         <h5>Croquis</h5>
                                             <h6>url:</h6>{{$Sinistres['CroquisA_B']}}
                                         <h5>Photos</h5>
                                         <h6>url:</h6>{{$Sinistres['PhotosB']}}
                                         <h5>Signature</h5>
                                         <h6>url:</h6>{{$Sinistres['SignatureB']}}

                                        <!-- END DATA TABLE                  -->
                                    </div>
                                </div>
                                </div>
                                @endforeach
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="copyright">
                                            <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https<h6></h6>//colorlib.com">Colorlib</a>.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END PAGE CONTENT-->
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- END PAGE CONTENT  -->

    </div>
@endsection
