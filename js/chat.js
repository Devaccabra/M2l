/**
 * Created by ElJewbacca on 13/03/2017.
 */
$(document).on('focus', '.panel-footer input.chat_input', function (e) {
    var $this = $(this);
    if ($('#minim_chat_window').hasClass('panel-collapsed')) {
        $this.parents('.panel').find('.panel-body').slideDown();
        $('#minim_chat_window').removeClass('panel-collapsed');
        $('#minim_chat_window').removeClass('glyphicon-plus').addClass('glyphicon-minus');
    }
});
$(document).on('click', '#new_chat', function (e) {
    var size = $( ".chat-window:last-child" ).css("margin-left");
    size_total = parseInt(size) + 400;
    alert(size_total);
    var clone = $( "#chat_window_1" ).clone().appendTo( ".container" );
    clone.css("margin-left", size_total);
});
$('.icon_close').click(function () {
    $( ".chat-window[id~="+ $(this).attr('data-id') + "]").remove();
});

$(document).ready(function() {

    if($(".newChat").on('click', function(){

            $.post(
                'model/create-chat.php', //.php = creve salope tu passes commme un lien normal pour qu'il passe par l'index
                //et vu que c'est de l'ajax tu echo ta réponse et tu die() pour pas envoyer le layout
                {id_d:$(this).attr("data-id")},
                function(data){

                    $('#chat').append(data);
                }
            )
        }));
});

$(document).ready(function() {

    if($(".newChat").on('click', function(){

            $.post(
                'model/recup-message.php', //.php = creve salope tu passes commme un lien normal pour qu'il passe par l'index
                //et vu que c'est de l'ajax tu echo ta réponse et tu die() pour pas envoyer le layout
                {id_d:$(this).attr("data-id")},
                function(data){

                    $('#chat').append(data);
                }
            )
        }));
});

$(document).ready(function() {

    if($("#btn-chat").on('click', function(){
            console.log("jew");
            $.post(
                'model/envoi-message.php',
                {message:$(".message_instant")}
            )
        }));
});