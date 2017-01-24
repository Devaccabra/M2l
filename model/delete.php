<?php
if (isset($_GET['id'])){

    $requete = $bdd->query("SELECT * FROM historique WHERE id_h = ".$_GET['id']." ");
    $salarie = $requete->fetch();

    $requete2 = $bdd->query("SELECT * FROM formations WHERE id_f = ".$salarie['id_f']." ");
    $formation = $requete2->fetch();

    $new_credits = ($_SESSION['credits'] + $formation['credits_f']);
    $new_jour = ($_SESSION['jour'] + $formation['nb_jour']);

    $sql2 = "UPDATE salaries SET credits = ".$new_credits.", jour = ".$new_jour." WHERE id_s=".$salarie['id_s']." ";
    $stmt = $bdd->prepare($sql2);
    $stmt->execute();

    $_SESSION['credits'] = $new_credits;
    $_SESSION['jour'] = $new_jour;

    $sql = "DELETE FROM historique WHERE id_h = ".$_GET['id']." ";
    $exe = $bdd->exec($sql);

    $mail = 'bensousan.william@gmail.com'; // Déclaration de l'adresse de destination.
    if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail)) // On filtre les serveurs qui rencontrent des bogues.
    {
        $passage_ligne = "\r\n";
    }
    else
    {
        $passage_ligne = "\n";
    }

//=====Déclaration des messages au format texte et au format HTML.
        $message_txt = "fiyfiyfiyiyfiyfiyfiyfyi";
        $message_html = "<html><head></head><body>khgjfdutcflutfu</body></html>";
//==========

//=====Création de la boundary
        $boundary = "-----=" . md5(rand());
//==========

//=====Définition du sujet.
        $sujet = "test ultime";
//=========

//=====Création du header de l'e-mail.
        $header = "From: Moi " . $passage_ligne;
        $header .= "Reply-to: moi" . $passage_ligne;
        $header .= "MIME-Version: 1.0" . $passage_ligne;
        $header .= "Content-Type: multipart/alternative;" . $passage_ligne . " boundary=\"$boundary\"" . $passage_ligne;
//==========

//=====Création du message.
        $message = $passage_ligne . "--" . $boundary . $passage_ligne;
//=====Ajout du message au format texte.
        $message .= "Content-Type: text/plain; charset=\"ISO-8859-1\"" . $passage_ligne;
        $message .= "Content-Transfer-Encoding: 8bit" . $passage_ligne;
        $message .= $passage_ligne . $message_txt . $passage_ligne;
//==========
        $message .= $passage_ligne . "--" . $boundary . $passage_ligne;
//=====Ajout du message au format HTML
        $message .= "Content-Type: text/html; charset=\"ISO-8859-1\"" . $passage_ligne;
        $message .= "Content-Transfer-Encoding: 8bit" . $passage_ligne;
        $message .= $passage_ligne . $message_html . $passage_ligne;
//==========
        $message .= $passage_ligne . "--" . $boundary . "--" . $passage_ligne;
        $message .= $passage_ligne . "--" . $boundary . "--" . $passage_ligne;
//==========

//=====Envoi de l'e-mail.
        mail($mail, $sujet, $message, $header);
//==========
    }
    header("location:http://localhost/M2l/profile");
