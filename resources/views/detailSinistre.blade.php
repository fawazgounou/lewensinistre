<!doctype html>
<html>
<head>

    <style>
.SA{margin-bottom:3px;
    margin-top: 1px
	}
aside{
	display:inline-block;
	background:#EBFEFC;
    width:30%;
    margin-top:30px;
	margin-bottom:3px;
	margin-left:90px;
}
		ul{
	display:inline-block;
    margin-top: 0px;
    margin-bottom: 0%
}
/* .page-break {
    page-break-after: always;
} */
.dateC{
    background-color: rgb(236, 254, 255);
}
.Ro1{
    background-color: rgb(141, 234, 141);
}
.col1{
    background-color: rgb(150, 207, 242);
    padding: auto;
    text-align: justify;
	margin-right:60%;
}
.col2{
    background-color: rgb(228, 232, 170);
    padding: auto;
    text-align: justify;
	margin-left:60%;
	margin-top:-101%;
  }
.veh{
      background-color: rgb(244, 147, 147);
      color: white;
      text-align: center;
  }
  h5{
    background-color:rgb(236, 254, 255);
    color: black;
    text-align: center;
    margin-top: 1%;
    margin-bottom: 1%;
}
.champ{
    margin-top: 3%;
    margin-bottom: 3%;
    color: black;
    padding-right: 2%;
    margin-left: 3%;
}
.tem{
      color: black;
      margin-right:5%;
      margin-bottom: 0%;
      margin-left: 3%;
}
.col12{
 display: inline;
}
.TB{padding: auto;
    text-align: justify;
	margin-right:60%;
	}
.image{
  background-color: rgb(209, 228, 230);
   	width:50%;
	height:300px;
   	margin-left:50%;
	margin-top:-28%;
	padding: auto;
	}
    .sign{

    margin-top: 3px;
    margin-left: 50px
    }
   </style>

