<?php
session_start();

require "../model/connection.php";

        if(isset($_POST['last_message'])) {

            $destinataire = $_POST['id_d'];
            $expediteur = $_SESSION['id_s'];

            $comment = $bdd->query("SELECT * FROM message M, salaries S WHERE id_m > " . $_POST['last_message'] . " AND M.id_e = " . $_SESSION['id_s'] . " AND M.id_d = S.id_s ");

            $requete2 = $bdd->query("SELECT * FROM salaries WHERE id_s = " . $destinataire . " ");
            $infos_destinataire = $requete2->fetch();

            $requete3 = $bdd->query("SELECT * FROM salaries WHERE id_s = " . $expediteur . " ");
            $infos_expediteur = $requete3->fetch();

            while ($get_message = $comment->fetch()) {
                if ($get_message['id_e'] == $expediteur) {
                    echo "<div class=\"row msg_container base_sent message-item\" id='" . $get_message['id_m'] . "'>
                                                <div class=\"col-md-10 col-xs-10\">
                                                    <div class=\"messages msg_sent\">
                                                        <p>" . $get_message['text'] . "</p>
                                                        <time datetime=\"2009-11-13T20:00\">Vous • 51 min</time>
                                                    </div>
                                                </div>
                                                <div class=\"col-md-2 col-xs-2 avatar\">
                                                    <img src=\"images/avatar/" . $infos_expediteur['image'] . "\" class=\" img-responsive \">
                                                </div>
                                            </div>";
                }
                if ($get_message['id_e'] == $destinataire) {
                    echo "<div class=\"row msg_container base_receive message-item\" id='" . $get_message['id_m'] . "'>
                                                <div class=\"col-md-2 col-xs-2 avatar\">
                                                    <img src=\"images/avatar/" . $infos_destinataire['image'] . "\" class=\" img-responsive \">
                                                </div>
                                                <div class=\"col-md-10 col-xs-10\">
                                                    <div class=\"messages msg_receive\">
                                                        <p>" . $get_message['text'] . "</p>
                                                        <time datetime=\"2009-11-13T20:00\">" . (($infos_destinataire['nom']) . " " . ($infos_destinataire['prenom'])) . " • 51 min</time>
                                                    </div>
                                                </div>
                                            </div>";
                }
            }
        }