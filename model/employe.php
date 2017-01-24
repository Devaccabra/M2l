<?php

$requete4 = $bdd->query("SELECT * FROM historique H, salaries S, formations F WHERE H.id_s = S.id_s AND H.id_s = ".$_GET['id']." AND H.id_f = F.id_f AND H.etat = 1 AND F.date_debut > NOW()");


