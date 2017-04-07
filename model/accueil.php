<?php

if (isset($_SESSION['connecte'])){
    header("Location:formations");
}

if(isset($_POST['login-submit']))
{
    $login = $_POST['login'];
    $mdp = $_POST['password'];

    $requete = $bdd->query("SELECT * FROM salaries 
		                        WHERE password ='".$mdp."' 
								AND login ='".$login."'");
    if($requete->rowCount() == 1 )
    {
        $reponse = $requete->fetch();
        $_SESSION['connecte'] = true;

        $sql = "UPDATE salaries SET enLigne=1 WHERE id_s=".$reponse['id_s']." ";
        $bdd->query($sql);

        $_SESSION['login'] = $login;
        $_SESSION['credits'] = $reponse['credits'];
        $_SESSION['jour'] = $reponse['jour'];
        $_SESSION['id_s'] = $reponse['id_s'];
        $_SESSION['chef'] = $reponse['chef'];
        $_SESSION['admin'] = $reponse['admin'];
        $_SESSION['equipe'] = $reponse['equipe'];
        $_SESSION['nom'] = $reponse['nom'];
        $_SESSION['prenom'] = $reponse['prenom'];
        $_SESSION['date'] = $reponse['inscription_d'];
        $_SESSION['email'] = $reponse['email'];
        header("Location:formations");
        die();
    }

    else alert: "Mauvais identifiants";
}
if (isset($_POST['mdp-submit'])) {

    $email = $_POST['email'];
    $mdp = "chevre";

    $to      = $email;
    $subject = 'le sujet';
    $message = 'Bonjour !';
    $headers = 'From: webmaster@example.com' . "\r\n" .
        'Reply-To: webmaster@example.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);

    header("location:accueil");
}