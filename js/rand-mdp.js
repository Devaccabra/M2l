/**
 * Created by ElJewbacca on 13/03/2017.
 */
$(document).ready(function() {

    // Each time the user scrolls
    if($("#random_mdp").on('click', function(){
            alert("jew");
            $.post(
                'model/rand-mdp.php',
                function(data){
                    $('#mot-de-passe').append(data);
                }
            )

        }));
});