</head>
<body>
    <div >

        <div class="row dateR">
            <div class="col-md-9 dateC">
                <div class=" row col-md-9" >
                    <h1 style=" margin-left:20%">CONSTAT AMIABLE AUTOMOBILE {{Session::get('name')}}</h1>

                </div>
            <div class="row Ro1">
				 <ul>
                    <li><strong> Date de laccident:</strong>{{$Sinistres['date_Sinistre']}}</li>
                    <li><strong>Heure:</strong>{{$Sinistres['Heure_Sinistre']}}</li>
                    <li><strong>Localisation:</strong>{{$Sinistres['Localisation']}}</li>

                </ul>
                    <ul>
                    <li><strong>Blesser:</strong>
                    {{$Sinistres['blesse']}}</li>
                    <li> <strong>Dégats:</strong>
                    {{$Sinistres['degats']}}</li>
                    <li> <strong>Lieu:</strong>
                        {{$Sinistres['Lieu']}}</li>

                </ul>

                <aside>
                    <div class="sign">
                        <p > <strong>Signature A </strong>
                            &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
                            <strong>Signature B</strong> </p>
                    <p>   @if($Sinistres['SignatureB']==" ")
                        <h6> Pas de Signature A</h6>
                        @else
                      <img
                        src="data:image/png;base64,{{ base64_encode(file_get_contents($Sinistres['SignatureA'])) }}"
                        alt="" height="30" width="99">
                        @endif &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
                         @if($Sinistres['SignatureB']==" ")
                        <h6> Pas de SignatureB</h6>
                        @else
                        <img
                        src="data:image/png;base64,{{ base64_encode(file_get_contents($Sinistres['SignatureB'])) }}"
                        alt="" height="30" width="99">
                          @endif</p>


                    </div>


                  {{--   <ul >
                    <li class="SA" > <strong>SignatureA:</strong>
                        @if($Sinistres['SignatureB']==" ")
                        <h6> Pas de Signature A</h6>
                        @else
                      <img
                        src="data:image/png;base64,{{ base64_encode(file_get_contents($Sinistres['SignatureA'])) }}"
                        alt="" height="30" width="99">
                        @endif
                 <li class="SA"  ><strong>SignatureB:</strong>
                      @if($Sinistres['SignatureB']==" ")
                      <h6> Pas de SignatureB</h6>
                      @else
                      <img
                      src="data:image/png;base64,{{ base64_encode(file_get_contents($Sinistres['SignatureB'])) }}"
                      alt="" height="30" width="99">
                        @endif
                    </li>
                </ul> --}}
            </aside>
            </div>
      <div class="col12">

         <div class="col-md-5 col1">
                <!-- DATA TABLE-->
                <h3 class="veh">Véhicule A</h3>
                <h5>Preneur Assurance/Assuré</h5>
             <strong class="champ">Nom:</strong>{{$Sinistres['NomAS']}}<br>
               <strong class="champ"> Prénom:</strong>{{$Sinistres['PrenomAS']}}<br>
              <strong class="champ"> Adresse:</strong>{{$Sinistres['AdresseAS']}}<br>
                <strong class="champ">Téléphone:</strong>{{$Sinistres['TéléphoneAS']}}<br>
               <strong class="champ"> Code Postal:</strong>{{$Sinistres['Code_PostalAS']}}<br>
               <strong class="champ">Email:</strong>{{$Sinistres['EmailAS']}}<br>
               <h5>Vehicule</h5>
               <strong class="champ">Marque:</strong>{{$Sinistres['MarqueV']}}<br>
               <strong class="champ">N°Immatriculation:</strong>{{$Sinistres['Numero_immatriculationV']}}<br>
               <strong class="champ">Pays Immatriculation:</strong>{{$Sinistres['Pays_immatriculationV']}}<br>
               <h5>Société d'assurance</h5>
               <strong class="champ">Nom:</strong>{{$Sinistres['NomA']}}<br>
               <strong class="champ">N° contrat:</strong>{{$Sinistres['num_contrat']}}<br>
               <strong class="champ">N° carteverte:</strong>{{$Sinistres['num_carte_verte']}}<br>
                 <strong class="champ">Du:</strong>{{$Sinistres['du']}}<br>
                 <strong class="champ">Au:</strong>{{$Sinistres['au']}}<br>
                 <strong class="champ">Agence:</strong>{{$Sinistres['agence']}}<br>
                 <strong class="champ">Nom agence:</strong>{{$Sinistres['nom_agence']}}<br>
                 <strong class="champ">Adresse:</strong>{{$Sinistres['adresse']}}<br>
                 <strong class="champ">Pays:</strong>{{$Sinistres['pays']}}<br>
                 <strong class="champ">Téléphone:</strong>{{$Sinistres['telephone']}}<br>
                 <strong class="champ">Email:</strong>{{$Sinistres['email']}}<br>
                 <strong class="champ">Prise en charge ?</strong>{{$Sinistres['prise_encharge']}}<br>
                 <h5>Conducteur</h5>
                 <strong class="champ">Nom:</strong>{{$Sinistres['NomC']}}<br>
                <strong class="champ">Prenom:</strong>{{$Sinistres['PrenomC']}}<br>
                <strong class="champ">Date de naissance:</strong>{{$Sinistres['date_naissanceC']}}<br>
                <strong class="champ">Adresse:</strong>{{$Sinistres['AdresseC']}}<br>
                <strong class="champ">Téléphone:</strong>{{$Sinistres['telephoneC']}}<br>
                <strong class="champ">Email:</strong>{{$Sinistres['emailC']}}<br>
                <strong class="champ">Permis de conduire N°:</strong>{{$Sinistres['num_permisC']}}<br>
                <strong class="champ">Pays:</strong>{{$Sinistres['paysC']}}<br>
                <strong class="champ">Catégorie:</strong>{{$Sinistres['categorieC']}}<br>
                <strong class="champ">Permis valide jusqu'au:</strong>{{$Sinistres['fin_valide_permisC']}}<br>
                <h5>Dégats apparents au véhicule</h5>
                <strong class="champ">Description:</strong>{{$Sinistres['Description']}}<br>
                <strong class="champ">Mes Observations:</strong>{{$Sinistres['Détaille']}}<br>
                <h5>Circonstance</h5>
            <strong class="champ">Circonstance:</strong>{{$Sinistres['Circonstance']}}<br>
                     -->
        </div>
               <div class="col-md-5 col2">

                <h3 class="veh">Véhicule B</h3>

                    <h5>Preneur Assurance/Assuré</h5>
                    <strong class="champ">Nom:</strong>{{$Sinistres['NomASB']}}<br>
                    <strong class="champ"> Prénom:</strong>{{$Sinistres['PrenomASB']}}<br>
                   <strong class="champ"> Adresse:</strong>{{$Sinistres['AdresseASB']}}<br>
                     <strong class="champ">Téléphone:</strong>{{$Sinistres['TéléphoneASSB']}}<br>
                    <strong class="champ"> Code Postal:</strong>{{$Sinistres['Code_PostalASB']}}<br>
                    <strong class="champ">Email:</strong>{{$Sinistres['EmailASB']}}<br>
                    <h5>Véhicule</h5>
                    <strong class="champ">Marque:</strong>{{$Sinistres['MarqueB']}}<br>
                    <strong class="champ">N° Immatriculation:</strong>{{$Sinistres['Numero_immatriculationB']}}<br>
                    <strong class="champ">Pays Immatriculation:</strong>{{$Sinistres['Pays_immatriculationB']}}<br>
                    <h5>Société d'assurance</h5>
                    <strong class="champ">Nom:</strong>{{$Sinistres['NomB']}}<br>
                    <strong class="champ">N° contrat:</strong>{{$Sinistres['num_contratB']}}<br>
                    <strong class="champ">N° carteverte:</strong>{{$Sinistres['num_carte_verteB']}}<br>
                      <strong class="champ">Du:</strong>{{$Sinistres['duB']}}<br>
                      <strong class="champ">Au:</strong>{{$Sinistres['auB']}}<br>
                      <strong class="champ">Agence:</strong>{{$Sinistres['agenceB']}}<br>
                      <strong class="champ">Nom agence:</strong>{{$Sinistres['nom_agenceB']}}<br>
                      <strong class="champ">Adresse:</strong>{{$Sinistres['adresseB']}}<br>
                      <strong class="champ">Pays:</strong>{{$Sinistres['paysB']}}<br>
                      <strong class="champ">Téléphone:</strong>{{$Sinistres['telephoneAB']}}<br>
                      <strong class="champ">Email:</strong>{{$Sinistres['emailB']}}<br>
                      <strong class="champ">Prise en charge ?</strong>{{$Sinistres['prise_enchargeB']}}<br>
                      <h5>Conducteur</h5>
                      <strong class="champ">Nom:</strong>{{$Sinistres['NomCB']}}<br>
                     <strong class="champ">Prénom:</strong>{{$Sinistres['PrenomCB']}}<br>
                     <strong class="champ">Date de naissance:</strong>{{$Sinistres['date_naissanceCB']}}<br>
                     <strong class="champ">Adresse:</strong>{{$Sinistres['AdresseCB']}}<br>
                     <strong class="champ">Téléphone:</strong>{{$Sinistres['telephoneCB']}}<br>
                     <strong class="champ">Email:</strong>{{$Sinistres['emailCB']}}<br>
                     <strong class="champ">Permis de conduire N°:</strong>{{$Sinistres['num_permisCB']}}<br>
                     <strong class="champ">Pays:</strong>{{$Sinistres['paysCB']}}<br>
                     <strong class="champ">Catégorie:</strong>{{$Sinistres['categorieCB']}}<br>
                     <strong class="champ">Permis valide jusqu'au:</strong>{{$Sinistres['fin_valide_permisCB']}}<br>
                     <h5>Dégats apparents au vehicule</h5>
                     <strong class="champ">Description:</strong>{{$Sinistres['DescriptionCB']}}<br>
                 <strong class="champ">Mes observations:</strong>{{$Sinistres['DétailleCB']}}<br>

                 <h5>Circonstance</h5>
                <strong class="champ">Circonstance:</strong>{{$Sinistres['CirconstanceCB']}}<br>
             </div>
	</div>


