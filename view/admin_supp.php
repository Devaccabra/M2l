<div class="page-content">
    <div class="row">
        <div>


            <?php
            if ($_GET['id'] == 1) {
                ?>
                <div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="content-box-large">
                                <div class="panel-heading">
                                    <div class='panel-title'> Suppression de formation</div>
                                    ";

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
                                            <th>Description</th>
                                            <th>Durée</th>
                                            <th>Prérequis</th>
                                            <th>Crédits</th>
                                            <th>Heure début</th>
                                            <th class='text-center'>Modifier</th>
                                        </tr>


                                        </thead>
                                        <tbody>


                                        <?php
                                        $compteur = 1;
                                        while ($result = $requete->fetch()) {

                                            echo "<tr class='odd gradeX'>
                                    <form action='#' method='post'>
                                        <td>" . $compteur . "</td>
                                        <td>" . $result['nom_f'] . "</td>
                                        <td>" . $result['description'] . "</td>
                                        <td>" . $result['nb_jour'] . "</td>
                                        <td>" . $result['prerequis'] . "</td>
                                        <td>" . $result['credits_f'] . "</td>
                                        <td" . $result['date_debut'] . "</td>
                                        <th class='text-center'><a class='btn btn-danger' href='http://localhost/M2l/admin_supp/1/" . $result['id_f'] . "'>Supprimer</a></th>
                                    </form>
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

            <?php
            if ($_GET['id'] == 2) {
                ?>
                <div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="content-box-large">
                                <div class="panel-heading">
                                    <div class='panel-title'> Suppression de salarié</div>
                                    ";

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
                                            <th>Nom</th>
                                            <th>Prénom</th>
                                            <th>Login</th>
                                            <th>Jours</th>
                                            <th>Crédits</th>
                                            <th class='text-center'>Modifier</th>
                                        </tr>


                                        </thead>
                                        <tbody>


                                        <?php
                                        $compteur = 1;
                                        while ($result2 = $requete2->fetch()) {

                                            echo "<tr class='odd gradeX'>
                                    <form action='#' method='post'>
                                        <td>" . $compteur . "</td>
                                        <td>" . $result2['nom'] . "</td>
                                        <td>" . $result2['prenom'] . "</td>                                        
                                        <td>" . $result2['login'] . "</td>
                                        <td>" . $result2['jour'] . "</td>
                                        <td>" . $result2['credits'] . "</td>
                                        <th class='text-center'><a class='btn btn-danger' href='http://localhost/M2l/admin_supp/2/" . $result2['id_s'] . "'>Supprimer</a></th>
                                    </form>
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

            <?php
            if ($_GET['id'] == 3) {
                ?>
                <div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="content-box-large">
                                <div class="panel-heading">
                                    <div class='panel-title'> Suppression de chefs</div>
                                    ";

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
                                            <th>Nom</th>
                                            <th>Prénom</th>
                                            <th>Login</th>
                                            <th>Jours</th>
                                            <th>Crédits</th>
                                            <th class='text-center'>Modifier</th>
                                        </tr>


                                        </thead>
                                        <tbody>


                                        <?php
                                        $compteur = 1;
                                        while ($result3 = $requete3->fetch()) {

                                            echo "<tr class='odd gradeX'>
                                        <td>" . $compteur . "</td>
                                        <td>" . $result3['nom'] . "</td>
                                        <td>" . $result3['prenom'] . "</td>
                                        <td>" . $result3['login'] . "</td>
                                        <td>" . $result3['jour'] . "</td>
                                        <td>" . $result3['credits'] . "</td>
                                        <th class='text-center'><a class='btn btn-danger' href='http://localhost/M2l/admin_supp/3/" . $result3['id_s'] . "'>Supprimer</a></th>
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

            if ($_GET['id'] == 4) {
                ?>
                <div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="content-box-large">
                                <div class="panel-heading">
                                    <div class='panel-title'> Suppression de chefs</div>
                                    ";

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
                                            <th>Nom</th>
                                            <th>Ville</th>
                                            <th>Code postal</th>
                                            <th>Numéro de la rue</th>
                                            <th>Nom de la rue</th>
                                            <th class='text-center'>Supprimer</th>
                                        </tr>


                                        </thead>
                                        <tbody>


                                        <?php
                                        $compteur = 1;
                                        while ($result4 = $requete4->fetch()) {

                                            echo "<tr class='odd gradeX'>
                                        <td>" . $compteur . "</td>
                                        <td>" . $result4['nom_p'] . "</td>
                                        <td>" . $result4['ville'] . "</td>
                                        <td>" . $result4['cp'] . "</td>
                                        <td>" . $result4['num_rue'] . "</td>
                                        <td>" . $result4['nom_rue'] . "</td>
                                        <th class='text-center'><a class='btn btn-danger' href='http://localhost/M2l/admin_supp/4/" . $result4['id_p'] . "'>Supprimer</a></th>
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

            </div>
        </div>
    </div>