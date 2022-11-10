@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- DATA TABLE-->
                        <div class="row">
                            <div class="col-lg-8">
                                <h3>LISTE DES COMPAGNIES</h3>
                            </div>
                            <div class="col-lg-4">
                                <a href="{{ route('compagny.create') }}" class="btn btn-primary btn-sm">Ajouter une compagnie</a>
                            </div>
                        </div>
                        
                        <br>
                        <div class="table-responsive m-b-40">
                            <table id="table" class="display expandable-table" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>N°</th>
                                        <th>Nom</th>
                                        <th>E-mail</th>
                                        <th>Type</th>
                                        <th>Attribuer un Role</th>
                                        <th>Voir sinistres</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($user)
                                        @foreach($user as $key => $compagnie)
                                            {{-- @if ($compagnie['name'] != "Administrateur") --}}
                                                <tr class="bg-white">
                                                    <td>{{ ++$key }}</td>
                                                    <td>{{$compagnie['name']}}</td>
                                                    <td>{{$compagnie['mail']}}</td>
                                                    <td>
                                                        {{-- {{$compagnie['role'] == 'New' ? 'Nouveau' : ($compagnie['role'] == 'user' ? 'Compagnie' : 'Administrateur')}} --}}
                                                        @if ($compagnie['role'] == 'New' )
                                                            <span class="text-danger font-weight-bold"> Désactivé </span>
                                                        @elseif($compagnie['role'] == 'user')
                                                            <span class="text-primary font-weight-bold"> Compagnie </span>
                                                        @else
                                                            <span class="text-success font-weight-bold"> Administrateur </span>
                                                        @endif
                                                    </td>
                                                    <td>

                                                        <div class="dropdown">
                                                            <button class="btn btn-warning dropdown-toggle {{ $compagnie['name'] == session()->get('name') ? 'disabled' : '' }}" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                              Modifier
                                                            </button>
                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                              <a class="dropdown-item text-danger" href="{{ route('compagny.type' , [$compagnie['id'] , 'New']) }}"> <i class="mdi mdi-checkbox-blank-circle"></i> Désactivé</a>
                                                              <a class="dropdown-item text-primary" href="{{ route('compagny.type' , [$compagnie['id'] , 'user']) }}"> <i class="mdi mdi-checkbox-blank-circle"></i> Compagnie</a>
                                                              <a class="dropdown-item text-success" href="{{ route('compagny.type' , [$compagnie['id'] , 'admin']) }}"> <i class="mdi mdi-checkbox-blank-circle"></i> Administrateur</a>
                                                            </div>
                                                          </div>

                                                    </td>
                                                    <td class="text-center">
                                                        <a  class="btn btn-primary {{ $compagnie['role'] == 'user' || $compagnie['role'] == 'New' ? '' : 'disabled' }}"  href="{{ route('sinistre.index' , $compagnie['name']) }}" style="color: white">Voir sinistres</a>
                                                    </td>
                                                </tr>
                                            {{-- @endif --}}
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
