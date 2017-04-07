<?php

if ($_SESSION['admin'] == 0){
    header("location:formations");
}

$requete = $bdd->query("SELECT * FROM formations");

$requete2 = $bdd->query("SELECT * FROM salaries WHERE chef=0 AND admin=0");

$requete3 = $bdd->query("SELECT * FROM salaries WHERE chef=1 AND admin=0");

$requete4 = $bdd->query("SELECT * FROM prestataires");
