<?php

require "../model/connection.php";

$formationID = $_POST['id_formation'];
$formationName = $_POST['nom_formation'];
$formationDescription = $_POST['description_formation'];
$formationJour = $_POST['jour_formation'];
$formationPrerequis = $_POST['prerequis_formation'];
$formationCredits = $_POST['credits_formation'];
$formationDate = $_POST['date_formation'];

var_dump($_POST);

$query = $bdd->prepare("UPDATE formations SET 
            nom_f = :formationName, 
            description = :formationDescription, 
            prerequis = :formationPrerequis, 
            nb_jour = :formationJour, 
            credits_f = :formationCredits, 
            date_debut = :formationDate 
        WHERE id_f = :formationID ");

$query->bindValue(':formationName', $formationName, PDO::PARAM_STR);
$query->bindValue(':formationDescription', $formationDescription, PDO::PARAM_STR);
$query->bindValue(':formationPrerequis', $formationPrerequis, PDO::PARAM_STR);
$query->bindValue(':formationJour', $formationJour, PDO::PARAM_INT);
$query->bindValue(':formationCredits', $formationCredits, PDO::PARAM_INT);
$query->bindValue(':formationDate', $formationDate, PDO::PARAM_STR);
$query->bindValue(':formationID', $formationID, PDO::PARAM_INT);

$query->execute();