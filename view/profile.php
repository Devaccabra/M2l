<link rel="stylesheet" type="text/css" href="<?=BASE_URL?>/css/profile.css">

            <div>
                <div class="card hovercard">
                    <div class="card-background">
                        <img class="card-bkimg" alt="" src="<?=BASE_URL?>/images/avatar/<?= $myProfile['image']; ?>">
                        <!-- http://lorempixel.com/850/280/people/9/ -->
                    </div>
                    <div class="useravatar">
                        <form action="#" method="post" enctype="multipart/form-data">

                            <div class="image-upload">
                                <a class="circle-avatar" href="#">
                                    <label for="sortpicture">
                                        <img src="<?=BASE_URL?>/images/avatar/<?= $myProfile['image']; ?>"/>
                                    </label>
                                </a>
                                <input type="hidden" name="MAX_FILE_SIZE" value="1000000">
                                <input id="sortpicture" type="file" name="sortpic" style="display: none;"/>
                            </div>
                        </form>
                    </div>
                    <div class="card-info"> <span class="card-title"><?= $_SESSION['login']; ?></span>

                    </div>
                </div>
                <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
                    <div class="btn-group" role="group">
                        <button type="button" id="stars" class="btn btn-primary" href="#tab1" data-toggle="tab"><span class="fa fa-address-card-o" aria-hidden="true"></span>
                            <div class="hidden-xs">Informations</div>
                        </button>
                    </div>
                    <div class="btn-group" role="group">
                        <button type="button" id="favorites" class="btn btn-default" href="#tab2" data-toggle="tab"><span class="fa fa-users" aria-hidden="true"></span>
                            <div class="hidden-xs">Votre équipe</div>
                        </button>
                    </div>
                </div>

                <div class="well">
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="tab1">
                            <div class="panel panel-info">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-3 col-lg-2" align="center">
                                            <label for="sortpicture">
                                                <img style="height: 200px; width: 200px;" alt="User Pic" src="<?=BASE_URL?>/images/avatar/<?= $myProfile['image']; ?>" class="profile-avatar img-circle img-responsive">
                                            </label>
                                        </div>

                                        <div class="col-md-9 col-lg-9">
                                                <table class="table table-user-information">
                                                    <tbody>
                                                        <tr>
                                                            <tr>
                                                                <td>Prénom / Nom</td>
                                                                <td><input id="first-name-change" name="first-name" value="<?= $_SESSION['prenom'] ?>"> <input id="last-name-change" name="last-name" value="<?= $_SESSION['nom'] ?>"></td>
                                                            </tr>

                                                            <tr>
                                                                <td>Email</td>
                                                                <td><input id="email-change" name="email" value="<?= $_SESSION['email']; ?>"></td>
                                                            </tr>

                                                            <tr>
                                                                <td>Login</td>
                                                                <td><input id="login-change" name="login" value="<?= $_SESSION['login']; ?>"></td>
                                                            </tr>

                                                            <td>Status:</td>

                                                            <?php
                                                                if ($_SESSION['chef']) {
                                                                    ?>
                                                                    <td>Chef</td>
                                                                    <?php
                                                                }

                                                                if ($_SESSION['admin']) {
                                                                    ?>
                                                                    <td>Administrateur</td>
                                                                    <?php
                                                                }

                                                                if (!$_SESSION['admin'] && !$_SESSION['chef']) {
                                                                    ?>
                                                                    <td>Salarié</td>
                                                                    <?php
                                                                }
                                                            ?>
                                                        </tr>
                                                        <tr>
                                                            <td>Membre depuis le:</td>
                                                            <td><?= $_SESSION['date']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jours de formation:</td>
                                                            <td><?= $_SESSION['jour']; ?> Jours</td>
                                                        </tr>

                                                        <tr>
                                                        <tr>
                                                            <td>Crédits:</td>
                                                            <td><?= $_SESSION['credits']; ?> Crédits</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Formation en cours:</td>
                                                            <td><?= $formationsEnCours['count(id_f)']; ?> Formation(s) en cours</td>
                                                        </tr>

                                                        </tr>
                                                    </tbody>
                                                </table>

                                                <input id="charging-button" name="submit-change" type="button" class="btn btn-primary" value="Modifier">
                                                
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade in" id="tab2">
                            <div class="container">
                                <div class="row">

                                    <?php
                                    while ($equipe = $team->fetch()) {
                                        ?>
                                        <div class="col-xs-12 col-sm-6 col-md-6 equipe" id="<?= $equipe['id_s']; ?>">
                                            <div class="well well-sm">
                                                <div class="row">
                                                    <div class="col-sm-6 col-md-4">
                                                            <img class="center-block" style="border-radius: 50px; border: 3px solid dimgrey; margin-top: 55px;" alt="" src="images/avatar/<?= $equipe['image']; ?>">
                                                    </div>
                                                    <div class="col-sm-6 col-md-8">
                                                        <h3><?= $equipe['login'] ?></h3>

                                                        <h4><?= $equipe['prenom']. " " . $equipe['nom'] ?></h4>

                                                        <?php
                                                            if ($equipe['chef']) {
                                                                echo "<h5>Chef <i class=\"fa fa-angle-double-up\" aria-hidden=\"true\"></i></h5>";
                                                            }
                                                            else{
                                                                echo "<h5>Salarié <i class=\"fa fa-angle-up\" aria-hidden=\"true\"></i></h5>";
                                                            }
                                                        ?>

                                                        <?php
                                                        if ($equipe['enLigne']){
                                                            echo " <i style='color: green' class='fa fa-circle' aria-hidden='true'></i><small> Online</small>";
                                                        }
                                                        else{
                                                            echo " <i style='color: red' class='fa fa-circle' aria-hidden='true'></i><small> Offline</small>";
                                                        }
                                                        ?>
                                                        <hr>
                                                        <p>
                                                            <i class="fa fa-at" aria-hidden="true"></i> <?= $equipe['email'] ?>
                                                            <br/>
                                                            <i class="fa fa-calendar-check-o" aria-hidden="true"></i> <?= "Membre depuis le ".$equipe['inscription_d'].""; ?>
                                                        </p>
                                                        <!-- Split button -->
                                                            <button data-id="<?= $equipe['id_s']; ?>" type="button" class="newChat btn btn-primary"><i class="fa fa-comments-o" aria-hidden="true"></i> Message</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                    ?>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

<div class="page-content">

    <div class="row">
        <div class="container">

        <div>
            <div class="row">
                <div class="col-md-12">
                    <div class="content-box-large">
                        <div class="panel-heading">
                            <?php
                            if ($_SESSION['chef'] == 0) {
                                echo "<div class='panel-title'> Formation en attente de confirmation </div>";
                            }
                            if ($_SESSION['chef'] == 1) {
                                echo "<div class='panel-title '> En attente de confirmation </div>";
                            }
                            ?>

                            <div class="panel-options">
                                <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
                                <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <table class="table">
                                <thead>
                                
                                <?php
                                if ($_SESSION['chef'] == 0) {
                                    ?>

                                    <tr>
                                        <th>#</th>
                                        <th>Intitulé</th>
                                        <th>Date début</th>
                                        <th>Durée</th>
                                        <th>Date d'achat</th>
                                        <th>Heure d'achat</th>
                                        <th class="text-center">Annuler</th>
                                    </tr>

                                    <?php
                                }
                                ?>

                                <?php
                                if ($_SESSION['chef'] == 1) {
                                    ?>

                                    <tr>
                                        <th>#</th>
                                        <th>Intitulé</th>
                                        <th>Nom du salarié</th>
                                        <th>Date début</th>
                                        <th>Durée</th>
                                        <th>Date d'achat</th>
                                        <th>Heure d'achat</th>
                                        <th class="text-center">Confirmer</th>
                                        <th class="text-center">Refuser</th>
                                    </tr>

                                    <?php
                                }
                                ?>
                                
                                
                                </thead>
                                <tbody>
                                
                                
                                <?php
                                $compteur = 1;
                                if ($_SESSION['chef'] == 0) {
                                    while ($result = $requete->fetch()) {

                                        echo "<tr class=\"odd gradeX\">
                                        <td>" . $compteur . "</td>
                                        <td>" . $result['nom_f'] . "</td>
                                        <td>" . $result['date_debut'] . "</td>
                                        <td>" . $result['nb_jour'] . " Jours</td>
                                        <td>" . $result['date_achat'] . "</td>
                                        <td>" . $result['heure_achat'] . "</td>
                                        <th class='text-center'><a href='".BASE_URL."/delete/".$result['id_h']."'><i style='color: red;' class=\"fa fa-times\" aria-hidden=\"true\"></i></a></th>
                                    </tr>";
                                    $compteur++;
                                    }
                                }
                                ?>

                                <?php
                                if ($_SESSION['chef'] == 1) {
                                    while ($result4 = $requete4->fetch()) {

                                        echo "<tr class='odd gradeX'>
                                        <td>" . $compteur . "</td>
                                        <td>" . $result4['nom_f'] . "</td>
                                        <td><a class='btn btn-xs btn-primary' href='".BASE_URL."/employe/".$result4['id_s']."'>" . (($result4['nom']) . " " . ($result4['prenom'])) . "</td>
                                        <td>" . $result4['date_debut'] . "</td>
                                        <td>" . $result4['nb_jour'] . " Jours</td>
                                        <td>" . $result4['date_achat'] . "</td>
                                        <td>" . $result4['heure_achat'] . "</td>
                                        <th class='text-center'><a href='".BASE_URL."/confirm/".$result4['id_h']."'><i style='color: green;' class=\"fa fa-check\" aria-hidden=\"true\"></i></a></th>
                                        <th class='text-center'><a href='".BASE_URL."/decline/".$result4['id_h']."'><i style='color: red;' class=\"fa fa-times\" aria-hidden=\"true\"></i></a></th>
                                    </tr>";
                                    $compteur++;
                                    }
                                }
                                ?>
                                
                                
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="row">
                <div class="col-md-12">
                    <div class="content-box-large">
                        <div class="panel-heading">
                            <?php
                            if ($_SESSION['chef'] == 0) {
                                echo "<div class='panel-title'> Formation validé à effectuer </div>";
                            }
                            if ($_SESSION['chef'] == 1) {
                                echo "<div class='panel-title'> Formation réservée à venir </div>";
                            }
                            ?>

                            <div class="panel-options">
                                <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
                                <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <table class="table">
                                <thead>

                                    <tr>
                                        <th>#</th>
                                        <th>Intitulé</th>
                                        <th>Date début</th>
                                        <th>Durée</th>
                                        <th>Date d'achat</th>
                                        <th>Heure d'achat</th>
                                        <th class='text-center'>Annuler</th>
                                    </tr>

                                </thead>
                                <tbody>


                                <?php
                                $compteur = 1;
                                if ($_SESSION['chef'] == 0) {
                                    while ($result2 = $requete2->fetch()) {

                                        echo "<tr class=\"odd gradeX\">
                                        <td>" . $compteur . "</td>
                                        <td>" . $result2['nom_f'] . "</td>
                                        <td>" . $result2['date_debut'] . "</td>
                                        <td>" . $result2['nb_jour'] . " Jours</td>
                                        <td>" . $result2['date_achat'] . "</td>
                                        <td>" . $result2['heure_achat'] . "</td>
                                        <th class='text-center'><a href='".BASE_URL."/M2l/delete/".$result2['id_h']."'><i style='color: red;' class=\"fa fa-times\" aria-hidden=\"true\"></i></a></th>
                                    </tr>";
                                    $compteur++;
                                    }
                                }
                                ?>

                                <?php
                                if ($_SESSION['chef'] == 1) {
                                    while ($result2 = $requete2->fetch()) {

                                        echo "<tr class=\"odd gradeX\">
                                        <td>" . $compteur . "</td>
                                        <td>" . $result2['nom_f'] . "</td>
                                        <td>" . $result2['date_debut'] . "</td>
                                        <td>" . $result2['nb_jour'] . " Jours</td>
                                        <td>" . $result2['date_achat'] . "</td>
                                        <td>" . $result2['heure_achat'] . "</td>
                                        <th class='text-center'><a href='".BASE_URL."/delete/".$result2['id_h']."'><i style='color: red;' class=\"fa fa-times\" aria-hidden=\"true\"></i></a></th>
                                    </tr>";
                                    $compteur++;
                                    }
                                }
                                ?>


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="row">
                <div class="col-md-12">
                    <div class="content-box-large">
                        <div class="panel-heading">
                            <div class='panel-title'> Formation effectué </div>";

                            <div class="panel-options">
                                <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
                                <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <table class="table">
                                <thead>

                                    <tr>
                                        <th>#</th>
                                        <th>Intitulé</th>
                                        <th>Date début</th>
                                        <th>Durée</th>
                                        <th>Date d'achat</th>
                                        <th>Heure d'achat</th>
                                        <th class='text-center'>Imprimer</th>
                                    </tr>


                                </thead>
                                <tbody>


                                <?php
                                $compteur = 1;
                                    while ($result3 = $requete3->fetch()) {

                                        echo "<tr class='odd gradeX'>
                                        <td>" . $compteur . "</td>
                                        <td>" . $result3['nom_f'] . "</td>
                                        <td>" . $result3['date_debut'] . "</td>
                                        <td>" . $result3['nb_jour'] . " Jours</td>
                                        <td>" . $result3['date_achat'] . "</td>
                                        <td>" . $result3['heure_achat'] . "</td>
                                        <th class='text-center'><a href='#'><i class='fa fa-file-pdf-o fa-2x' aria-hidden='true'></i></a></th>
                                    </tr>";
                                    $compteur++;
                                    }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

            <?php
            if (!$_SESSION['chef'] && !$_SESSION['admin']) {
                ?>

                <div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="content-box-large">
                                <div class="panel-heading">
                                        <div class='panel-title'> Formations refusées </div>
                                    <div class="panel-options">
                                        <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
                                        <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <table class="table">
                                        <thead>

                                        <tr>
                                            <th>#</th>
                                            <th>Intitulé</th>
                                            <th>Date début</th>
                                            <th>Durée</th>
                                            <th>Date d'achat</th>
                                            <th>Heure d'achat</th>
                                        </tr>

                                        </thead>
                                        <tbody>


                                        <?php
                                        $compteur = 1;
                                            while ($formationsRefuse = $getFormationsRefuse->fetch()) {

                                                echo "<tr class=\"odd gradeX\">
                                        <td>" . $compteur . "</td>
                                        <td>" . $formationsRefuse['nom_f'] . "</td>
                                        <td>" . $formationsRefuse['date_debut'] . "</td>
                                        <td>" . $formationsRefuse['nb_jour'] . " Jours</td>
                                        <td>" . $formationsRefuse['date_achat'] . "</td>
                                        <td>" . $formationsRefuse['heure_achat'] . "</td>
                                    </tr>";
                                                $compteur++;
                                            }
                                        ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php
            }
        if ($_SESSION['chef'] == 1) {
        ?>
        <div>
            <div class="row">
                <div class="col-md-12">
                    <div class="content-box-large">
                        <div class="panel-heading">

                            <div class='panel-title'> Formation de vos salariés</div>

                            <div class="panel-options">
                                <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
                                <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <table class="table">
                                <thead>

                                <tr>
                                    <th>#</th>
                                    <th>Intitulé</th>
                                    <th>Nom du salarié</th>
                                    <th>Date début</th>
                                    <th>Durée</th>
                                    <th>Date d'achat</th>
                                    <th>Heure d'achat</th>
                                    <th class="text-center">Annuler</th>
                                </tr>

                                </thead>
                                <tbody>

                                <?php
                                while ($result5 = $requete5->fetch()) {

                                    echo "<tr class='odd gradeX'>
                                        <td>" . $compteur . "</td>
                                        <td>" . $result5['nom_f'] . "</td>
                                        <td><a class='btn btn-xs btn-primary' href='http://localhost/M2l/employe/" . $result5['id_s'] . "'>" . (($result5['nom']) . " " . ($result5['prenom'])) . "</td>
                                        <td>" . $result5['date_debut'] . "</td>
                                        <td>" . $result5['nb_jour'] . " Jours</td>
                                        <td>" . $result5['date_achat'] . "</td>
                                        <td>" . $result5['heure_achat'] . "</td>
                                        <th class='text-center'><a href='http://localhost/M2l/delete/" . $result5['id_h'] . "'><i style='color: red;' class=\"fa fa-times\" aria-hidden=\"true\"></i></a></th>
                                    </tr>";
                                    $compteur++;
                                }
                                ?>


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
<?php
}
?>