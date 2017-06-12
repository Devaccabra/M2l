$(document).ready(function() {
    $(".modif-salarie-button").click(function(){
        $("#alert-success-modif").addClass("hidden");
        $.post("../model/admin_modif_salarie.php",{
            id_salarie : $(this).val(), 
            credit_salarie : $("#nb-credits-salarie"+ $(this).attr('data-id')).val(),
            jour_salarie : $("#nb-jours-salarie"+ $(this).attr('data-id')).val()})
            .done(function(data){
                $("#alert-wait-modif").removeClass("hidden");
                setTimeout(hideLoader,2000);
            });
    });

    $(".modif-formation-button").click(function(){
        $("#alert-success-modif").addClass("hidden");
        $.post("../model/admin_modif_formation.php",{
            id_formation : $(this).val(),
            nom_formation : $("#modif-formation-nom"+ $(this).attr('data-id')).val(),
            description_formation : $("#modif-formation-description"+ $(this).attr('data-id')).val(),
            jour_formation : $("#modif-formation-jour"+ $(this).attr('data-id')).val(),
            prerequis_formation : $("#modif-formation-prerequis"+ $(this).attr('data-id')).val(),
            credits_formation : $("#modif-formation-credits"+ $(this).attr('data-id')).val(),
            date_formation : $("#modif-formation-date"+ $(this).attr('data-id')).val()})
            .done(function(data){
                $("#alert-wait-modif").removeClass("hidden");
                setTimeout(hideLoader,2000);
            });
    });

    $(".modif-presta-button").click(function(){
        $("#alert-success-modif").addClass("hidden");
        $.post("../model/admin_modif_presta.php",{
            id_presta : $(this).val(),
            nom_presta : $("#nom-presta"+ $(this).attr('data-id')).val(),
            ville_presta : $("#ville-presta"+ $(this).attr('data-id')).val(),
            cp_presta : $("#cp-presta"+ $(this).attr('data-id')).val(),
            num_rue_presta : $("#num-rue-presta"+ $(this).attr('data-id')).val(),
            nom_rue_presta : $("#nom-rue-presta"+ $(this).attr('data-id')).val()})
            .done(function(data){
                $("#alert-wait-modif").removeClass("hidden");
                setTimeout(hideLoader,2000);
            });
    });

    $(".modif-chef-button").click(function(){
        $("#alert-success-modif").addClass("hidden");
        $.post("../model/admin_modif_chef.php",{
            id_chef : $(this).val(),
            jour_chef : $("#jour-chef"+ $(this).attr('data-id')).val(),
            credit_chef : $("#credit-chef"+ $(this).attr('data-id')).val()})
            .done(function(data){
                $("#alert-wait-modif").removeClass("hidden");
                setTimeout(hideLoader,2000);
            });
    });
});

function hideLoader() {
    $("#alert-wait-modif").addClass("hidden");
    setTimeout(showSuccess, 0);
}

function showSuccess() {
    $("#alert-success-modif").removeClass("hidden");
    setTimeout(hideSuccessModif, 2000);
}

function hideSuccessModif() {
    $("#alert-success-modif").addClass("hidden");
}


