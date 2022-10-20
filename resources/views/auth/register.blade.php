{{-- @extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header" style="color:rgb(246, 251, 249); background-color:rgb(111, 126, 225); text-align:center;font-size:25px"><strong>{{ __('Inscription') }}</strong></div>

          <div class="card-body" style="background-color:rgb(226, 229, 244); ">

            @if(Session::has('error'))
              <div class="alert alert-danger alert-dismissible fade show">
                {{ Session::get('error') }}
                <button type="button" class="close" data-dismiss="alert">&times;</button>
              </div>
            @endif

            <form method="POST" action="{{ route('register') }}">
              @csrf

              <div class="form-group row">
                <label for="name" style="color:rgb(111, 126, 225);" class="col-md-4 col-form-label text-md-right"><strong>{{ __('Name') }}</strong></label>

                <div class="col-md-6">
                  <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                </div>

                <div class="form-group row">
                  <label for="email"style="color:rgb(111, 126, 225);" class="col-md-4 col-form-label text-md-right"><strong>{{ __('E-Mail Address') }}</strong></label>

                  <div class="col-md-6">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                      @error('email')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="password"style="color:rgb(111, 126, 225);" class="col-md-4 col-form-label text-md-right"><strong>{{ __('Password') }}</strong></label>

                    <div class="col-md-6">
                      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="password-confirm"style="color:rgb(111, 126, 225);" class="col-md-4 col-form-label text-md-right"><strong>{{ __('Confirm Password') }}</strong></label>

                      <div class="col-md-6">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                      </div>
                    </div>

                    <div class="form-group row mb-0">
                      <div class="col-md-6 offset-md-4" style="align-content: center">
                        <button type="submit"style="background-color:rgb(111, 126, 225); color:rgb(246, 251, 249)" class="btn ">
                         <strong>{{ __("S'inscrire") }}</strong>
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      @endsection --}}





      
<!DOCTYPE html>
<html lang="fr">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Connexion | Sinistre-Compagnies</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{!! asset('/new-style/vendors/feather/feather.css') !!}">
    <link rel="stylesheet" href="{!! asset('/new-style/vendors/ti-icons/css/themify-icons.css') !!}">
    <link rel="stylesheet" href="{!! asset('/new-style/vendors/css/vendor.bundle.base.css') !!}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{!! asset('/new-style/css/vertical-layout-light/style.css') !!}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{!! asset('/new-style/images/logo.png') !!}" />

    <!-- Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
  </head>

  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth px-0">
          <div class="row w-100 mx-0">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                <div class="brand-logo">
                  <img src="{!! asset('/new-style/images/logo.png') !!}" alt="logo">
                </div>
                <h4>Page d'inscription</h4>
                <h6 class="font-weight-light">Entrer vos informations pour créer un compte.</h6>
                <div id="showMsg"></div>
                <form class="pt-3" method="POST" action="{{ route('register') }}">
                  @csrf
                  <div class="form-group">
                    <input type="name" name="name" class="form-control form-control-lg @error('name') is-invalid @enderror" id="name" value="{{ old('name') }}" placeholder="name" oninput="checkUser()">
                    @error('name')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>

                  <div class="form-group">
                    <input type="email" name="email" class="form-control form-control-lg @error('email') is-invalid @enderror" id="email" value="{{ old('email') }}" placeholder="Email" oninput="checkUser()">
                    @error('email')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>

                  <div class="form-group">
                    <input type="password" name="password" class="form-control form-control-lg @error('password') is-invalid @enderror" id="password" placeholder="Mot de passe">
                    @error('password')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>

                  <div class="form-group">
                    <input type="password" name="password_confirmation" class="form-control form-control-lg @error('password_confirmation') is-invalid @enderror" id="password_confirmation" placeholder="Confirmation mot de passe">
                    @error('password_confirmation')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  
                  <div class="mt-3">
                    <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit">CONNECTEZ-VOUS</button>
                  </div>
                  <div class="my-2 d-flex justify-content-between align-items-center">
                    <div class="form-check">
                      <a href="{{ route('connexion') }}" class="text-warning font-weight-bold"> + Vous avez déjà un compte</a>
                    </div>
                    {{-- <a href="#" class="auth-link text-black">Mot de passe oublié ?</a> --}}
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{!! asset('/new-style/js/jquery-3.2.1.min.js') !!}"></script>
    <script src="{!! asset('/new-style/js/popper.min.js') !!}"></script>

    <script src="{!! asset('/new-style/vendors/js/vendor.bundle.base.js') !!}"></script>

    <script src="https://www.gstatic.com/firebasejs/7.14.0/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.14.0/firebase-auth.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    
    <!-- endinject -->

    <!-- inject:js -->
    <script src="{!! asset('/js/off-canvas.js') !!}"></script>
    <script src="{!! asset('/js/hoverable-collapse.js') !!}"></script>
    <script src="{!! asset('/js/template.js') !!}"></script>
    <script src="{!! asset('/js/settings.js') !!}"></script>
    <script src="{!! asset('/js/todolist.js') !!}"></script>
    <script src="{!! asset('/js/functions.js') !!}"></script>
    <!-- endinject -->



      <!-- Start Firebase scripts -->
      <script>

        // Your web app's Firebase configuration
        var firebaseConfig = {
          apiKey: "AIzaSyDktWy8VxVVV4NQX1j_P_QqmJEjhbSvuik",
          authDomain: "sinistreapp.firebaseapp.com",
          databaseURL: "https://sinistreapp-default-rtdb.firebaseio.com",
          projectId: "sinistreapp",
          storageBucket: "sinistreapp.appspot.com",
          messagingSenderId: "455258819634",
          appId: "1:455258819634:web:9ac7812876a6133f66002b"
        };
    
        // Initialize Firebase
        var firebaseConfig = {
          apiKey: "AIzaSyDktWy8VxVVV4NQX1j_P_QqmJEjhbSvuik",
          authDomain: "sinistreapp.firebaseapp.com",
          databaseURL: "https://sinistreapp-default-rtdb.firebaseio.com",
          projectId: "sinistreapp",
          storageBucket: "sinistreapp.appspot.com",
          messagingSenderId: "455258819634",
          appId: "1:455258819634:web:94ab999c46b736d566002b"
        };
    
        firebase.initializeApp(config);
        var facebookProvider = new firebase.auth.FacebookAuthProvider();
        var googleProvider = new firebase.auth.GoogleAuthProvider();
        var facebookCallbackLink = '/login/facebook/callback';
        var googleCallbackLink = '/login/google/callback';
    
        async function socialSignin(provider) {
          var socialProvider = null;
          if (provider == "facebook") {
            socialProvider = facebookProvider;
            document.getElementById('social-login-form').action = facebookCallbackLink;
          } else if (provider == "google") {
            socialProvider = googleProvider;
            document.getElementById('social-login-form').action = googleCallbackLink;
          } else {
            return;
          }
          firebase.auth().signInWithPopup(socialProvider).then(function(result) {
            result.user.getIdToken().then(function(result) {
              document.getElementById('social-login-tokenId').value = result;
              document.getElementById('social-login-form').submit();
            });
          }).catch(function(error) {
            // do error handling
            console.log(error);
          });
        }
          
      </script>
      <!-- End Firebase scripts -->
  </body>

</html>