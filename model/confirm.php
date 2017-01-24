<?php

if (isset($_GET['id'])){
    $sql = "UPDATE historique SET etat=1 WHERE id_h=".$_GET['id']." ";
    $stmt = $bdd->prepare($sql);
    $stmt->execute();
    header("location:http://localhost/M2l/profile");
}
