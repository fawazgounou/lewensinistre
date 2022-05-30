@extends('layouts.HeaderDash')

@section('content')

                <div class="container">

                              <div class="row">

                                    <div class="col-md-12">
                                        <!-- DATA TABLE-->
                                        <h3>Information du Vehicule</h3>
                                        <div class="table-responsive m-b-40">

                                            <table class="table table-borderless table-data3">
                                                <thead>
                                                    <tr>
                                                        <th>Id</th>
                                                        <th>Marque</th>
                                                        <th>Numéro Immatriculation</th>
                                                        <th>Pays Immatriculation</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <tr>

                                                        <td>{{$vehiculeA['Marque']}}</td>
                                                        <td>{{$vehiculeA['Numero_immatriculation']}}</td>
                                                        <td>{{$vehiculeA['Pays_immatriculation']}}</td>
                                                    </tr>
                                            </tbody>
                                            </table>
                                        </div>
                                        <!-- END DATA TABLE                  -->
                                    </div>


                                    <div class="col-md-12">
                                        <!-- DATA TABLE-->
                                        <h3>Information du de l'Assuré</h3>
                                        <div class="table-responsive m-b-40">

                                            <table class="table table-borderless table-data3">
                                                <thead>
                                                    <tr>
                                                        <th>Id</th>
                                                        <th>Marque</th>
                                                        <th>Numéro Immatriculation</th>
                                                        <th>Pays Immatriculation</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <tr>

                                                        <td>{{$vehiculeA['nom']}}</td>
                                                        <td>{{$vehiculeA['prenom']}}</td>
                                                        <td>{{$vehiculeA['Adresse']}}</td>
                                                        <td>{{$vehiculeA['Telephone']}}</td>
                                                        <td>{{$vehiculeA['Code_Postal']}}</td>
                                                        <td>{{$vehiculeA['Email']}}</td>
                                                    </tr>
                                            </tbody>
                                            </table>
                                        </div>
                                        <!-- END DATA TABLE                  -->
                                    </div>

                                    <div class="col-md-12">
                                        <!-- DATA TABLE-->
                                        <h3>Information du l'Assurance</h3>
                                        <div class="table-responsive m-b-40">

                                            <table class="table table-borderless table-data3">
                                                <thead>
                                                    <tr>
                                                        <th>Id</th>
                                                        <th>Marque</th>
                                                        <th>Numéro Immatriculation</th>
                                                        <th>Pays Immatriculation</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                     <tr>

                                                        <td>{{$vehiculeA['Nom']}}</td>
                                                        <td>{{$vehiculeA['num_contrat']}}</td>
                                                        <td>{{$vehiculeA['num_carte_verte']}}</td>
                                                        <td>{{$vehiculeA['du']}}</td>
                                                        <td>{{$vehiculeA['au']}}</td>
                                                        <td>{{$vehiculeA['agence']}}</td>
                                                        <td>{{$vehiculeA['nom_agence']}}</td>
                                                        <td>{{$vehiculeA['adresse']}}</td>
                                                        <td>{{$vehiculeA['pays']}}</td>
                                                        <td>{{$vehiculeA['telephone']}}</td>
                                                        <td>{{$vehiculeA['email']}}</td>
                                                        <td>{{$vehiculeA['prise_encharge']}}</td>
                                                    </tr>
                                            </tbody>
                                            </table>
                                        </div>
                                        <!-- END DATA TABLE                  -->
                                    </div>
                                    <div class="col-md-12">
                                        <!-- DATA TABLE-->
                                        <h3>Information du Conducteur</h3>
                                        <div class="table-responsive m-b-40">

                                            <table class="table table-borderless table-data3">
                                                <thead>
                                                    <tr>

                                                        <th>Id</th>
                                                        <th>Marque</th>
                                                        <th>Numéro Immatriculation</th>
                                                        <th>Pays Immatriculation</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <tr>
                                                        <td>{{$vehiculeA['Nom']}}</td>
                                                        <td>{{$vehiculeA['Prenom']}}</td>
                                                        <td>{{$vehiculeA['date_naissance']}}</td>
                                                        <td>{{$vehiculeA['Adresse']}}</td>
                                                        <td>{{$vehiculeA['telephone']}}</td>
                                                        <td>{{$vehiculeA['email']}}</td>
                                                        <td>{{$vehiculeA['num_permis']}}</td>
                                                        <td>{{$vehiculeA['pays']}}</td>
                                                        <td>{{$vehiculeA['categorie']}}</td>
                                                        <td>{{$vehiculeA['fin_valide_permis']}}</td>
                                                        <td>{{$vehiculeA['id_SignatureCA']}}</td>

                                                    </tr>
                                            </tbody>
                                            </table>
                                        </div>
                                        <!-- END DATA TABLE                  -->
                                    </div>
                                    <div class="col-md-12">
                                        <!-- DATA TABLE-->
                                        <h3>Circonstance</h3>
                                        <div class="table-responsive m-b-40">

                                            <table class="table table-borderless table-data3">
                                                <thead>
                                                    <tr>
                                                        <th>Id</th>
                                                        <th>Marque</th>
                                                        <th>Numéro Immatriculation</th>
                                                        <th>Pays Immatriculation</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <tr>

                                                       <td>{{$vehiculeA['Circonstance']}}</td>
                                                        <td>{{$vehiculeA['id_CirconstanceA']}}</td>

                                                    </tr>
                                            </tbody>
                                            </table>
                                        </div>
                                        <!-- END DATA TABLE                  -->
                                    </div>
                                    <div class="col-md-12">
                                        <!-- DATA TABLE-->
                                        <h3>IObservation</h3>
                                        <div class="table-responsive m-b-40">

                                            <table class="table table-borderless table-data3">
                                                <thead>
                                                    <tr>
                                                        <th>Id</th>
                                                        <th>Marque</th>
                                                        <th>Numéro Immatriculation</th>
                                                        <th>Pays Immatriculation</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <tr>
                                                                   <td>{{$vehiculeA['Description']}}</td>
                                                        <td>{{$vehiculeA['Détaille']}}</td>

                                                    </tr>
                                            </tbody>
                                            </table>
                                        </div>
                                        <!-- END DATA TABLE                  -->
                                    </div>

                                    <div class="col-md-12">
                                        <!-- DATA TABLE-->
                                        <h3>Photos</h3>
                                        <div class="table-responsive m-b-40">

                                            <table class="table table-borderless table-data3">
                                                <thead>
                                                    <tr>
                                                        <th>Id</th>
                                                        <th>Marque</th>
                                                        <th>Numéro Immatriculation</th>
                                                        <th>Pays Immatriculation</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <tr>
                                                        <td>{{$vehiculeA['imageUrl']}}</td>
                                                        <td>{{$vehiculeA['name']}}</td>

                                                    </tr>
                                            </tbody>
                                            </table>
                                        </div>
                                        <!-- END DATA TABLE                  -->
                                    </div>

                                    <div class="col-md-12">
                                        <!-- DATA TABLE-->
                                        <h3>Croquis</h3>
                                        <div class="table-responsive m-b-40">

                                            <table class="table table-borderless table-data3">
                                                <thead>
                                                    <tr>
                                                        <th>Id</th>
                                                        <th>Marque</th>

                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <tr>
                                                        <td>{{$vehiculeA['imageUrl']}}</td>
                                                        <td>{{$vehiculeA['name']}}</td>

                                                    </tr>
                                            </tbody>
                                            </table>
                                        </div>
                                        <!-- END DATA TABLE                  -->
                                    </div>

                                    <div class="col-md-12">
                                        <!-- DATA TABLE-->
                                        <h3>Signature</h3>
                                        <div class="table-responsive m-b-40">

                                            <table class="table table-borderless table-data3">
                                                <thead>
                                                    <tr>
                                                        <th>Id</th>
                                                        <th>Marque</th>

                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <tr>
                                                        <td>{{$vehiculeA['imageUrl']}}</td>
                                                        <td>{{$vehiculeA['name']}}</td>

                                                    </tr>
                                            </tbody>
                                            </table>
                                        </div>
                                        <!-- END DATA TABLE                  -->
                                    </div>
                                </div>




                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="copyright">
                                            <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                        </div>
                                    </div>

                            <!-- END PAGE CONTENT-->



        <!-- END PAGE CONTENT  -->

    </div>

@endsection

