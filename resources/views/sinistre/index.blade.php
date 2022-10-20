@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- DATA TABLE-->
                        <h3>TABLEAU DES SINISTRES DE LA COMPAGNIE <span class="text-danger"> {{ strtoupper($compagny) }} </span></h3>
                            <br>
                        <div class="table-responsive m-b-40">
                            <table id="table" class="display expandable-table" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Heure</th>
                                        <th>Localisation</th>
                                        {{-- <th>Lieu</th>
                                        <th>Blessé</th>
                                        <th>Dégats</th> --}}
                                    </tr>
                                </thead>
                                <tbody>

                                        @if ($usersinistre)
                                       
                                            @foreach($usersinistre as $Sinistres)
                                                <tr>
                                                    <td>{{$Sinistres['sinistre']["dateSinistre"]}}</td>
                                                    <td>{{$Sinistres['sinistre']['heureSinistre']}}</td>
                                                    <td>{{$Sinistres['Localisation']}}</td>
                                                    {{-- <td> {{$Sinistres['sinistre']['lieuSinistre']}}</td>
                                                    <td>{{$Sinistres['sinistre']['blesse']}}</td>
                                                    <td>{{$Sinistres['sinistre']['degats']}}</td> --}}
                                                    <td>
                                                        <div class="row">
                                                            <a class="btn btn-danger mr-1" href="{{ route('sinistre.details' , [$compagny , $Sinistres['id']]) }}" style="color: white" >
                                                                Détails
                                                            </a>
                                                            <a class="btn btn-primary" href="{{route('sinistre.download',[$compagny , $Sinistres['id']])}}" style="color: white"> 
                                                                Télécharger
                                                            </a>
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
