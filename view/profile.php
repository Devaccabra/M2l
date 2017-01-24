<div class="page-content">
    <div class="row">
        <div class="col-md-2">
            <div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                    <li><a href="formations"><i class="glyphicon glyphicon-calendar"></i> Formations</a></li>
                    <li><a href="stats"><i class="glyphicon glyphicon-stats"></i> Statistics (Charts)</a></li>
                    <li class="current"><a href="tables"><i class="glyphicon glyphicon-list"></i> Tables</a></li>
                    <li><a href="buttons"><i class="glyphicon glyphicon-record"></i> Buttons</a></li>
                    <li><a href="editors"><i class="glyphicon glyphicon-pencil"></i> Editors</a></li>
                    <li><a href="forms"><i class="glyphicon glyphicon-tasks"></i> Forms</a></li>
                    <li class="submenu">
                        <a href="#">
                            <i class="glyphicon glyphicon-list"></i> Pages
                            <span class="caret pull-right"></span>
                        </a>
                        <!-- Sub menu -->
                        <ul>
                            <li><a href="login">Login</a></li>
                            <li><a href="signup">Signup</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-md-10">
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
                                        <th class='text-center'><a href='http://localhost/M2l/delete/".$result['id_h']."'><i style='color: red;' class=\"fa fa-times\" aria-hidden=\"true\"></i></a></th>
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
                                        <td><a class='btn btn-xs btn-primary' href='http://localhost/M2l/employe/".$result4['id_s']."'>" . (($result4['nom']) . " " . ($result4['prenom'])) . "</td>
                                        <td>" . $result4['date_debut'] . "</td>
                                        <td>" . $result4['nb_jour'] . " Jours</td>
                                        <td>" . $result4['date_achat'] . "</td>
                                        <td>" . $result4['heure_achat'] . "</td>
                                        <th class='text-center'><a href='http://localhost/M2l/confirm/".$result4['id_h']."'><i style='color: green;' class=\"fa fa-check\" aria-hidden=\"true\"></i></a></th>
                                        <th class='text-center'><a href='http://localhost/M2l/delete/".$result4['id_h']."'><i style='color: red;' class=\"fa fa-times\" aria-hidden=\"true\"></i></a></th>
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

        <div class="col-md-10">
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
                                        <th class='text-center'><a href='http://localhost/M2l/delete/".$result2['id_h']."'><i style='color: red;' class=\"fa fa-times\" aria-hidden=\"true\"></i></a></th>
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
                                        <th class='text-center'><a href='http://localhost/M2l/delete/".$result2['id_h']."'><i style='color: red;' class=\"fa fa-times\" aria-hidden=\"true\"></i></a></th>
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

        <div class="col-md-10 col-md-offset-2">
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
        if ($_SESSION['chef'] == 1) {
        ?>
        <div class="col-md-10 col-md-offset-2">
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
                                        <th class='text-center'><a href='http://localhost/M2l/delete/" . $result5['id_s'] . "'><i style='color: red;' class=\"fa fa-times\" aria-hidden=\"true\"></i></a></th>
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
?>