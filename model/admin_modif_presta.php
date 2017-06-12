<?php

require "../model/connection.php";

$prestaID = $_POST['id_presta'];
$prestaName = $_POST['nom_presta'];
$prestaVille = $_POST['ville_presta'];
$prestaCp = $_POST['cp_presta'];
$prestaNumRue = $_POST['num_rue_presta'];
$prestaNomRue = $_POST['nom_rue_presta'];

var_dump($_POST);

$query = $bdd->prepare("UPDATE prestataires SET 
            nom_p = :prestaName, 
            ville = :prestaVille, 
            cp = :prestaCp, 
            num_rue = :prestaNumRue, 
            nom_rue = :prestaNomRue
        WHERE id_p = :prestaID ");

$query->bindValue(':prestaName', $prestaName, PDO::PARAM_STR);
$query->bindValue(':prestaVille', $prestaVille, PDO::PARAM_STR);
$query->bindValue(':prestaCp', $prestaCp, PDO::PARAM_INT);
$query->bindValue(':prestaNumRue', $prestaNumRue, PDO::PARAM_INT);
$query->bindValue(':prestaNomRue', $prestaNomRue, PDO::PARAM_STR);
$query->bindValue(':prestaID', $prestaID, PDO::PARAM_INT);

$query->execute();