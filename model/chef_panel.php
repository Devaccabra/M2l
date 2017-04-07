<?php

$requete2 = $bdd->query("SELECT count(id_s) FROM salaries WHERE chef=0 AND admin=0 AND equipe = ".$_SESSION['equipe']." ");
$salarie = $requete2->fetch();

if ($_SESSION['chef'] == 0){
    header("location:formations");
}