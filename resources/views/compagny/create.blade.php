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
                            <h3>AJOUT DE COMPAGNIE</h3>
                        </div>

                    </div>
                    
                    <form action="{{ route('compagny.store') }}" method="post" class="row">
                        @csrf

                        <div class="col-lg-6">
                            <label for="">Nom de la compagnie <span class="text-danger">*</span></label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{ old('name') }}" placeholder="name" oninput="checkUser()">
                            @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-lg-6">
                            <label for="">E-mail de la compagnie <span class="text-danger">*</span></label>
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{ old('email') }}" placeholder="email">
                            @error('email')
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