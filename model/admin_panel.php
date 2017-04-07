<?php

$requete = $bdd->query("SELECT count(id_f) FROM formations");
$formation = $requete->fetch();

$requete2 = $bdd->query("SELECT count(id_s) FROM salaries WHERE chef=0 AND admin=0");
$salarie = $requete2->fetch();

$requete3 = $bdd->query("SELECT count(id_s) FROM salaries WHERE chef=1 AND admin=0");
$chef = $requete3->fetch();

$requete4 = $bdd->query("SELECT count(id_p) FROM prestataires");
$prestataire = $requete4->fetch();

if ($_SESSION['admin'] == 0){
    header("location:formations");
}