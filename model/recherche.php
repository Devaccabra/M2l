<?php

    try
    {
        $bdd = new PDO("mysql:host=localhost;dbname=m2l;charset=utf8","root","",
            array(
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8'
            ));
    }
    catch (Exception $e)
    {
        echo "Erreur de connection";
    }


    if (isset($_POST['pattern'])) { 


        if($_POST['pattern']!= "") //verification si le pattern est nul
        {
            $requete = $bdd->query("SELECT * FROM formations WHERE nom_f like '%".$_POST['pattern']."%' ORDER BY id_f");

            while($result = $requete->fetch()){
                echo "<li class='resultat form-control'><a href='http://localhost/M2l/formation_detail/".$result['id_f']."'>".$result["nom_f"]."</a></li>";
            }

        }    
    }