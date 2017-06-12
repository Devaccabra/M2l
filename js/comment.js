$(document).ready(function() {
    $("#comment-button").click(function(){
        $.post("../model/add-comment.php",{ formation : $("#comment-button").val(), comment : $("#comment-text").val()}).done(function(data){
            $("#comment-loading").removeClass("hidden");

            $("#comment-text").val("");
        });
        $("#comment-loading").addClass("hidden");
    });

    $(".delete-comment").click(function () {
        if (confirm("Voulez-vous supprimer ce commentaire ?")){
            $.post("../model/delete-comment.php", {comment: $(this).val()}).done(function (data) {
                window.location.reload();
            });
        }
    });
});

function getComment(){
    $.post("../model/get-comment.php",{ 
        id_f : $("#comment-text").val(), 
        last_comment : $(".comment-item:last").attr("id")})
        .done(function(data){
            $('#comment-post').append(data);
        });
    
    setTimeout(getComment,2000);
    setTimeout(hideLoader,2000);
}
getComment();

function hideLoader(){
    $("#comment-loading").addClass("hidden");
}