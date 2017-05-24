<?php
session_start();

try {
    $bdd = new PDO("mysql:host=localhost;dbname=m2l;charset=utf8", "root", "",
        array(
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8'
        ));
}
catch (Exception $e) {

}


$comment = $_POST['comment'];
$formation = $_POST['formation'];

var_dump($comment, $_SESSION, $formation);

$ins = "INSERT INTO commentaire(id_f, id_s, contenu, date) VALUES ('".$formation."', '".$_SESSION['id_s']."', '".$comment."', NOW())";

$inse = $bdd->prepare($ins);

$inse->execute();