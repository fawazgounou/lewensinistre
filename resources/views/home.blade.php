@extends('layouts.HeaderDash')

@section('content')

               <div class="container">

                <div class="row">

                    <div class="col-md-10">

                    <div class="row" style="background-color:rgb(111, 126, 225); ">
                        <h3 style="margin-left:300px; margin-right:5px;margin-top:3px; color:white;  text-align: center; "><strong>Rechercher une Date :</strong> </h3>
                        <form method='post' action='rechercher'>
@csrf

                            <input  style="color:white; background-color:rgb(111, 126, 225);"type='date'  id='recherche' name='recherche'>
                           <button class="btn btn-danger"  type='submit'> Rechercher</button>
                            </form>
                    </div>






                        <!-- END MENU SIDEBAR-->
                    </div>

                    <div class="col-md-2">

                            <h5 style="color:rgb(111, 126, 225);  ">Nombre Total </h5>

                                <h5 style="color: red">{{count($usersinistre)}} </h5>

                        <!-- END CHART PERCENT-->
                    </div>





                </div>
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <!-- DATA TABLE-->
                        <h3 style="color:rgb(111, 126, 225); ">TABLEAU DES SINISTRES</h3>
                            <br>
                        <div class="table-responsive m-b-40">
                            <table class="table table-borderless table-data3" style=" background-color:rgb(220, 244, 243);">
                                <thead  style=" background-color:rgb(111, 126, 225);">
                                    <tr style="font-weight: bold; color:black; ">
                                        <th>Date</th>
                                        <th>Heure</th>
                                        <th>Localisation</th>
                                        <th>Lieu</th>
                                        <th>Blessé</th>
                                        <th>Dégats</th>


                                    </tr>
                                </thead>
                                <tbody>
                                    @if(empty($usersinistre))

                                    <h4 style="text-align: center; color:rgb(111, 126, 225)"> Vous n'avez aucune soumission de sinistre</h4>
                                        @else

                                @foreach($usersinistre as $Sinistres)

                                    <tr>

                                        <td>{{$Sinistres['date_Sinistre']}}</td>
                                        <td>{{$Sinistres['Heure_Sinistre']}}</td>
                                        <td>{{$Sinistres['Localisation']}}</td>
                                        <td> {{$Sinistres['Lieu']}}</td>
                                        <td>{{$Sinistres['blesse']}}</td>
                                        <td>{{$Sinistres['degats']}}</td>

                                        <td>
                                               <div class="row">
                                                <button class="btn btn-danger" type="button" > <a href="dashbord/{{$Sinistres['id']}}" style="color: white" >Détails</a>
                                                </button> &ensp;
                                                <button class="btn btn-primary " type="button" > <a href="detailSinistre/{{$Sinistres['id']}}" style="color: white"> Télécharger</a>
                                                </button>
                                               </div>
                                         </td>

                                    </tr>

                                    @endforeach

                                    @endif
                            </tbody>
                            </table>
                        </div>
                        <!-- END DATA TABLE-->
                    </div>
                </div>


                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="copyright">
                                            <small>Réalisé par MONRA Fawaz❤️ </small>
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
