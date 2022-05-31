<!DOCTYPE html>
<html>
<head>

  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="au theme template">
  <meta name="author" content="Hau Nguyen">
  <meta name="keywords" content="au theme template">

  <!-- Title Page-->
  <title>Diba Sinistre</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">

   <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
  <!-- Fontfaces CSS-->
  <link href="plugins/css/font-face.css" rel="stylesheet" media="all">
  <link href="plugins/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
  <link href="plugins/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
  <link href="plugins/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

  <!-- Bootstrap CSS-->
  <link href="plugins/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

  <!-- Vendor CSS-->
  <link href="plugins/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
  <link href="plugins/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
  <link href="plugins/vendor/wow/animate.css" rel="stylesheet" media="all">
  <link href="plugins/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
  <link href="plugins/vendor/slick/slick.css" rel="stylesheet" media="all">
  <link href="plugins/vendor/select2/select2.min.css" rel="stylesheet" media="all">
  <link href="plugins/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">


  <!-- Main CSS-->
  <link href="plugins/css/theme.css" rel="stylesheet" media="all">
</head>
<body>

    <div class="row" style="align-content: center">
        <div class="row">

        <div class="col-md-4">
        <h4><strong> Date de l'accident:</strong></h4>{{$Sinistres['date_Sinistre']}}

        </div>
        <div class="col-md-4">
            <h4><strong>Heure:</strong></h4>{{$Sinistres['Heure_Sinistre']}}

        </div>
        <div class="col-md-4">
            <h4><strong>Localisation:</strong></h4>{{$Sinistres['Localisation']}}

        </div>

        </div>
        <div class="row col-md-12" > <br> </div>
        <div class="row" >

            <div class="col-md-4">
                <h4><strong>Blesser:</strong></h4>
            {{$Sinistres['blesse']}}

            </div>
            <div class="col-md-4">
                <h4><strong>degats:</strong></h4>
            {{$Sinistres['degats']}}
            </div>
            <div class="col-md-4">
                <h4><strong>Lieu:</strong></h4>
                {{$Sinistres['Lieu']}}
                </div>

            </div>
            <div class="row col-md-12" > <br> <br></div>
        <div  class="row">

        <div class="col-lg-6">
            <!-- DATA TABLE-->
            <h3>Vehicule A</h3>
            <h5>Preneur d'assurance/Assuré</h5>
           <h6>Nom:</h6>{{$Sinistres['NomAS']}}
           <h6> Prenoms:</h6>{{$Sinistres['PrenomAS']}}
          <h6> Adresse:</h6>{{$Sinistres['AdresseAS']}}
            <h6>Téléphone:</h6>{{$Sinistres['TéléphoneAS']}}
           <h6> Code_Postal:</h6>{{$Sinistres['Code_PostalAS']}}
           <h6>Email:</h6>{{$Sinistres['EmailAS']}}
           <h5>Vehicule</h5>
           <h6>Marque!</h6>{{$Sinistres['MarqueV']}}
           <h6>Numero_immatriculation:</h6>{{$Sinistres['Numero_immatriculationV']}}
           <h6>Pays_immatriculation:</h6>{{$Sinistres['Pays_immatriculationV']}}
           <h5>Société d'assurance</h5>
           <h6>Nom:</h6>{{$Sinistres['NomA']}}
           <h6>Num de contrat:</h6>{{$Sinistres['num_contrat']}}
           <h6>Num de carteverte:</h6>{{$Sinistres['num_carte_verte']}}
             <h6>Du:</h6>{{$Sinistres['du']}}
             <h6>Au:</h6>{{$Sinistres['au']}}
             <h6>Agence:</h6>{{$Sinistres['agence']}}
             <h6>Nom agence:</h6>{{$Sinistres['nom_agence']}}
             <h6>Adresse:</h6>{{$Sinistres['adresse']}}
             <h6>Pays:</h6>{{$Sinistres['pays']}}
             <h6>Téléphone:</h6>{{$Sinistres['telephone']}}
             <h6>Email:</h6>{{$Sinistres['email']}}
             <h6>Prise en charge ?</h6>{{$Sinistres['prise_encharge']}}
             <h5>Conducteur</h5>
             <h6>Nom:</h6>{{$Sinistres['NomC']}}
            <h6>Prenom:</h6>{{$Sinistres['PrenomC']}}
            <h6>Date de naissance:</h6>{{$Sinistres['date_naissanceC']}}
            <h6>Adresse:</h6>{{$Sinistres['AdresseC']}}
            <h6>Téléphone:</h6>{{$Sinistres['telephoneC']}}
            <h6>Email:</h6>{{$Sinistres['emailC']}}
            <h6>Permis de conduire Num:</h6>{{$Sinistres['num_permisC']}}
            <h6>Pays:</h6>{{$Sinistres['paysC']}}
            <h6>Categorie:</h6>{{$Sinistres['categorieC']}}
            <h6>Permis valide jusqu'au:</h6>{{$Sinistres['fin_valide_permisC']}}
            <h5>Degats apparents au vehicule</h5>
            <h6>Description:</h6>{{$Sinistres['Description']}}
        <h6>Détaille</h6>{{$Sinistres['Détaille']}}

        <h5>Circonstance</h5>
       <h6> Circonstance:</h6>{{$Sinistres['Circonstance']}}
        {{-- <h5>Croquis</h5>
            <h6>url:</h6>{{$Sinistres['CroquisA']}}
        <h5>Photos</h5>
        <h6>url:</h6>{{$Sinistres['PhotosA']}}
        <h5>Signature</h5>
        <h6>url:</h6>{{$Sinistres['SignatureA']}} --}}

            <!-- END DATA TABLE                  -->
        </div>

        <div class="col-md-6">
            <!-- DATA TABLE-->
            <h3>Vehicule B</h3>
                <br>
                <h5>Preneur d'assurance/Assuré</h5>
                <h6>Nom:</h6>{{$Sinistres['NomASB']}}
                <h6> Prenoms:</h6>{{$Sinistres['PrenomASB']}}
               <h6> Adresse:</h6>{{$Sinistres['AdresseASB']}}
                 <h6>Téléphone:</h6>{{$Sinistres['TéléphoneASSB']}}
                <h6> Code_Postal:</h6>{{$Sinistres['Code_PostalASB']}}
                <h6>Email:</h6>{{$Sinistres['EmailASB']}}
                <h5>Vehicule</h5>
                <h6>Marque!</h6>{{$Sinistres['MarqueB']}}
                <h6>Numero_immatriculation:</h6>{{$Sinistres['Numero_immatriculationB']}}
                <h6>Pays_immatriculation:</h6>{{$Sinistres['Pays_immatriculationB']}}
                <h5>Société d'assurance</h5>
                <h6>Nom:</h6>{{$Sinistres['NomB']}}
                <h6>Num de contrat:</h6>{{$Sinistres['num_contratB']}}
                <h6>Num de carteverte:</h6>{{$Sinistres['num_carte_verteB']}}
                  <h6>Du:</h6>{{$Sinistres['duB']}}
                  <h6>Au:</h6>{{$Sinistres['auB']}}
                  <h6>Agence:</h6>{{$Sinistres['agenceB']}}
                  <h6>Nom agence:</h6>{{$Sinistres['nom_agenceB']}}
                  <h6>Adresse:</h6>{{$Sinistres['adresseB']}}
                  <h6>Pays:</h6>{{$Sinistres['paysB']}}
                  <h6>Téléphone:</h6>{{$Sinistres['telephoneAB']}}
                  <h6>Email:</h6>{{$Sinistres['emailB']}}
                  <h6>Prise en charge ?</h6>{{$Sinistres['prise_enchargeB']}}
                  <h5>Conducteur</h5>
                  <h6>Nom:</h6>{{$Sinistres['NomCB']}}
                 <h6>Prenom:</h6>{{$Sinistres['PrenomCB']}}
                 <h6>Date de naissance:</h6>{{$Sinistres['date_naissanceCB']}}
                 <h6>Adresse:</h6>{{$Sinistres['AdresseCB']}}
                 <h6>Téléphone:</h6>{{$Sinistres['telephoneCB']}}
                 <h6>Email:</h6>{{$Sinistres['emailCB']}}
                 <h6>Permis de conduire Num:</h6>{{$Sinistres['num_permisCB']}}
                 <h6>Pays:</h6>{{$Sinistres['paysCB']}}
                 <h6>Categorie:</h6>{{$Sinistres['categorieCB']}}
                 <h6>Permis valide jusqu'au:</h6>{{$Sinistres['fin_valide_permisCB']}}
                 <h5>Degats apparents au vehicule</h5>
                 <h6>Description:</h6>{{$Sinistres['DescriptionCB']}}
             <h6>Détaille</h6>{{$Sinistres['DétailleCB']}}

             <h5>Circonstance</h5>
            <h6> Circonstance:</h6>{{$Sinistres['CirconstanceCB']}}
           {{--   <h5>Croquis</h5>
                 <h6>url:</h6>{{$Sinistres['CroquisA_B']}}
             <h5>Photos</h5>
             <h6>url:</h6>{{$Sinistres['PhotosB']}}
             <h5>Signature</h5>
             <h6>url:</h6>{{$Sinistres['SignatureB']}} --}}

            <!-- END DATA TABLE                  -->
        </div>
    </div>
    </div>
</body>
<script src="plugins/vendor/jquery-3.2.1.min.js"></script>
<!-- Bootstrap JS-->
<script src="plugins/vendor/bootstrap-4.1/popper.min.js"></script>
<script src="plugins/vendor/bootstrap-4.1/bootstrap.min.js"></script>
<!-- plugins/Vendor JS       -->
<script src="plugins/vendor/slick/slick.min.js">
</script>
<script src="plugins/vendor/wow/wow.min.js"></script>
<script src="plugins/vendor/animsition/animsition.min.js"></script>
<script src="plugins/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
</script>
<script src="plugins/vendor/counter-up/jquery.waypoints.min.js"></script>
<script src="plugins/vendor/counter-up/jquery.counterup.min.js">
</script>
<script src="plugins/vendor/circle-progress/circle-progress.min.js"></script>
<script src="plugins/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="plugins/vendor/chartjs/Chart.bundle.min.js"></script>
<script src="plugins/vendor/select2/select2.min.js">
</script>
</html>
