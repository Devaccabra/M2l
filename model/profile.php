<?php

$requete = $bdd->query("SELECT * FROM historique H, salaries S, formations F WHERE H.id_s = S.id_s AND H.id_f = F.id_f AND H.etat = 0 AND S.id_s = '".$_SESSION['id_s']."'");
$requete2 = $bdd->query("SELECT * FROM historique H, salaries S, formations F WHERE H.id_s = S.id_s AND H.id_f = F.id_f AND H.etat = 1 AND S.id_s = '".$_SESSION['id_s']."' AND F.date_debut >= NOW() ");
$requete3 = $bdd->query("SELECT * FROM historique H, salaries S, formations F WHERE H.id_s = S.id_s AND H.id_f = F.id_f AND F.date_debut < NOW() AND S.id_s = '".$_SESSION['id_s']."'");

$requete4 = $bdd->query("SELECT * FROM historique H, salaries S, formations F WHERE H.id_s = S.id_s AND H.id_f = F.id_f AND H.etat = 0");

$requete5 = $bdd->query("SELECT * FROM historique H, salaries S, formations F WHERE H.id_s = S.id_s AND H.id_f = F.id_f AND S.equipe = ".$_SESSION['equipe']." AND H.etat = 1 AND F.date_debut >= NOW() ");



