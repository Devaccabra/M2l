<?php

require "../model/connection.php";

$chefID = $_POST['id_chef'];
$chefJour = $_POST['jour_chef'];
$chefCredit = $_POST['credit_chef'];

$query = $bdd->prepare("UPDATE salaries SET 
            jour = :chefJour, 
            credits = :chefCredit
        WHERE id_s = :chefID ");

$query->bindValue(':chefJour', $chefJour, PDO::PARAM_INT);
$query->bindValue(':chefCredit', $chefCredit, PDO::PARAM_INT);
$query->bindValue(':chefID', $chefID, PDO::PARAM_INT);

$query->execute();