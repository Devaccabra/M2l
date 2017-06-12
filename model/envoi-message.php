<?php
session_start();
require "../model/connection.php";

$message = $_POST['message'];
$destinataireID = $_POST['idDestinataire'];
$expediteurID = (int) $_SESSION['id_s'];

var_dump($_POST, $expediteurID);

$query = $bdd->prepare("INSERT INTO message (id_e, id_d, text, date, time) VALUES (:expediteurID,:destinataireID,:message,NOW(),NOW())");

$query->bindValue(':message', $message, PDO::PARAM_STR);
$query->bindValue(':destinataireID', $destinataireID, PDO::PARAM_INT);
$query->bindValue(':expediteurID', $expediteurID, PDO::PARAM_INT);

$query->execute();