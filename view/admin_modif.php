
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
                                    <div class='panel-title'> Modification de formation</div>
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
                                            <th>Image</th>
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
                                        <td><input type='text' name='nom' class='form-control' value='" . $result['nom_f'] . "'></td>
                                        <td><textarea type='text' name='nom' class='form-control' style='width:500px; max-width:500px; max-height:100px;'>" . $result['description'] . "</textarea></td>
                                        <td><input type='text' name='nom' class='form-control' value='" . $result['image'] . "'></td>
                                        <td><input type='number' name='nom' class='form-control' style='width:80px;' value='" . $result['nb_jour'] . "'></td>
                                        <td><input type='text' name='nom' class='form-control' value='" . $result['prerequis'] . "'></td>
                                        <td><input type='number' name='nom' class='form-control' value='" . $result['credits_f'] . "'></td>
                                        <td><input type='date' name='nom' class='form-control' value='" . $result['date_debut'] . "'></td>
                                        <th class='text-center'><input type='submit' name='submit_formation' class='btn btn-primary' value='Modifier'></th>
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
                                    <div class='panel-title'> Modification de salarié</div>
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
                                                        <td class='identifiant-salarie'>" . $compteur . "</td>
                                                        <td>" . $result2['nom'] . "</td>
                                                        <td>" . $result2['prenom'] . "</td>                                        
                                                        <td>" . $result2['login'] . "</td>
                                                        <td><input id='nb-jours-salarie' type='number' name='nb-jour' class='form-control' value='" . $result2['jour'] . "'></td>
                                                        <td><input id='nb-credits-salarie' type='number' name='nom' class='form-control' value='" . $result2['credits'] . "'></td>
                                                        <th class='text-center'><button class='modif-salarie-button btn btn-primary' value='".$result2['id_s']."'>Modifier</button></th>
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
                                    <div class='panel-title'> Modification de chefs</div>
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
                                    <form action='#' method='post'>
                                        <td>" . $compteur . "</td>
                                        <td>" . $result3['nom'] . "</td>
                                        <td>" . $result3['prenom'] . "</td>                                        
                                        <td" . $result3['login'] . "</td>
                                        <td><input type='number' name='nom' class='form-control' value='" . $result3['jour'] . "'></td>
                                        <td><input type='number' name='nom' class='form-control' value='" . $result3['credits'] . "'></td>
                                        <th class='text-center'><input type='submit' name='submit_formation' class='btn btn-primary' value='Modifier'></th>
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
            if ($_GET['id'] == 4) {
                ?>
                <div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="content-box-large">
                                <div class="panel-heading">
                                    <div class='panel-title'> Modification de prestataires</div>
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
                                            <th class='text-center'>Modifier</th>
                                        </tr>


                                        </thead>
                                        <tbody>


                                        <?php
                                        $compteur = 1;
                                        while ($result4 = $requete4->fetch()) {

                                            echo "<tr class='odd gradeX'>
                                                        <td>" . $compteur . "</td>
                                                        <td><input type='text' name='nom' class='form-control' value='" . $result4['nom_p'] . "'></td>
                                                        <td><input type='text' name='nom' class='form-control' value='" . $result4['ville'] . "'></td>                                        
                                                        <td><input type='number' name='nom' class='form-control' value='" . $result4['cp'] . "'></td>
                                                        <td><input style='width:100px' type='number' name='nom' class='form-control' value='" . $result4['num_rue'] . "'></td>
                                                        <td><input type='text' name='nom' class='form-control' value='" . $result4['nom_rue'] . "'></td>
                                                        <th class='text-center'><input type='submit' name='submit_formation' class='btn btn-primary' value='Modifier'></th>
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