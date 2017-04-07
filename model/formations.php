<?php

$requete = $bdd->query("SELECT * FROM formations LIMIT 0,8");

$getAllFormations = $bdd->query("SELECT COUNT(*) FROM formations");
$allFormations = $getAllFormations->fetch();

$requete2 = $bdd->query("SELECT MAX(id_f) FROM formations");
$maxFormation = $requete2->fetch();