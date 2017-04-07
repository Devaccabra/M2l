<?php

if ($_SESSION['admin'] == 0){
    header("location:formations");
}

$requete = $bdd->query("SELECT * FROM formations");

$requete2 = $bdd->query("SELECT * FROM salaries WHERE chef=0 AND admin=0");

$requete3 = $bdd->query("SELECT * FROM salaries WHERE chef=1 AND admin=0");

$requete4 = $bdd->query("SELECT * FROM prestataires");

    if (isset($_GET['idbis'])){
        if ($_GET['id'] == 1){
            $delete = $bdd->query("DELETE FROM formations WHERE id_f = ".$_GET['idbis']." ");
            header("Location:http://localhost/M2l/admin_supp/1");
        }
        if ($_GET['id'] == 2){
            $delete = $bdd->query("DELETE FROM salaries WHERE id_s = ".$_GET['idbis']." ");
            header("Location:http://localhost/M2l/admin_supp/2");
        }
        if ($_GET['id'] == 3){
            $delete = $bdd->query("DELETE FROM salaries WHERE id_s = ".$_GET['idbis']." ");
            header("Location:http://localhost/M2l/admin_supp/3");
        }
        if ($_GET['id'] == 4){
            $delete = $bdd->query("DELETE FROM prestataires WHERE id_p = ".$_GET['idbis']." ");
            header("Location:http://localhost/M2l/admin_supp/4");
        }
    }
