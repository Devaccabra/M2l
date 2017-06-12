<?php
session_start();

require "../model/connection.php";

$commentID = $_POST['comment'];

$delete = $bdd->query("DELETE FROM commentaire WHERE id_c = ".$commentID." ");