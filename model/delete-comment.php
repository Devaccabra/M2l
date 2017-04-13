<?php
session_start();

try {
    $bdd = new PDO("mysql:host=localhost;dbname=m2l;charset=utf8", "root", "",
        array(
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8'
        ));
}
catch (Exception $e) {
    echo "Erreur de connection";
}

$commentID = $_POST['comment'];

$delete = $bdd->query("DELETE FROM commentaire WHERE id_c = ".$commentID." ");