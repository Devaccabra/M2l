<?php

require "../model/connection.php";


    if (isset($_POST['pattern'])) { 


        if($_POST['pattern']!= "") //verification si le pattern est nul
        {
            $requete = $bdd->query("SELECT * FROM formations WHERE nom_f like '%".$_POST['pattern']."%' ORDER BY id_f");

            while($result = $requete->fetch()){
                echo "<li class='resultat form-control'><a href='http://localhost/M2l/formation_detail/".$result['id_f']."'>".$result["nom_f"]."</a></li>";
            }

        }    
    }