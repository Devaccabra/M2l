-<?php

if(isset($_GET['id'])){

    $check = $bdd->query("SELECT * FROM historique WHERE id_f= ".$_GET['id']." AND id_s= ".$_SESSION['id_s']." ");

    if($check->rowCount() == 1 )
    {
        $message = "Vous êtes déjà inscris à cette formation";
    }
    else
    {

            $requete = $bdd->query("SELECT * FROM formations WHERE id_f= ".$_GET['id']." ");
            $requete2 = $bdd->query("SELECT * FROM salaries WHERE id_s=".$_SESSION['id_s']." ");
            $get_formation = $requete->fetch();
            $get_salaries = $requete2->fetch();

            if($_SESSION['credits'] < $get_formation['credits'])
            {
                $message = "Crédits insuffisant";
            }
            else
            {
                if ($_SESSION['jour'] < $get_formation['nb_jour'])
                {
                    $message = "Vous ne disposez pas d'un nombre de jours suffisant";
                }
                else
                {
                    $new_credits = $get_salaries['credits'] - $get_formation['credits_f'];
                    $new_jour = $get_salaries['jour'] - $get_formation['nb_jour'];

                    $_SESSION['credits'] = $new_credits;
                    $_SESSION['jour'] = $new_jour;

                    $sql = "UPDATE salaries SET credits= ".$new_credits.", jour= ".$new_jour." WHERE id_s= ".$_SESSION['id_s']." ";
    
                    $stmt = $bdd->prepare($sql);
    
                    $update = $stmt->execute();
    
                    if ($_SESSION['chef'] == 1)
                    {
                        $ins = "INSERT INTO historique (id_s, id_f, date_achat, heure_achat, etat) VALUES (" . $_SESSION['id_s'] . ", " . $_GET['id'] . ", NOW(), NOW(), 1)";
                    }
                    if ($_SESSION['chef'] == 0)
                    {
                        $ins = "INSERT INTO historique (id_s, id_f, date_achat, heure_achat, etat) VALUES (" . $_SESSION['id_s'] . ", " . $_GET['id'] . ", NOW(), NOW(), 0)";
                    }

                    $inse = $bdd->prepare($ins);

                    $insert = $inse->execute();
                    
                    $message = "Transaction effectué avec succès";
                }
            }
        }
}