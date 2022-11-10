@extends('layouts.master')

@section('content')
<div class="card">
    <div class="card-body">
    
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- DATA TABLE-->
                    <div class="row mb-5">
                        <div class="col-lg-8">
                            <h3>MON PROFILE</h3>
                        </div>

                    </div>
                    
                    <form action="{{ route('compagny.update' , $compagny['name']) }}" method="post" class="row">
                        @csrf

                        <div class="col-lg-6">
                            <label for="email">E-mail</label>
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{ $compagny['mail'] }}" placeholder="email">
                            @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-lg-6">
                            <label for="current_password">Actuel mot de passe <span class="text-danger">*</span></label>
                            <input type="password" name="current_password" class="form-control @error('current_password') is-invalid @enderror" id="current_password" placeholder="********">
                            @error('current_password')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-lg-6">
                            <label for="new_password">Nouveau mot de passe</label>
                            <input type="password" name="new_password" class="form-control @error('new_password') is-invalid @enderror" id="new_password" placeholder="********">
                            @error('new_password')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-lg-6">
                            <label for="confirm_password">Confirmation du mot de passe</label>
                            <input type="password" name="confirm_password" class="form-control @error('confirm_password') is-invalid @enderror" id="confirm_password" placeholder="********">
                            @error('confirm_password')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="col-lg-12 mt-5">
                            <button type="button" class="btn btn-light">Annuler</button>
                            <button type="submit" class="btn btn-primary">Enregistrer</button>
                        </div>
                    </form>
                        
                </div>
            </div>
        </div>
    </div>
</div>
@endsection('content')