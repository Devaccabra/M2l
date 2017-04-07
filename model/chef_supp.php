<?php

if ($_SESSION['chef'] == 0){
    header("location:formations");
}


$requete2 = $bdd->query("SELECT * FROM salaries WHERE chef=0 AND admin=0 AND equipe = ".$_SESSION['equipe']." ");


        if (isset($_GET['id'])){
            $delete = $bdd->query("DELETE FROM salaries WHERE id_s = ".$_GET['id']." ");
            header("Location:".BASE_URL."/chef_supp");
        }
