@extends('layouts.HeaderDash')

@section('content')

               <div class="container">


                <div class="row">
                    <div class="col-md-12">
                        <!-- DATA TABLE-->
                        <h3 style="color:rgb(111, 126, 225); ">Liste des Utilisateurs</h3>
                            <br>
                        <div class="table-responsive m-b-40">
                            <table class="table table-borderless table-data3" style=" background-color:rgb(220, 244, 243);">
                                <thead  style=" background-color:rgb(111, 126, 225);">
                                    <tr style="font-weight: bold; color:black; ">
                                        <th>Nom Compagnie</th>
                                        <th>E-mail Compagnie</th>
                                        <th>Type</th>
                                        <th>Attribuer un Role</th>
                                        <th>Voir le Daschbord</th>

                                    </tr>
                                </thead>
                                <tbody>

                                @foreach($user as $compagnie)

                                    <tr>

                                        <td>{{$compagnie['name']}}</td>
                                        <td>{{$compagnie['mail']}}</td>
                                        <td>{{$compagnie['role']}}</td>
                                        <td>

                                            <div class="dropdown">
                                                <button class="btn btn-danger btn-sm dropdown-toggle" type="button" data-toggle="dropdown">Modifier <span class="caret"></span>
                                                </button>
                                                     <div class="dropdown-menu" >
                                                        <a href="/update/{{$compagnie['id']}}/user">User</a>
                                                        <a href="/update/{{$compagnie['id']}}/new">New</a>
                                                        <a href="/update/{{$compagnie['id']}}/admin">Admin</a>

                                                </div>
                                            </div>


                                           </td>
                                           <td>


                                            <button class="btn btn-primary" type="button" >   <a href="voirdash/{{$compagnie['name']}}" style="color: white">Voir Dashbord</a>
                                            </button>







                                       </td>
                                    </tr>

                                @endforeach
                            </tbody>
                            </table>
                        </div>
                        <!-- END DATA TABLE                  -->
                    </div>
                </div>
                                <div class="row">

                                    <div class="col-lg-8">
                                        <!-- RECENT REPORT-->
                                        <div class="recent-report3 m-b-40">
                                            <div class="title-wrap">
                                                <h3 class="title-3">Rapport lann??e</h3>
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

                                            <div class="row">
                                                <ul class="list-unstyled navbar__list">
                                                    <li class="active has-sub">
                                                        <span class="dot dot--blue"></span>   <a class="js-arrow" href="StatistiqAll">
                                                            <i class="fas fa-tachometer-alt"></i>Tous les V??hicules

                                                        </a>

                                                    </li>


                                                </ul>
                                            </div>

                                            <div class="chart-wrap m-t-60">
                                                <canvas id="percent-chart2"></canvas>
                                            </div>
                                        </div>
                                        <!-- END CHART PERCENT-->
                                    </div>
                                </div>






                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="copyright">
                                            <small>R??alis?? par MONRA Fawaz?????? </small>
                                        </div>
                                    </div>

                            <!-- END PAGE CONTENT-->



        <!-- END PAGE CONTENT  -->

    </div>
    <script>

        var firebaseConfig = {
            apiKey: "AIzaSyDktWy8VxVVV4NQX1j_P_QqmJEjhbSvuik",
            authDomain: "sinistreapp.firebaseapp.com",
            databaseURL: "https://sinistreapp-default-rtdb.firebaseio.com",
            projectId: "sinistreapp",
            storageBucket: "sinistreapp.appspot.com",
            messagingSenderId: "455258819634",
            appId: "1:455258819634:web:94ab999c46b736d566002b"
         };
            // Initialize Firebase
     firebase.analytics;
        firebase.initializeApp(firebaseConfig);
        var db = firebase.firestore();

      db.collection('Sinistre') events.get().then(function(querySnapshot) {
              querySnapshot.forEach(function(doc){
                   console.log(doc.id,"=>", $doc.data() ) ;
                });
            });
</script>

@endsection
