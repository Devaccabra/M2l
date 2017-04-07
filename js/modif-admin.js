$(document).ready(function() {
    $(".modif-salarie-button").click(function(){
        $.post("../model/admin_modif_salarie.php",{id_salarie : $(this).val(), credit_salarie : $("#nb-credits-salarie").val(), jour_salarie : $("#nb-jours-salarie").val()}).done(function(data){

        });
    });
});

