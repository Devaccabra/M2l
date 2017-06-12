<?php

require "../model/connection.php";

$new_credit_salarie = $_POST['credit_salarie'];
$new_jour_salarie = $_POST['jour_salarie'];
$id_salarie = $_POST['id_salarie'];

$query = $bdd->prepare("UPDATE salaries SET jour= :new_jour_salarie, credits= :new_credit_salarie WHERE id_s= :id_salarie ");

$query->bindValue(':new_credit_salarie', $new_credit_salarie, PDO::PARAM_INT);
$query->bindValue(':new_jour_salarie', $new_jour_salarie, PDO::PARAM_INT);
$query->bindValue(':id_salarie', $id_salarie, PDO::PARAM_INT);

$query->execute();