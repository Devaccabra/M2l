/**
 * Created by ElJewbacca on 13/03/2017.
 */
$(document).ready(function() {

    // Each time the user scrolls
    if($("#Monbouton").on('click', function(){
            // End of the document reached?
            $('#loading').show();

            $.post(
                'model/more-formations.php',
                {id:$(".item:last").attr("id")},
                function(data){

                    $('#posts').append(data);
                }
            )

        }));
});