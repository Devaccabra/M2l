<?php

try
{
    $bdd = new PDO("mysql:host=localhost;dbname=m2l;charset=utf8","root","",
        array(
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8'
        ));
}
catch (Exception $e)
{
    echo "Erreur de connection";
}

if(isset($_POST['submit']))
{
    $login = $_POST['login'];
    $mdp = ($_POST['password']);

    $requete = $bdd->query("SELECT * FROM salaries 
		                        WHERE password ='".$mdp."' 
								AND login ='".$login."'");
    if($requete->rowCount() == 1 )
    {
        $reponse = $requete->fetch();
        $_SESSION['connecte'] = true;
        $_SESSION['login'] = $login;
        $_SESSION['credits'] = $reponse['credits'];
        $_SESSION['jour'] = $reponse['jour'];
        $_SESSION['id_s'] = $reponse['id_s'];
        header("Location:formations");
        die();
    }

    else alert: "Mauvais identifiants";
}