@section('styles')
    <style>
        .box-sh-card{
            box-shadow: 1px 1px 6px rgb(118, 118, 118);
        }
        .signature{
            width: 100%; 
            height:200px; 
            margin-bottom:20px; 
            border-radius:10px;
        }
        .content-picture{
            height: 250px; 
            border-radius:10px;
            padding: 0px;
            background: #f8f9fa;
        }
        .content-picture-legend{
            height: 230px;
            border-radius: 10px;
        }
    </style>
@endsection('styles')

@section('content')

    <div class="container">

        <div class="row text-right">
            <div class="col-lg-12">
                <a href="{{route('sinistre.download',[$compagny , $id])}}" class="btn btn-primary text-right"> Télécharger</a>
            </div>
        </div>

        <div class="row dateR">
            <div class="col-lg-12 dateC">

                <h3 class="text-center py-3 mt-2 mb-5 bg-primary text-white font-weight-bold box-sh-card" style="border-radius: 15px">
                    CONSTAT AMIABLE AUTOMOBILE {{$compagny}}
                </h3>

                <div class="border-bottom">

                    {{-- Infos Sinistre --}}
                    <div class="row Ro1">

                        <div class="col-md-4">
                            <h4><strong> Date de l'accident : </strong></h4>{{array_key_exists('dateSinistre' , $Sinistres['sinistre']) ? $Sinistres['sinistre']['dateSinistre'] : ''}}
                        </div>
        
                        <div class="col-md-4">
                            <h4><strong>Heure : </strong></h4>{{array_key_exists('heureSinistre' , $Sinistres['sinistre'] ) ? $Sinistres['sinistre']['heureSinistre'] : ''}}
                        </div>
        
                        <div class="col-md-4">
                            <h4><strong>Localisation : </strong></h4>{{array_key_exists('Localisation' , $Sinistres ) ? $Sinistres['Localisation'] : ''}}
                        </div>
        
                    </div>
        
                    <div class="col-md-12 Ro1"> <br></div>
                    
                    {{-- Les blessés  --}}
                    <h3>Les Blessés</h3>
                    <div class="row Ro1" >

                        @if (count($Sinistres['blesse']['data']) > 0)
                            
                            @foreach ( $Sinistres['blesse']['data'] as $blesse )

                                <div class="col-md-3 my-1">
                                    <strong class="champ">Nom : </strong>{{ array_key_exists('nom' , $blesse) ? $blesse['nom'] : ''}}
                                </div>
                                <div class="col-md-3 my-1">
                                    <strong class="champ">Prénom : </strong>{{ array_key_exists('prenom' , $blesse) ? $blesse['prenom'] : ''}}
                                </div>
                                <div class="col-md-3 my-1">
                                    <strong class="champ">Profession : </strong>{{ array_key_exists('profession' , $blesse) ? $blesse['profession'] : ''}}
                                </div>
                                <div class="col-md-3 my-1">
                                    <strong class="champ">Téléphone : </strong>{{ array_key_exists('telephone' , $blesse) ? $blesse['telephone'] : ''}}
                                </div>
                                <div class="col-md-3 my-1">
                                    <strong class="champ">Adresse : </strong>{{ array_key_exists('Adresse' , $blesse) ? $blesse['Adresse'] : ''}}
                                </div>
                                <div class="col-md-3 my-1">
                                    <strong class="champ">Situation : </strong>{{ array_key_exists('situation' , $blesse) ? $blesse['situation'] : ''}}
                                </div>
                                <div class="col-md-3 my-1">
                                    <strong class="champ">Nature : </strong>{{ array_key_exists('nature' , $blesse) ? $blesse['nature'] : ''}}
                                </div>
                                <div class="col-md-3 my-1">
                                    <strong class="champ">Soins/Hospitalisation : </strong>{{ array_key_exists('centrehospital' , $blesse) ? $blesse['centrehospital'] : ''}}
                                </div>

                            @endforeach

                        @else 
                            <span class="ml-2 text-danger">Aucun blesse enregistré.</span>
                        @endif
                    </div>

                </div>

                <div> <br></div>
                    
                <div  class="row">
                    {{-- Infos A --}}
                    <div class="col-md-5 col1 pt-3 border bg-success box-sh-card" style="border-radius: 15px">
                        <!-- DATA TABLE-->
                        <h3 class="veh bg-light py-2 px-2 box-sh-card" style="border-radius: 5px;">Véhicule A</h3>

                        {{-- Infos Assuré A --}}
                        <div>
                            <h5 class="border-bottom font-weight-bold my-3">Preneur Assurance/Assuré</h5>
                            <strong class="champ">Nom : </strong>{{array_key_exists('nom' , $Sinistres['assure']) ? $Sinistres['assure']['nom'] : ''}}<br>
                            <strong class="champ">Prénom : </strong>{{array_key_exists('prenom' , $Sinistres['assure']) ? $Sinistres['assure']['prenom'] : ''}}<br>
                            <strong class="champ">Adresse : </strong>{{array_key_exists('addresse' , $Sinistres['assure']) ?  $Sinistres['assure']['addresse'] : ''}}<br>
                            <strong class="champ">Téléphone : </strong>{{array_key_exists('telephone' , $Sinistres['assure']) ? $Sinistres['assure']['telephone'] : ''}}<br>
                            <strong class="champ">Code Postal : </strong>{{array_key_exists('code postal' , $Sinistres['assure']) ? $Sinistres['assure']['code postal'] : ''}}<br>
                            <strong class="champ">Email : </strong>{{array_key_exists('email' , $Sinistres['assure']) ? $Sinistres['assure']['email'] : ''}}<br>
                        </div>
                        
                        {{-- Infos Vehicule A --}}
                        <div>
                            <h5 class="border-bottom font-weight-bold my-3">Vehicule</h5>
                            <strong class="champ">Marque : </strong>{{array_key_exists('marque' , $Sinistres['vehicule']) ? $Sinistres['vehicule']['marque'] : ''}}<br>
                            <strong class="champ">N°Immatriculation : </strong>{{array_key_exists('numero_immatriculation' , $Sinistres['vehicule']) ? $Sinistres['vehicule']['numero_immatriculation'] : ''}}<br>
                            <strong class="champ">Pays Immatriculation : </strong>{{array_key_exists('pays_immatriculation' , $Sinistres['vehicule']) ? $Sinistres['vehicule']['pays_immatriculation'] : ''}}<br>
                        </div>
                        
                        {{-- Infos Société d'assurance A --}}
                        <div>
                            <h5 class="border-bottom font-weight-bold my-3">Société d'assurance</h5>
                            <strong class="champ">Nom : </strong>{{array_key_exists('nomAgence' , $Sinistres['assuranceA']) ? $Sinistres['assuranceA']['nomAgence'] : ''}}<br>
                            <strong class="champ">Addresse : </strong>{{array_key_exists('addresse' , $Sinistres['assuranceA']) ? $Sinistres['assuranceA']['addresse'] : ''}}<br>
                            <strong class="champ">Agence : </strong>{{array_key_exists('agence' , $Sinistres['assuranceA']) ? $Sinistres['assuranceA']['agence'] : ''}}<br>
                            <strong class="champ">Du : </strong>{{array_key_exists('du' , $Sinistres['assuranceA']) ? $Sinistres['assuranceA']['du'] : ''}}<br>
                            <strong class="champ">Au : </strong>{{array_key_exists('au' , $Sinistres['assuranceA']) ? $Sinistres['assuranceA']['au'] : ''}}<br>
                            <strong class="champ">Email : </strong>{{array_key_exists('emailCA' , $Sinistres['assuranceA']) ? $Sinistres['assuranceA']['emailCA'] : ''}}<br>
                            <strong class="champ">Nom de la compagnie : </strong>{{array_key_exists('nomCA' , $Sinistres['assuranceA']) ? $Sinistres['assuranceA']['nomCA'] : ''}}<br>
                            <strong class="champ">Numéro de la carte verte : </strong>{{array_key_exists('nomCarteVerte' , $Sinistres['assuranceA']) ? $Sinistres['assuranceA']['nomCarteVerte'] : ''}}<br>
                            <strong class="champ">Numéro de contrat : </strong>{{array_key_exists('numContrat' , $Sinistres['assuranceA']) ? $Sinistres['assuranceA']['numContrat'] : ''}}<br>
                            <strong class="champ">Pays de la compagnie : </strong>{{array_key_exists('paysCA' , $Sinistres['assuranceA']) ? $Sinistres['assuranceA']['paysCA'] : ''}}<br>
                            <strong class="champ">Prise en charge : </strong>{{array_key_exists('priseEnCharge' , $Sinistres['assuranceA']) ? $Sinistres['assuranceA']['priseEnCharge'] : ''}}<br>
                            <strong class="champ">Téléphone de la compagnie : </strong>{{array_key_exists('telephoneCA' , $Sinistres['assuranceA']) ? $Sinistres['assuranceA']['telephoneCA'] : ''}}<br>
                        </div>
                        
                        {{-- Infos Conducteurs A --}}
                        <div>
                            <h5 class="border-bottom font-weight-bold my-3">Conducteur</h5>
                            <strong class="champ">Nom : </strong>{{ array_key_exists('nom' , $Sinistres['conducteur']) ? $Sinistres['conducteur']['nom'] : ''}}<br>
                            <strong class="champ">Prenom : </strong>{{ array_key_exists('prenom' , $Sinistres['conducteur']) ? $Sinistres['conducteur']['prenom'] : ''}}<br>
                            <strong class="champ">Date de naissance : </strong>{{ array_key_exists('naissance' , $Sinistres['conducteur']) ? $Sinistres['conducteur']['naissance'] : ''}}<br>
                            <strong class="champ">Adresse : </strong>{{ array_key_exists('addresse' , $Sinistres['conducteur']) ? $Sinistres['conducteur']['addresse'] : ''}}<br>
                            <strong class="champ">Téléphone : </strong>{{ array_key_exists('telephone' , $Sinistres['conducteur']) ? $Sinistres['conducteur']['telephone'] : ''}}<br>
                            <strong class="champ">Email : </strong>{{ array_key_exists('email' , $Sinistres['conducteur']) ? $Sinistres['conducteur']['email'] : ''}}<br>
                            <strong class="champ">Permis de conduire N° : </strong>{{ array_key_exists('numpermis' , $Sinistres['conducteur']) ? $Sinistres['conducteur']['numpermis'] : ''}}<br>
                            <strong class="champ">Pays : </strong>{{ array_key_exists('pays' , $Sinistres['conducteur']) ? $Sinistres['conducteur']['pays'] : ''}}<br>
                            <strong class="champ">Catégorie : </strong>{{ array_key_exists('email' , $Sinistres['conducteur']) ? $Sinistres['conducteur']['email'] : ''}}<br>
                            <strong class="champ">Permis valide jusqu'au : </strong>{{ array_key_exists('permis' , $Sinistres['conducteur']) ? $Sinistres['conducteur']['permis'] : ''}}<br>
                        </div>
                        
                        {{-- Observation A --}}
                        <div>
                            <h5 class="border-bottom font-weight-bold my-3">Dégats apparents au véhicule</h5>
                            <strong class="champ">Description : </strong>{{  array_key_exists('degat' , $Sinistres['observation']) ? $Sinistres['observation']['degat'] : ''}}<br>
                            <strong class="champ">Mes Observations : </strong>{{  array_key_exists('observation' , $Sinistres['observation']) ? $Sinistres['observation']['observation'] : ''}}<br>
                        </div>
                        
                        {{-- Circonstance A --}}
                        <h5 class="border-bottom font-weight-bold my-3">Circonstance</h5>
                        <strong class="champ">Circonstance : </strong>{{  array_key_exists('circonstance' , $Sinistres) ? $Sinistres['circonstance'] : ''}}<br>

                        {{-- Capture Vehicule A --}}
                        <div class="mx-2">
                            <h5 class="border-bottom font-weight-bold my-3">Photos</h5>
                            <div class="row pb-2">
                                <div class="col-lg-6 border content-picture">
                                    @if (array_key_exists('AvantA' , $Sinistres) && $Sinistres['AvantA'] != "")
                                        <a target="_blank" class="" href="{{  array_key_exists('AvantA' , $Sinistres) ? $Sinistres['AvantA'] : '#'}} "style="font-weight: 500">
                                            <img class="w-100 content-picture-legend" style="border-radius: 10px;" src="{{  array_key_exists('AvantA' , $Sinistres) ? $Sinistres['AvantA'] : ''}}" alt="">
                                        </a>
                                    @else 
                                        <div class="text-center text-danger">Pas de capture</div>
                                    @endif
                                    <div class="text-center font-weight-bold">Avant</div>
                                </div>
    
                                <div class="col-lg-6 border content-picture">
                                    @if (array_key_exists('ArriereA' , $Sinistres) && $Sinistres['ArriereA'] != "")
                                        <a target="_blank" class="" href="{{  array_key_exists('ArriereA' , $Sinistres) ? $Sinistres['ArriereA'] : '#'}} "style="font-weight: 500">
                                            <img class="w-100 content-picture-legend" style="border-radius: 10px;" src="{{  array_key_exists('ArriereA' , $Sinistres) ? $Sinistres['ArriereA'] : ''}}" alt="">
                                        </a>
                                    @else 
                                        <div class="text-center text-danger">Pas de capture</div>
                                    @endif
                                    <div class="text-center font-weight-bold">Arriere</div>
                                </div>
    
                                <div class="col-lg-6 border content-picture">
                                    @if (array_key_exists('DroitA' , $Sinistres) && $Sinistres['DroitA'] != "")
                                        <a target="_blank" class="" href="{{  array_key_exists('DroitA' , $Sinistres) ? $Sinistres['DroitA'] : '#'}} " style="font-weight: 500">
                                            <img class="w-100 content-picture-legend" src="{{ array_key_exists('DroitA' , $Sinistres) ? $Sinistres['DroitA'] : ''}}" alt="">
                                        </a>
                                    @else 
                                        <div class="text-center text-danger">Pas de capture</div>
                                    @endif
                                    <div class="text-center font-weight-bold">Droit</div>
                                </div>
    
                                <div class="col-lg-6 border content-picture">
                                    @if (array_key_exists('GaucheA' , $Sinistres) && $Sinistres['GaucheA'] != "")
                                        <a target="_blank" class="" href="{{  array_key_exists('GaucheA' , $Sinistres) ? $Sinistres['GaucheA'] : '#'}} "style="font-weight: 500">
                                            <img class="w-100 content-picture-legend" style="border-radius: 10px;" src="{{ array_key_exists('GaucheA' , $Sinistres) ? $Sinistres['GaucheA'] : ''}}" alt="">
                                        </a>
                                    @else 
                                        <div class="text-center text-danger">Pas de capture</div>
                                    @endif
                                    <div class="text-center font-weight-bold">Gauche</div>
                                </div>
    
                                <div class="col-lg-6 border content-picture">
                                    @if (array_key_exists('HautA' , $Sinistres) && $Sinistres['HautA'] != "")
                                        <a target="_blank" class="" href="{{  array_key_exists('HautA' , $Sinistres) ? $Sinistres['HautA'] : '#'}} "style="font-weight: 500">
                                            <img class="w-100 content-picture-legend" style="border-radius: 10px;" src="{{  array_key_exists('HautA' , $Sinistres) ? $Sinistres['HautA'] : ''}}" alt="">
                                        </a>
                                    @else 
                                        <div class="text-center text-danger">Pas de capture</div>
                                    @endif
                                    <div class="text-center font-weight-bold">Haut</div>
                                </div>
                            </div>

                        </div>
                        
                        {{-- Signature A --}}
                        <h5 class="border-bottom font-weight-bold my-3">Signature A</h5>
                        @if (array_key_exists('SignatureA' , $Sinistres) && $Sinistres['SignatureA'] != "")
                            <img class="signature" src="{{ array_key_exists('SignatureA' , $Sinistres) ? $Sinistres['SignatureA'] : ''}}" alt="">
                        @else 
                            <div>Pas de signature</div>
                        @endif
                    </div>
                    
                    <div class="col-md-2"></div>

                    {{-- Infos B --}}
                    <div class="col-md-5 pt-3 col2 border bg-warning box-sh-card" style="border-radius: 15px">
                        <!-- DATA TABLE-->
                        <h3 class="veh bg-light py-2 px-2 box-sh-card" style="border-radius: 5px;">Véhicule B</h3>

                        {{-- Infos Assuré B --}}
                        <div>
                            <h5 class="border-bottom font-weight-bold my-3">Preneur Assurance/Assuré</h5>
                            <strong class="champ">Nom : </strong>{{array_key_exists('nom' , $Sinistres['assureB']) ? $Sinistres['assureB']['nom'] : ''}}<br>
                            <strong class="champ">Prénom : </strong>{{array_key_exists('prenom' , $Sinistres['assureB']) ? $Sinistres['assureB']['prenom'] : ''}}<br>
                            <strong class="champ">Adresse : </strong>{{array_key_exists('addresse' , $Sinistres['assureB']) ?  $Sinistres['assureB']['addresse'] : ''}}<br>
                            <strong class="champ">Téléphone : </strong>{{array_key_exists('telephone' , $Sinistres['assureB']) ? $Sinistres['assureB']['telephone'] : ''}}<br>
                            <strong class="champ">Code Postal : </strong>{{array_key_exists('code postal' , $Sinistres['assureB']) ? $Sinistres['assureB']['code postal'] : ''}}<br>
                            <strong class="champ">Email : </strong>{{array_key_exists('email' , $Sinistres['assureB']) ? $Sinistres['assureB']['email'] : ''}}<br>
                        </div>
                        
                        {{-- Infos Vehicule B --}}
                        <div>
                            <h5 class="border-bottom font-weight-bold my-3">Vehicule</h5>
                            <strong class="champ">Marque : </strong>{{array_key_exists('marque' , $Sinistres['vehiculeB']) ? $Sinistres['vehiculeB']['marque'] : ''}}<br>
                            <strong class="champ">N°Immatriculation : </strong>{{array_key_exists('numero_immatriculation' , $Sinistres['vehiculeB']) ? $Sinistres['vehiculeB']['numero_immatriculation'] : ''}}<br>
                            <strong class="champ">Pays Immatriculation : </strong>{{array_key_exists('pays_immatriculation' , $Sinistres['vehiculeB']) ? $Sinistres['vehiculeB']['pays_immatriculation'] : ''}}<br>
                        </div>
                        
                        {{-- Infos Société d'assurance B --}}
                        <div>
                            <h5 class="border-bottom font-weight-bold my-3">Société d'assurance</h5>
                            @if (array_key_exists('assuranceB' , $Sinistres))
                                <strong class="champ">Nom : </strong>{{array_key_exists('nomAgence' , $Sinistres['assuranceB']) ? $Sinistres['assuranceB']['nomAgence'] : ''}}<br>
                                <strong class="champ">Addresse : </strong>{{array_key_exists('addresse' , $Sinistres['assuranceB']) ? $Sinistres['assuranceB']['addresse'] : ''}}<br>
                                <strong class="champ">Agence : </strong>{{array_key_exists('agence' , $Sinistres['assuranceB']) ? $Sinistres['assuranceB']['agence'] : ''}}<br>
                                <strong class="champ">Du : </strong>{{array_key_exists('du' , $Sinistres['assuranceB']) ? $Sinistres['assuranceB']['du'] : ''}}<br>
                                <strong class="champ">Au : </strong>{{array_key_exists('au' , $Sinistres['assuranceB']) ? $Sinistres['assuranceB']['au'] : ''}}<br>
                                <strong class="champ">Email : </strong>{{array_key_exists('emailCA' , $Sinistres['assuranceB']) ? $Sinistres['assuranceB']['emailCA'] : ''}}<br>
                                <strong class="champ">Nom de la compagnie : </strong>{{array_key_exists('nomCA' , $Sinistres['assuranceB']) ? $Sinistres['assuranceB']['nomCA'] : ''}}<br>
                                <strong class="champ">Numéro de la carte verte : </strong>{{array_key_exists('nomCarteVerte' , $Sinistres['assuranceB']) ? $Sinistres['assuranceB']['nomCarteVerte'] : ''}}<br>
                                <strong class="champ">Numéro de contrat : </strong>{{array_key_exists('numContrat' , $Sinistres['assuranceB']) ? $Sinistres['assuranceB']['numContrat'] : ''}}<br>
                                <strong class="champ">Pays de la compagnie : </strong>{{array_key_exists('paysCA' , $Sinistres['assuranceB']) ? $Sinistres['assuranceB']['paysCA'] : ''}}<br>
                                <strong class="champ">Prise en charge : </strong>{{array_key_exists('priseEnCharge' , $Sinistres['assuranceB']) ? $Sinistres['assuranceB']['priseEnCharge'] : ''}}<br>
                                <strong class="champ">Téléphone de la compagnie : </strong>{{array_key_exists('telephoneCA' , $Sinistres['assuranceB']) ? $Sinistres['assuranceB']['telephoneCA'] : ''}}<br>
                            @endif
                        </div>
                        
                        {{-- Infos Conducteurs B --}}
                        <div>
                            <h5 class="border-bottom font-weight-bold my-3">Conducteur</h5>
                            <strong class="champ">Nom : </strong>{{ array_key_exists('nom' , $Sinistres['conducteurB']) ? $Sinistres['conducteurB']['nom'] : ''}}<br>
                            <strong class="champ">Prenom : </strong>{{ array_key_exists('prenom' , $Sinistres['conducteurB']) ? $Sinistres['conducteurB']['prenom'] : ''}}<br>
                            <strong class="champ">Date de naissance : </strong>{{ array_key_exists('naissance' , $Sinistres['conducteurB']) ? $Sinistres['conducteurB']['naissance'] : ''}}<br>
                            <strong class="champ">Adresse : </strong>{{ array_key_exists('addresse' , $Sinistres['conducteurB']) ? $Sinistres['conducteurB']['addresse'] : ''}}<br>
                            <strong class="champ">Téléphone : </strong>{{ array_key_exists('telephone' , $Sinistres['conducteurB']) ? $Sinistres['conducteurB']['telephone'] : ''}}<br>
                            <strong class="champ">Email : </strong>{{ array_key_exists('email' , $Sinistres['conducteurB']) ? $Sinistres['conducteurB']['email'] : ''}}<br>
                            <strong class="champ">Permis de conduire N° : </strong>{{ array_key_exists('numpermis' , $Sinistres['conducteurB']) ? $Sinistres['conducteurB']['numpermis'] : ''}}<br>
                            <strong class="champ">Pays : </strong>{{ array_key_exists('pays' , $Sinistres['conducteurB']) ? $Sinistres['conducteurB']['pays'] : ''}}<br>
                            <strong class="champ">Catégorie : </strong>{{ array_key_exists('email' , $Sinistres['conducteurB']) ? $Sinistres['conducteurB']['email'] : ''}}<br>
                            <strong class="champ">Permis valide jusqu'au : </strong>{{ array_key_exists('permis' , $Sinistres['conducteurB']) ? $Sinistres['conducteurB']['permis'] : ''}}<br>
                        </div>
                        
                        {{-- Observation B --}}
                        <div>
                            <h5 class="border-bottom font-weight-bold my-3">Dégats apparents au véhicule</h5>
                            <strong class="champ">Description : </strong>{{  array_key_exists('degat' , $Sinistres['observation']) ? $Sinistres['observation']['degat'] : ''}}<br>
                            <strong class="champ">Mes Observations : </strong>{{  array_key_exists('observation' , $Sinistres['observation']) ? $Sinistres['observation']['observation'] : ''}}<br>
                        </div>
                        
                        {{-- Circonstance B --}}
                        <h5 class="border-bottom font-weight-bold my-3">Circonstance</h5>
                        <strong class="champ">Circonstance : </strong>{{  array_key_exists('circonstance' , $Sinistres) ? $Sinistres['circonstance'] : ''}}<br>

                        {{-- Capture Vehicule B --}}

                        
                        <div class="mx-2">
                            <h5 class="border-bottom font-weight-bold my-3">Photos</h5>
                            <div class="row pb-2">
                                <div class="col-lg-6 border content-picture">
                                    @if (array_key_exists('AvantB' , $Sinistres) && $Sinistres['AvantB'] != "")
                                        <a target="_blank" class="" href="{{  array_key_exists('AvantB' , $Sinistres) ? $Sinistres['AvantB'] : '#'}} "style="font-weight: 500">
                                            <img class="w-100 content-picture-legend" style="border-radius: 10px;" src="{{  array_key_exists('AvantB' , $Sinistres) ? $Sinistres['AvantB'] : ''}}" alt="">
                                        </a>
                                    @else 
                                        <div class="text-center text-danger">Pas de capture</div>
                                    @endif
                                    <div class="text-center font-weight-bold">Avant</div>
                                </div>
    
                                <div class="col-lg-6 border content-picture">
                                    @if (array_key_exists('ArriereB' , $Sinistres) && $Sinistres['ArriereB'] != "")
                                        <a target="_blank" class="" href="{{  array_key_exists('ArriereB' , $Sinistres) ? $Sinistres['ArriereB'] : '#'}} "style="font-weight: 500">
                                            <img class="w-100 content-picture-legend" style="border-radius: 10px;" src="{{  array_key_exists('ArriereB' , $Sinistres) ? $Sinistres['ArriereB'] : ''}}" alt="">
                                        </a>
                                    @else 
                                        <div class="text-center text-danger">Pas de capture</div>
                                    @endif
                                    <div class="text-center font-weight-bold">Arriere</div>
                                </div>
    
                                <div class="col-lg-6 border content-picture">
                                    @if (array_key_exists('GaucheB' , $Sinistres) && $Sinistres['GaucheB'] != "")
                                        <a target="_blank" class="" href="{{  array_key_exists('GaucheB' , $Sinistres) ? $Sinistres['GaucheB'] : '#'}} "style="font-weight: 500">
                                            <img class="w-100 content-picture-legend" style="border-radius: 10px;" src="{{ array_key_exists('GaucheB' , $Sinistres) ? $Sinistres['GaucheB'] : ''}}" alt="">
                                        </a>
                                    @else 
                                        <div class="text-center text-danger">Pas de capture</div>
                                    @endif
                                    <div class="text-center font-weight-bold">Gauche</div>
                                </div>

                                <div class="col-lg-6 border content-picture">
                                    @if (array_key_exists('DroitB' , $Sinistres) && $Sinistres['DroitB'] != "")
                                        <a target="_blank" class="" href="{{  array_key_exists('DroitB' , $Sinistres) ? $Sinistres['DroitB'] : '#'}} " style="font-weight: 500">
                                            <img class="w-100 content-picture-legend" src="{{ array_key_exists('DroitB' , $Sinistres) ? $Sinistres['DroitB'] : ''}}" alt="">
                                        </a>
                                    @else 
                                        <div class="text-center text-danger">Pas de capture</div>
                                    @endif
                                    <div class="text-center font-weight-bold">Droit</div>
                                </div>
    
                                <div class="col-lg-6 border content-picture">
                                    @if (array_key_exists('HautB' , $Sinistres) && $Sinistres['HautB'] != "")
                                        <a target="_blank" class="" href="{{  array_key_exists('HautB' , $Sinistres) ? $Sinistres['HautB'] : '#'}} "style="font-weight: 500">
                                            <img class="w-100 content-picture-legend" style="border-radius: 10px;" src="{{  array_key_exists('HautB' , $Sinistres) ? $Sinistres['HautB'] : ''}}" alt="">
                                        </a>
                                    @else 
                                        <div class="text-center text-danger">Pas de capture</div>
                                    @endif
                                    <div class="text-center font-weight-bold">Haut</div>
                                </div>
                            </div>

                        </div>

                        {{-- Signature B --}}
                        <h5 class="border-bottom font-weight-bold my-3">Signature B</h5>
                        @if (array_key_exists('SignatureB' , $Sinistres) && $Sinistres['SignatureB'] != "")
                            <img class="signature" src="{{ array_key_exists('SignatureB' , $Sinistres) ? $Sinistres['SignatureB'] : ''}}" alt="">
                        @else 
                            <div>Pas de signature</div>
                        @endif
                        
                        
                     
                    </div>
                </div>

            <div class="row border-bottom mt-4"><h3 class="tem">Témoin</h3></div>

                <div class="row">
                    @if (count($Sinistres['temoins']['data']) > 0)
                    
                        @foreach ( $Sinistres['temoins']['data'] as $temoin )
                                
                            <div class=" col-md-3">
                                <strong class="champ">Nom : </strong>{{ array_key_exists('nomt' , $temoin) ? $temoin['nomt'] : ''}}
                            </div>
                            <div class=" col-md-3">
                                <strong class="champ">Prénom : </strong>{{ array_key_exists('prenomt' , $temoin) ? $temoin['prenomt'] : ''}}
                            </div>
                            <div class=" col-md-3">
                                <strong class="champ">Adresse : </strong>{{ array_key_exists('Adresse' , $temoin) ? $temoin['Adresse'] : ''}}
                            </div>
                            <div class=" col-md-3">
                                <strong class="champ">Téléphone : </strong>{{ array_key_exists('telephone' , $temoin) ? $temoin['telephone'] : ''}}
                            </div>

                        @endforeach

                    @else 
                            <span>Aucun témoins enregistré.</span>
                    @endif
                </div>

                <div class="row mt-4 border-bottom"><h3 class="tem">Croquis</h3></div>
                
                <div class="row">
                    @if (array_key_exists('croquis' , $Sinistres) && $Sinistres['croquis'] != "")
                        <img style="width: 50%; margin-top:2px;margin-bottom:2px; border-radius:10px;" src="{{array_key_exists('croquis' , $Sinistres) ? $Sinistres['croquis'] : ''}}" alt="" >
                    @else
                        <div class="text-danger">Page de croquis</div>
                    @endif
                </div>

            </div>
        </div>

        <div class="row mt-3">
            <div class="col-12">
                <a class="btn btn-danger" href="{{ route('sinistre.index' , $compagny) }}">Retour</a>
            </div>
        </div>
    </div>

@endsection
