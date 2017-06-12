<?php
session_start();

require "../model/connection.php";

if (isset($_POST['id'])) {

    $requete = $bdd->query("SELECT * FROM message WHERE id_d = " . $destinataire . " AND id_e = " . $expediteur . " OR id_e = " . $destinataire . " AND id_d = " . $expediteur . " ");

    $requete2 = $bdd->query("SELECT * FROM salaries WHERE id_s = " . $destinataire . " ");
    $infos_destinataire = $requete2->fetch();

    $requete3 = $bdd->query("SELECT * FROM salaries WHERE id_s = " . $expediteur . " ");
    $infos_expediteur = $requete3->fetch();
    
}