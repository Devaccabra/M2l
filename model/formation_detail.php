<?php

$requete = $bdd->query("SELECT * FROM formations WHERE id_f = ".$_GET['id']." ");
$requete2 = $bdd->query("SELECT credits FROM salaries where id_s = ".$_SESSION['id_s']." ");

$check = $bdd->query("SELECT * FROM historique WHERE id_f= ".$_GET['id']." AND id_s= ".$_SESSION['id_s']." ");
$get_etat = $check->fetch();
