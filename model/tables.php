<?php

try
{
    $bdd = new PDO("mysql:host=localhost;dbname=m2l;charset=utf8","root","");
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
}