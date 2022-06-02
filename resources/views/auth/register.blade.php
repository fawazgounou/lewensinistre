@extends('layouts.app')

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
      @endsection
