<?php
session_start();

try {
    $bdd = new PDO("mysql:host=localhost;dbname=m2l;charset=utf8", "root", "",
        array(
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8'
        ));
}
catch (Exception $e) {
    echo "Erreur de connection";
}

if (isset($_POST['id_d'])) {
    $destinataire = $_POST['id_d'];
    $expediteur = $_SESSION['id_s'];

    $requete = $bdd->query("SELECT * FROM message WHERE id_d = " . $destinataire . " AND id_e = " . $expediteur . " OR id_e = " . $destinataire . " AND id_d = " . $expediteur . " ");

    $requete2 = $bdd->query("SELECT * FROM salaries WHERE id_s = " . $destinataire . " ");
    $infos_destinataire = $requete2->fetch();

    $requete3 = $bdd->query("SELECT * FROM salaries WHERE id_s = " . $expediteur . " ");
    $infos_expediteur = $requete3->fetch();


    echo "<script src=\"http://localhost/M2l/js/chat.js\"></script>

                        <div class='container pull-left'>
                            <div class='row chat-window col-xs-5 col-md-3' id='chat_window_".$infos_destinataire['id_s']."' style='margin-left:10px;'>
                                <div class='col-xs-12 col-md-12'>
                                    <div class='panel panel-default'>
                                        <div class='panel-heading top-bar'>
                                            <div class='col-md-8 col-xs-8'>
                                                <h3 class='panel-title'><span class='glyphicon glyphicon-comment'></span> Chat - " . $infos_destinataire['login'] . "</h3>
                                            </div>
                                            <div class=\"col-md-4 col-xs-4\" style=\"text-align: right;\">
                                                <a href=\"#\"><span id=\"minim_chat_window\" class=\"glyphicon glyphicon-minus icon_minim\"></span></a>
                                                <a href=\"#\"><span class=\"glyphicon glyphicon-remove icon_close\" data-id=\"chat_window_".$infos_destinataire['id_s']."\"></span></a>
                                            </div>
                                        </div>
                                        <div class=\"panel-body msg_container_base\">
                                        "; while ($conversation = $requete->fetch()) {
                                            if ($conversation['id_e'] == $expediteur) {
                                      echo "<div class=\"row msg_container base_sent\">
                                                <div class=\"col-md-10 col-xs-10\">
                                                    <div class=\"messages msg_sent\">
                                                        <p>".$conversation['text']."</p>
                                                        <time datetime=\"2009-11-13T20:00\">Vous • 51 min</time>
                                                    </div>
                                                </div>
                                                <div class=\"col-md-2 col-xs-2 avatar\">
                                                    <img src=\"images/avatar/".$infos_expediteur['image']."\" class=\" img-responsive \">
                                                </div>
                                            </div>";
                                            }
                                            if ($conversation['id_e'] == $destinataire) {
                                     echo "<div class=\"row msg_container base_receive\">
                                                <div class=\"col-md-2 col-xs-2 avatar\">
                                                    <img src=\"images/avatar/".$infos_destinataire['image']."\" class=\" img-responsive \">
                                                </div>
                                                <div class=\"col-md-10 col-xs-10\">
                                                    <div class=\"messages msg_receive\">
                                                        <p>".$conversation['text']."</p>
                                                        <time datetime=\"2009-11-13T20:00\">" . (($infos_destinataire['nom']) . " " . ($infos_destinataire['prenom'])) . " • 51 min</time>
                                                    </div>
                                                </div>
                                            </div>";
                                            }
                                      }
                                echo "</div>";
                                echo "<div class=\"panel-footer\">
                                            <div class=\"input-group\">
                                                <input id=\"btn-input\" type=\"text\" class=\"form-control input-sm chat_input message_instant\" placeholder=\"Write your message here...\" />
                                                <span class=\"input-group-btn\">
                                                <button class=\"btn btn-primary btn-sm\" id=\"btn-chat\">Send</button>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>";
    }