<div class="TB">
<div class="row"><h3 class="tem">Témoin</h3>


			<div class=" col-md-3">
			<strong class="champ">Nom:</strong>{{$Sinistres['nomT']}}
			</div>
			<div class=" col-md-3">
			<strong class="champ">Prénom:</strong>{{$Sinistres['prenomT']}}
			</div>
			<div class=" col-md-3">
			<strong class="champ">Adresse:</strong>{{$Sinistres['AdresseT']}}
			</div>
			<div class=" col-md-3">
			<strong class="champ">Téléphone:</strong>{{$Sinistres['TelephoneT']}}
			</div>
</div>

<div class="row"><h3 class="tem">Blesse</h3>
		<div class=" col-md-3">
		<strong class="champ">Nom:</strong>{{$Sinistres['nomB']}}
		</div>
		<div class=" col-md-3">
		<strong class="champ">Prénom:</strong>{{$Sinistres['prenomB']}}
		</div>
		<div class=" col-md-3">
		<strong class="champ">Adresse:</strong>{{$Sinistres['AdresseB']}}
		</div>
		<div class=" col-md-3">
		<strong class="champ">Téléphone:</strong>{{$Sinistres['telephoneB']}}
		</div>
		<div class="row">
		<div class=" col-md-3">
		<strong class="champ">Profession</strong>{{$Sinistres['ProfessionB']}}
		</div>
		<div class=" col-md-3">
		<strong class="champ">Situation:</strong>{{$Sinistres['SituationB']}}
		</div>
		<div class=" col-md-3">
		<strong class="champ">Casque/Ceinture:</strong>{{$Sinistres['CasqueB']}}
		</div>
		<div class=" col-md-3">
		<strong class="champ">Hospitalisation:</strong>{{$Sinistres['Centre_HospitalierB']}}
		</div>

</div>

          </div>
</div>
<div class="image">
    @if($Sinistres['CroquisA']==" ")
    <h6> Pas de Croquis</h6>
    @else
    <img   style=" transform:rotate(90deg); margin-top:-1px;margin-bottom:-5px;	width:390px;
	height:200%;
   	margin-left:20px;
	 "
    src="data:image/png;base64,{{ base64_encode(file_get_contents($Sinistres['CroquisA'])) }}"
    alt="">
    @endif
</div>
<div > </div>



</body>
</html>

