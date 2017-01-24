$(document).ready(function () {
    
    $(".barre-chercher").keyup(function(){

        $.post(
            'controller/recherche.php',
            {
                pattern : $(".barre-chercher").val()
            },

            function(data){
                $(".resultat-recherche").html(data);
            },


            'text'
        );

    })})
