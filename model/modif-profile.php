<?php
session_start();


require "../model/connection.php";

    $new_login = $_POST['login'];
    $new_last_name = $_POST['last_name'];
    $new_first_name = $_POST['first_name'];
    $new_mail = $_POST['email'];
    $new_mdp = $_POST['mdp'];
    $new_mdp_verif = $_POST['mdp_verif'];

    var_dump($new_mdp, $new_mdp_verif);

    if(!$new_mdp || !$new_mdp_verif){
        $ins = "UPDATE salaries SET email='".$new_mail."', login='".$new_login."', nom='".$new_last_name."', prenom='".$new_first_name."' WHERE id_s='".$_SESSION['id_s']."' ";

        $inse = $bdd->prepare($ins);

        $inse->execute();
    }else if ($new_mdp == $new_mdp_verif){

        $mdp_secure = sha1($new_mdp);

        $ins = "UPDATE salaries SET email='".$new_mail."', login='".$new_login."', nom='".$new_last_name."', prenom='".$new_first_name."', password='".$mdp_secure."' WHERE id_s='".$_SESSION['id_s']."' ";

        $inse = $bdd->prepare($ins);

        $inse->execute();
    }else{
        http_response_code(422);
    }


    $_SESSION['email'] = $new_mail;
    $_SESSION['prenom'] = $new_first_name;
    $_SESSION['nom'] = $new_last_name;
    $_SESSION['login'] = $new_login;
