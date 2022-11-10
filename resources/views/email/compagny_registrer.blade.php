<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

    <figure style="text-align: center;">
        <img src="{!!asset('new-style/images/logo.png')!!}" width="200" height="200" alt="Logo de CASE & CO" />
        <figcaption style="font-size : 1rem ; font-weight: 600; text-align: center;"> CASE & CO </figcaption>
    </figure>

    <div class="infos">
         <p style="font-size: 1rem; margin-top: 1rem; text-align: justify;">
            Bonjour/Bonsoir chère compagnie <strong>{{ $details['name'] }}</strong>.
            Ce mail vous êtes addressé parce que vous disposez désormain d'un compte 
            sur notre plateforme <a href="https://dibasinistre.grpcaseco.com">dibasinistre.grpcaseco.com</a> 
        </p>
        <p>Vos identifiants de connexion sont : </p>

        <div class="infos_item">
            <p style="font-size: 1rem; margin-top: 1rem;">
                <strong> E-mail </strong> : {{$details['email']}}
            </p>

            <p style="font-size: 1rem; margin-top: 1rem;">
                <strong> Password </strong> : 12345678
            </p>
        </div>

        <p style="color: rgb(185, 0, 0); font-weight: 700; text-align: justify;"> 
            NB : Veuillez modifier votre mot de passe dès votre première connexion. 
            Sinon votre compte sera vulnérable
        </p>
    </div>

    <footer style="text-align: center; font-size: 0.9rem; margin-top: 3rem;">
        <p style="text-align: center; font-size: 0.9rem;">
            <span style="font-weight: 800; font-size : 1rem"> © {{$details['year']}} CASE & CO - </span> <a href="https://grpcaseco.com">grpcaseco.com</a> , Tous droits réservés
        </p>

        <p style="text-align: center; margin-top:-1.5rem;">
            <span style="font-weight: 800; font-size : 1rem">CASE & CO.</span> 
        </p>
    </footer>
</body>
</html>