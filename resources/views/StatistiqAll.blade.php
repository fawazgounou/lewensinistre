{{-- vehi
@extends('layouts.HeaderDash')

@section('content')

                <div class="container">

                              <div class="row">

                                    <div class="col-md-12">
                                        <!-- DATA TABLE-->
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
                                                    @foreach($AllvehiculeA as $vehiculeA)
                                                    <tr>
                                                        <td>{{$vehicule['id']}}</td>
                                                        <td>{{$vehicule['Marque']}}</td>
                                                        <td>{{$vehicule['Numero_immatriculation']}}</td>
                                                        <td>{{$vehicule['Pays_immatriculation']}}</td>
                                                    </tr>

                                                @endforeach
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
 --}}
