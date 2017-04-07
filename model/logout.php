<?php

    $sql = "UPDATE salaries SET enLigne=0 WHERE id_s=".$_SESSION['id_s']." ";
    $bdd->query($sql);

	session_destroy();
    header("location:accueil")
?>