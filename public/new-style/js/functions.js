/**
 * 
 * Fonction pour gérer les fonctions de basculement. 
 * Exemple (Cacher ou Afficher un element=Balise)
 * 
 * tag_1 = Balise 1 : Premier element à afficher
 * tag_2 = Balise 2 : Second element à afficher
 * tag_3 = Balise 3 : Balise d'action pour switcher. Balise form (input= checkbox)
 * val_compare = Valeur de comparaison exemple : YES/NO
 * 
 */
function switch_tags(tag_1 , tag_2, tag_3, val_compare){

    if ($(tag_3).val() === val_compare) {
        $(tag_1).removeClass('d-none')
        $(tag_2).addClass('d-none')
    }else{
        $(tag_2).removeClass('d-none')
        $(tag_1).addClass('d-none')
    }
}

/**
 * 
 * Fonction pour afficher les message d'alert Activer / Desactiver.
 * response = Reponse de comparaison
 * message_1 = Message à afficher en cas d'égalité
 * message_2 = Message à afficher en cas d'inégalité
 * 
 */
function msg_act_ele(response, message_1 , message_2){
    var time = 3000;
    
    if (response === 'NO') {
        $("#showMsg").append(`
            <div class="alert text-center alert-success alert-dismissible fade show" role="alert">
                <button type="button" class="btn-close" aria-label="Close" data-bs-dismiss="alert"></button>
                ${message_1}.
            </div>
        `)
    }else{
        $("#showMsg").append(`
            <div class="alert text-center alert-warning alert-dismissible fade show" role="alert">
                <button type="button" class="btn-close" aria-label="Close" data-bs-dismiss="alert"></button>
                ${message_2}.
            </div>
        `)
    }

}


/**
 * 
 * Fonction pour afficher les message d'alert 
 * type = Représente le type du message (success - danger - warning - info)
 * message = Représente le message à afficher
 * 
 */
 function message_alert(type,message){

    $("#showMsg").append(`
        <div class="alert text-center alert-${type} alert-dismissible fade show" role="alert">
            <button type="button" class="close" aria-label="Close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>
            ${message}
        </div>
    `)

}


