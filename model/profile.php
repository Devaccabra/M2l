<?php

require "class/chat.php";

$requete = $bdd->query("
  SELECT * FROM historique H, salaries S, formations F 
    WHERE H.id_s = S.id_s 
    AND H.id_f = F.id_f 
    AND H.etat = 0 
    AND S.id_s = '".$_SESSION['id_s']."'
    ");

$requete2 = $bdd->query("
  SELECT * FROM historique H, salaries S, formations F 
    WHERE H.id_s = S.id_s 
    AND H.id_f = F.id_f 
    AND H.etat = 1 
    AND S.id_s = '".$_SESSION['id_s']."' 
    AND F.date_debut >= NOW() 
    ");

$requete3 = $bdd->query("
  SELECT * FROM historique H, salaries S, formations F 
    WHERE H.id_s = S.id_s 
    AND H.id_f = F.id_f 
    AND H.etat = 1 
    AND F.date_debut < NOW() 
    AND S.id_s = '".$_SESSION['id_s']."'
    ");

$requete4 = $bdd->query("
  SELECT * FROM historique H, salaries S, formations F 
    WHERE H.id_s = S.id_s 
    AND H.id_f = F.id_f 
    AND H.etat = 0 
    AND equipe='".$_SESSION['equipe']."' 
  ");

$requete5 = $bdd->query("
  SELECT * FROM historique H, salaries S, formations F 
      WHERE H.id_s = S.id_s 
      AND H.id_f = F.id_f 
      AND S.equipe = ".$_SESSION['equipe']." 
      AND H.etat = 1 
      AND F.date_debut >= NOW() 
      AND S.id_s != ".$_SESSION['id_s']." "
);

$getFormationsRefuse = $bdd->query("
  SELECT * FROM historique H, salaries S, formations F 
    WHERE H.id_s = S.id_s 
    AND H.id_f = F.id_f 
    AND H.etat = 2 
    AND S.id_s = '".$_SESSION['id_s']."'
    ");

$team = $bdd->query("
  SELECT * FROM salaries 
    WHERE equipe = ".$_SESSION['equipe']." 
    AND id_s != ".$_SESSION['id_s']." 
    ");

$requete6 = $bdd->query("
  SELECT count(id_f) 
    FROM historique 
    WHERE id_s = ".$_SESSION['id_s']." 
    ");
$formationsEnCours = $requete6->fetch();

$requete7 = $bdd->query("
  SELECT * FROM salaries 
    WHERE id_s = '".$_SESSION['id_s']."'
    ");
$myProfile = $requete7->fetch();