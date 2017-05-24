<link href="<?= baseURL() ?>css/formations.css" rel="stylesheet">

<?php
if (!isset($_SESSION['connecte'])) {
    header("location:accueil");
}
?>

<div class="page-content">
    <div class="row">
        <div class="container">

            <section id="formation">

                <div class="text-center">
                    <?php
                    $get_formation = $requete->fetch();
                    echo "<div class='col-md-4 wow fadeInUp' data-wow-delay='0.9s'>
                                   <div class='wrapper'>
                                         <div class=''>
                                               <h1>" . $get_formation['nom_p'] . "</h1>
                                               <h5>Ville : " . $get_formation['ville'] . "</h5>
                                               <h5>Code Postal : " . $get_formation['cp'] . "</h5>
                                         </div>
                                   </div>
                              </div>";
                    ?>

                    <br><br>

                    <h1>FORMATION</h1>
                    <hr>
                    <br>

                    <?php
                    $get_salaries = $requete2->fetch();
                    echo "<div class='col-md-4 wow fadeInUp' data-wow-delay='0.9s'>
                                    <div class='wrapper'>
                                            <img style='width:800px; height:350px' src='".baseURL()."images/formations/" . $get_formation['image'] . "' class='img-responsive' alt='formation img'>
                                    </div>
                              </div>
                              
                              <div class='col-md-8 wow fadeInUp' data-wow-delay='0.9s'>
                                    <div class='wrapper'>
                                                <div class=''>
                                                    <h1>" . $get_formation['nom_f'] . "</h1>
                                                    <h2>Durée : " . $get_formation['nb_jour'] . " jours</h2>
                                                    <h2>Coût : " . $get_formation['credits_f'] . " crédits</h2>
                                                    <h2>Date de début : " . $get_formation['date_debut'] . "</h2>
                                                    <hr>
                                                    <p style='font-size:14px;'>" . $get_formation['description'] . "</p><hr>";
                    if ($check->rowCount() == 1) {
                        if ($get_etat['etat'] == 1) {
                            echo "<p style='font-size:14px;' class='alert-success'>Formation accepté par l'administrateur</p>";
                        }
                        if ($get_etat['etat'] == 2) {
                            echo "<p style='font-size:14px;' class='alert-danger'>Formation refusé par le chef</p>";
                        } else {
                            echo "<p style='font-size:14px;' class='alert-warning'>En attente de confirmation...</p>";
                        }
                    } else {
                        if ($get_formation['credits_f'] > $_SESSION['credits']) {
                            echo "<p style='font-size:14px;' class='alert-danger'>Crédits insuffisants</p>";
                        } else {
                            if ($get_formation['nb_jour'] > $_SESSION['jour']) {
                                echo "<p style='font-size:14px;' class='alert-danger'>Vous ne disposez pas d'asser de jours</p>";
                            } else {
                                echo "<p style='font-size:14px;'>Crédits après l'achat : " . ($get_salaries['credits'] - $get_formation['credits_f']) . "</p>
                                                                <a href='../add_formation/" . $get_formation['id_f'] . "' class='addFormation btn btn-lg btn-primary'>Suivre cette formation</a>";
                            }
                        }
                    }
                    echo "</div>
                                    </div>
                              </div>";
                    ?>
                </div>
            </section>


            <section id="comment-formation-section">


                <div class="container">
                    <div class="row text-center">
                        <div style="margin: 50px 0;" class="col-sm-12">
                            <hr>
                            <h3>Espace commentaires</h3>
                            <hr>
                        </div>
                        <?php
                        if ($firstComment['COUNT(*)'] == 0) {
                            ?>
                            <h4>Pas encore de commentaire sur cette formation.</h4>
                            <?php
                        }
                        ?>
                    </div>
                    <div class="row">

                        <?php
                        while ($get_comment = $comment->fetch()) {
                            ?>

                            <div class="col-md-offset-3 col-sm-12 comment-item" style="margin-bottom: 25px;"
                                 id="<?= $get_comment['id_c']; ?>">

                                <div class="col-sm-1">
                                    <div class="thumbnail">
                                        <img class="img-responsive user-photo"
                                             src="<?= baseURL() ?>images/avatar/<?= $get_comment['image']; ?>">
                                    </div>
                                </div>

                                <div class="col-sm-5">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <strong><?= $get_comment['login']; ?></strong><span class="text-muted"> il y a 5 jours</span>

                                            <?php
                                            if ($get_comment['id_s'] == $_SESSION['id_s']) {
                                                ?>

                                                <button class="btn-danger delete-comment"
                                                        value="<?= $get_comment['id_c'] ?>" style="float: right;"><i
                                                            class="fa fa-times" aria-hidden="true"></i></button>

                                                <?php
                                            }
                                            ?>

                                        </div>
                                        <div class="panel-body">
                                            <?= $get_comment['contenu']; ?>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <?php
                        }
                        ?>

                        <div id="comment-post">
                            <!-- LES COMMENTAIRES-->
                        </div>

                        <img id="comment-loading" class="center-block hidden" style="width: 200px"
                             src="<?= baseURL() ?>images/loading.gif">

                    </div>

                </div>
            </section>


            <section>
                <link rel="stylesheet" href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css">
                <div class="container">

                    <div class="row">

                        <div class="col-md-6 col-md-offset-3 comment-formation">
                            <div class="widget-area no-padding blank">
                                <div class="status-upload">
                                    <div>
                                        <textarea id="comment-text" style="min-height: 100px; max-height: 100px"
                                                  placeholder="Ecrivez votre commentaire ici !"></textarea>

                                        <button id="comment-button" value="<?= $_GET['id']; ?>" class="btn btn-primary">
                                            <i class="fa fa-share"></i> Partager
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

        </div>
    </div>
</div>