<?php
session_start();


try {
    $bdd = new PDO("mysql:host=localhost;dbname=M2l;charset=utf8", "root", "",
        array(
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8'
        ));
}
catch (Exception $e) {

}

    $new_login = $_POST['login'];
    $new_last_name = $_POST['last_name'];
    $new_first_name = $_POST['first_name'];
    $new_mail = $_POST['email'];

    $ins = "UPDATE salaries SET email='".$new_mail."', login='".$new_login."', nom='".$new_last_name."', prenom='".$new_first_name."' WHERE id_s='".$_SESSION['id_s']."' ";

    $inse = $bdd->prepare($ins);

    $inse->execute();

    $_SESSION['email'] = $new_mail;
    $_SESSION['prenom'] = $new_first_name;
    $_SESSION['nom'] = $new_last_name;
    $_SESSION['login'] = $new_login;
