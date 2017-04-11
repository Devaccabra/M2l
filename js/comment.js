$(document).ready(function() {
    $("#comment-button").click(function(){
        $.post("../model/add-comment.php",{ formation : $("#comment-button").val(), comment : $("#comment-text").val()}).done(function(data){
            $("#comment-text").val("");

        });
    });
});

function getComment(){
    $.post("../model/get-comment.php",{ id_f : $("#comment-text").val(), last_comment : $(".comment-item:last").attr("id")}).done(function(data){
        $('#comment-post').append(data);
    });
    setTimeout(getComment,2000); /* rappel après 2 secondes = 2000 millisecondes */
}
getComment();