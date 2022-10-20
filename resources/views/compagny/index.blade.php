@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-body">
        
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- DATA TABLE-->
                        <h3>Liste des Compagnies</h3>
                            <br>
                        <div class="table-responsive m-b-40">
                            <table id="table" class="display expandable-table" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Nom Compagnie</th>
                                        <th>E-mail Compagnie</th>
                                        <th>Type</th>
                                        <th>Attribuer un Role</th>
                                        <th>Voir le Daschbord</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($user)
                                        @foreach($user as $compagnie)
                                            <tr class="bg-white">
                                                <td>{{$compagnie['name']}}</td>
                                                <td>{{$compagnie['mail']}}</td>
                                                <td>{{$compagnie['role']}}</td>
                                                <td>

                                                    <div class="dropdown">
                                                        <button class="btn btn-danger btn-sm dropdown-toggle" type="button" data-toggle="dropdown">
                                                            Modifier <span class="caret"></span>
                                                        </button>
                                                        <div class="dropdown-menu" >
                                                            <a href="/update/{{$compagnie['id']}}/user">User</a>
                                                            <a href="/update/{{$compagnie['id']}}/new">New</a>
                                                            <a href="/update/{{$compagnie['id']}}/admin">Admin</a>
                                                        </div>
                                                    </div>

                                                </td>
                                                <td>
                                                    <a  class="btn btn-primary"  href="{{ route('sinistre.index' , $compagnie['name']) }}" style="color: white">Voir Tableau de bord</a>
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
