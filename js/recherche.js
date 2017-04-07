$(document).ready(function () {
    
    $(".barre-chercher").keyup(function(){

        $.post(
            'http://localhost/M2l/controller/recherche.php',
            {
                pattern : $(".barre-chercher").val()
            },

            function(data){
                $(".resultat-recherche").html(data);
            },


            'text'
        );

    })})
