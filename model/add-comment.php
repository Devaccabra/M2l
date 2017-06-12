<?php
session_start();

require "../model/connection.php";

$comment = $_POST['comment'];
$formation = $_POST['formation'];

var_dump($comment, $_SESSION, $formation);

$ins = "INSERT INTO commentaire(id_f, id_s, contenu, date) VALUES ('".$formation."', '".$_SESSION['id_s']."', '".$comment."', NOW())";

$inse = $bdd->prepare($ins);

$inse->execute();