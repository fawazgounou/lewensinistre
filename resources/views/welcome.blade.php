@extends('layouts.app')

@section('content')
  <div class="">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">

          <div class="card-header" style="color:rgb(246, 251, 249); background-color:rgb(111, 126, 225); text-align:center;font-size:25px "><strong>{{ __('Connexion') }}</strong></div>

          <div class="card-body" style="background-color:rgb(226, 229, 244); ">
            <form method="POST" action="{{ route('login') }}">
              @csrf

              <div class="form-group row">
                <label for="email" style="color:rgb(111, 126, 225);" class="col-md-4 col-form-label text-md-right"><strong>{{ __('E-Mail Address') }}</strong></label>

                <div class="col-md-6">
                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

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
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                      @error('password')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                  </div>

                  <div class="form-group row">
                    <div class="col-md-6 offset-md-4">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                          {{ __('Se rappeler de moi') }}
                        </label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group row mb-0">
                    <div class="col-md-8 offset-md-4">
                      <button type="submit" style="background-color:rgb(111, 126, 225); color:rgb(246, 251, 249)"class="btn btn-primary">
                        <strong>{{ __('Se Connecter') }}</strong>
                      </button>

                        <a class="btn btn-link" href="/password/reset" style="text-decoration: none;">
                          Mot de passe oublier?
                        </a>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>



      <script src="https://www.gstatic.com/firebasejs/7.14.0/firebase-app.js"></script>
      <script src="https://www.gstatic.com/firebasejs/7.14.0/firebase-auth.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
      <script>
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

    @endsection
