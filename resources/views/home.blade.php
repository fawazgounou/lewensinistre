@extends('layouts.HeaderDash')

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- DATA TABLE-->
                        <h3>TABLEAU DES SINISTRES</h3>
                            <br>
                        <div class="table-responsive m-b-40">
                            <table id="table" class="display expandable-table" style="width:100%">
                                <thead>
                                    <tr>
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
                                        {{-- <h4 style="text-align: center; color:rgb(111, 126, 225)"> Vous n'avez aucune soumission de sinistre</h4> --}}
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
                    </div>
                </div>
            </div>
        </div>
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
