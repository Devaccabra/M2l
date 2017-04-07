<?php

if (!$_SESSION['chef']){
    header("location:formations");
}

$requete = $bdd->query("SELECT * FROM salaries WHERE chef=1");

$chaine="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
$nb = 1;
$choix = 2;
$mdp="";
$tab_mdp = array();
$mdp_rand = array();

for($j = 0; $j < $nb; $j++)
{
    $mdp="";

    for($i = 0; $i < $choix; $i++)
    {
        $mdp .= $chaine[rand(0,25)];
    }
    for($i = 0; $i < $choix; $i++)
    {
        $mdp .= $chaine[rand(26,51)];
    }
    for($i = 0; $i < $choix; $i++)
    {
        $mdp .= $chaine[rand(52,61)];
    }
    $mdp = str_shuffle($mdp);
    $tab_mdp = $mdp;
    $mdp_rand = sha1($mdp);
}

if (isset($_POST['submit_salarie'])){
    
    $nom = ucfirst($_POST['nom']);
    $prenom = ucfirst($_POST['prenom']);
    $login = $_POST['login'];
    $mdp = $_POST['mdp'];
    $jour = intval($_POST['jour']);
    $credit = intval($_POST['credit']);

    $ins = "INSERT INTO salaries (image, login, password, email, nom, prenom, jour, credits, equipe, inscription_d, inscription_h) VALUES ('default-avatar.png', '$login', '$mdp', 'email-temporaire@exemple.com', '$nom', '$prenom', '$jour', '$credit', '".$_SESSION['equipe']."', NOW(), NOW())";

    $inse = $bdd->prepare($ins);

    $insert = $inse->execute();

}