<link href="<?= baseURL() ?>css/admin-panel.css" rel="stylesheet">

<div class="page-content">
    <div class="row">
        <div>

            <div class="container">
                <div class="row">
                    <div id="alert-wait-modif" class="hidden popupunder alert alert-warning fade in">
                        <button type="button" class="close close-sm" data-dismiss="alert"><i class="glyphicon glyphicon-remove"></i></button>
                        <strong>Patientez : </strong> Modification en cours <img style="margin-top: 10px;" src="../images/loading.gif"/>
                    </div>
                    <div id="alert-success-modif" class="hidden popupunder alert alert-success fade in">
                        <button type="button" class="close close-sm" data-dismiss="alert"><i class="glyphicon glyphicon-remove"></i></button>
                        <strong>Success : </strong> La modification s'est dérouler avec succès !
                    </div>
                </div>
            </div>

            <?php
            if ($_GET['id'] == 1) {
                ?>
                <div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="content-box-large">
                                <div class="panel-heading">
                                    <div class='panel-title'> Modification de formation</div>

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
                                            <th>Date début</th>
                                            <th class='text-center'>Modifier</th>
                                        </tr>


                                        </thead>
                                        <tbody>


                                        <?php
                                        $compteur = 1;
                                        while ($result = $requete->fetch()) {

                                            echo "<tr class='odd gradeX'>
                                                        <td>" . $compteur . "</td>
                                                        <td><input id='modif-formation-nom".$result['id_f']."' type='text' name='nom_f' class='form-control' value='" . $result['nom_f'] . "'></td>
                                                        <td><textarea id='modif-formation-description".$result['id_f']."' type='text' name='description' class='form-control' style='width:500px; max-width:500px; max-height:100px;'>" . $result['description'] . "</textarea></td>
                                                        <td><input id='modif-formation".$result['id_f']."' type='text' name='image' class='form-control' value='" . $result['image'] . "'></td>
                                                        <td><input id='modif-formation-jour".$result['id_f']."' type='number' name='nb_jour' class='form-control' style='width:80px;' value='" . $result['nb_jour'] . "'></td>
                                                        <td><input id='modif-formation-prerequis".$result['id_f']."' type='text' name='prerequis' class='form-control' value='" . $result['prerequis'] . "'></td>
                                                        <td><input id='modif-formation-credits".$result['id_f']."' type='number' name='credits_f' class='form-control' value='" . $result['credits_f'] . "'></td>
                                                        <td><input id='modif-formation-date".$result['id_f']."' type='date' name='date_debut' class='form-control' value='" . $result['date_debut'] . "'></td>
                                                        <th class='text-center'><button class='modif-formation-button btn btn-primary' data-id='".$result['id_f']."' value='".$result['id_f']."'>Modifier</button></th>
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
                                                        <td><input id='nb-jours-salarie".$result2['id_s']."' type='number' name='nb-jour' class='form-control' value='" . $result2['jour'] . "'></td>
                                                        <td><input id='nb-credits-salarie".$result2['id_s']."' type='number' name='nom' class='form-control' value='" . $result2['credits'] . "'></td>
                                                        <th class='text-center'><button class='modif-salarie-button btn btn-primary' data-id='".$result2['id_s']."' value='" . $result2['id_s'] . "'>Modifier</button></th>
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
                                                        <td><input id='jour-chef".$result3['id_s']."' type='number' name='jour-chef' class='form-control' value='" . $result3['jour'] . "'></td>
                                                        <td><input id='credit-chef".$result3['id_s']."' type='number' name='credit-chef' class='form-control' value='" . $result3['credits'] . "'></td>
                                                        <th class='text-center'><button name='submit_formation' class='modif-chef-button btn btn-primary' data-id='".$result3['id_s']."' value='".$result3['id_s']."'>Modifier</button></th>
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
                                                        <td><input id='nom-presta".$result4['id_p']."' type='text' name='nom_p' class='form-control' value='" . $result4['nom_p'] . "'></td>
                                                        <td><input id='ville-presta".$result4['id_p']."' type='text' name='ville' class='form-control' value='" . $result4['ville'] . "'></td>                                        
                                                        <td><input id='cp-presta".$result4['id_p']."' type='number' name='cp' class='form-control' value='" . $result4['cp'] . "'></td>
                                                        <td><input id='num-rue-presta".$result4['id_p']."' style='width:100px' type='num-rue' name='nom' class='form-control' value='" . $result4['num_rue'] . "'></td>
                                                        <td><input id='nom-rue-presta".$result4['id_p']."' type='text' name='nom-rue' class='form-control' value='" . $result4['nom_rue'] . "'></td>
                                                        <th class='text-center'><button class='modif-presta-button btn btn-primary' data-id='".$result4['id_p']."' value='".$result4['id_p']."'>Modifier</button></th>
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