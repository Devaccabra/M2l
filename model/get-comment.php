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

        if(isset($_POST['last_comment'])) {
            $formationID = $bdd->query("SELECT id_f FROM commentaire C WHERE id_c = " . $_POST['last_comment'] . " ");
            $getFormationID = $formationID->fetch();

            $comment = $bdd->query("SELECT * FROM commentaire C, salaries S WHERE id_c > " . $_POST['last_comment'] . " AND C.id_f = " . $getFormationID['id_f'] . " AND C.id_s = S.id_s ");

            while ($get_comment = $comment->fetch()) {
                echo "
                <div class=\"col-md-offset-3 col-sm-12 comment-item\" style=\"margin-bottom: 25px;\" id='" . $get_comment['id_c'] . "'>

                                    <div class=\"col-sm-1\">
                                        <div class=\"thumbnail\">
                                            <img class=\"img-responsive user-photo\"
                                                 src=\"../images/avatar/" . $get_comment['image'] . "\">
                                        </div>
                                    </div>

                                    <div class=\"col-sm-5\">
                                        <div class=\"panel panel-default\">
                                            <div class=\"panel-heading\">
                                                <strong>" . $get_comment['login'] . "</strong> <span class=\"text-muted\">il y a 5 jours</span>";

                                                if ($get_comment['id_s'] == $_SESSION['id_s']) {

                                                  echo "<button class=\"btn-danger delete-comment\" value='".$get_comment['id_c']."' style=\"float: right;\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i></button>";

                                                }
                                            echo "
                                            </div>
                                            <div class=\"panel-body\">
                                                " . $get_comment['contenu'] . "
                                            </div>
                                        </div>
                                    </div>

                                </div>";
            }
        }