(function ($) {

    $('.addFormation').click(function(event){
        event.preventDefault();

        $.get($(this).attr('href'),{ },function(data) {
            if(data.error){
                alert(data.message);
            }
            else{
                if(confirm('Le produit a été ajouté à votre panier' + '. Voulez vous consulter vos formation ?')){
                    location.href = '../profile';
                }else{
                    location.reload()
                }
            }
        });
        return false;
    });

})(jQuery);