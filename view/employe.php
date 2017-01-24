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
                                echo "<div class='panel-title'> En attente de confirmation </div>";
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
                                        <th class="text-center">Annuler</th>
                                    </tr>

                                    <?php
                                }
                                ?>


                                </thead>
                                <tbody>

                                <?php
                                if ($_SESSION['chef'] == 1) {
                                    $compteur = 1;
                                    while ($result4 = $requete4->fetch()) {

                                        echo "<tr class='odd gradeX'>
                                        <td>" . $compteur . "</td>
                                        <td>" . $result4['nom_f'] . "</td>
                                        <td>" . (($result4['nom']) . " " . ($result4['prenom'])) . "</td>
                                        <td>" . $result4['date_debut'] . "</td>
                                        <td>" . $result4['nb_jour'] . " Jours</td>
                                        <td>" . $result4['date_achat'] . "</td>
                                        <td>" . $result4['heure_achat'] . "</td>
                                        <th class='text-center'><a href='http://localhost/M2l/delete/".$result4['id_h']."'><i style='color:red;' class=\"fa fa-times\" aria-hidden=\"true\"></i></a></th>
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