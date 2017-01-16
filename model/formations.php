<?php

try
{
    $bdd = new PDO("mysql:host=localhost;dbname=m2l;charset=utf8","root","");
}
catch (Exception $e)
{
    echo "Erreur de connection";
}



    $requete = $bdd->query("SELECT * FROM formations");