<div class="page-content">
    <div class="row">

        <?php
        if ($_GET['id'] == 1) {
            ?>

            <form class="form-horizontal" method="post" action="#" enctype="multipart/form-data">
                <fieldset>

                    <legend class="text-center">Ajouter une formation</legend>

                    <div class="form-group">
                        <div class="col-sm-6 col-sm-offset-3">
                            <input id="textinput" name="nom" type="text" placeholder="Nom de la formation"
                                   class="form-control input-md">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-6 col-sm-offset-3">
                            <textarea class="form-control" id="textarea"
                                      name="description">Description de la Formation</textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-6 col-sm-offset-3">
                            <?php
                            echo "<select name='equipe' class='form-control'>";
                            echo "<option value='0'>Prestataire de la formation</option>";
                            while ($prestataire = $requete2->fetch()){
                                echo "<option value='".$prestataire['id_p']."'>". ($prestataire['nom_p']) . " - Prestataire : ".$prestataire['id_p']."</option>";
                            }
                            ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-6 col-sm-offset-3">
                            <input type="hidden" name="MAX_FILE_SIZE" value="1000000">
                            Fichier : <input type="file" name="fileToUpload">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-6 col-sm-offset-3">
                            <input id="textinput" name="duree" type="text" placeholder="Durée de la formation (jour)"
                                   class="form-control input-md">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-6 col-sm-offset-3">
                            <input id="textinput" name="prerequis" type="text" placeholder="Prérequis de la formation"
                                   class="form-control input-md">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-6 col-sm-offset-3">
                            <input id="textinput" name="credit" type="text" placeholder="Prix de la formation (crédits)"
                                   class="form-control input-md">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-6 col-sm-offset-3">
                            <input id="textinput" name="date_debut" type="date" class="form-control input-md">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-6 col-sm-offset-3">
                            <input id="textinput" name="date_fin" type="date" class="form-control input-md">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-6 col-sm-offset-3">
                            <input id="submit" name="submit_formation" type="submit" class="form-control btn btn-primary">
                        </div>
                    </div>

                </fieldset>
            </form>

            <?php
        }
        ?>

        <?php
        if ($_GET['id'] == 2) {
            ?>

            <form class="form-horizontal" method="post" action="#">
                <fieldset>

                    <legend class="text-center">Ajouter un salarié</legend>

                    <div class="form-group">
                        <div class="col-sm-6 col-sm-offset-3">
                            <input id="textinput" name="nom" type="text" placeholder="Nom du salarie"
                                   class="form-control input-md">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-6 col-sm-offset-3">
                            <input id="textinput" name="prenom" type="text" placeholder="Prénom du salarié"
                                   class="form-control input-md">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-6 col-sm-offset-3">
                            <input id="textinput" name="login" type="text" placeholder="Login du salarié"
                                   class="form-control input-md">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-6 col-sm-offset-3">
                            <input id="textinput" name="mdp" type="text" placeholder="Mot de passe du salarié" class="form-control input-md"><a href="">Générer aléatoirement</a>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-6 col-sm-offset-3">
                            <?php
                            echo "<select name='equipe' class='form-control'>";
                            echo "<option value='0'>Chef du salarié</option>";
                            while ($chef = $requete->fetch()){
                                echo "<option value='".$chef['equipe']."'>". (($chef['nom']) . " " . ($chef['prenom'])) ." - Chef : ".$chef['equipe']."</option>";
                            }
                            ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-6 col-sm-offset-3">
                            <input id="textinput" name="jour" type="text" placeholder="Nombre de jours du salarié"
                                   class="form-control input-md">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-6 col-sm-offset-3">
                            <input id="textinput" name="credit" type="text" placeholder="Nombre de crédits du salarié"
                                   class="form-control input-md">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-6 col-sm-offset-3">
                            <input id="submit" name="submit_salarie" type="submit"
                                   class="form-control btn btn-primary">
                        </div>
                    </div>

                </fieldset>
            </form>

            <?php
        }
        ?>

        <?php
        if ($_GET['id'] == 3) {
            ?>

            <form class="form-horizontal" method="post" action="#">
                <fieldset>

                    <legend class="text-center">Ajouter un chef d'équipe</legend>

                    <div class="form-group">
                        <div class="col-sm-6 col-sm-offset-3">
                            <input id="textinput" name="nom" type="text" placeholder="Nom du chef"
                                   class="form-control input-md">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-6 col-sm-offset-3">
                            <input id="textinput" name="prenom" type="text" placeholder="Prénom du chef"
                                   class="form-control input-md">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-6 col-sm-offset-3">
                            <input id="textinput" name="login" type="text" placeholder="Login du chef"
                                   class="form-control input-md">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-6 col-sm-offset-3">
                            <input id="textinput" name="mdp" type="text" placeholder="Mot de passe du chef" class="form-control input-md"><a href="">Générer aléatoirement</a>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-6 col-sm-offset-3">
                            <input id="textinput" name="jour" type="text" placeholder="Nombre de jours du chef"
                                   class="form-control input-md">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-6 col-sm-offset-3">
                            <input id="textinput" name="credit" type="text" placeholder="Nombre de crédits du chef"
                                   class="form-control input-md">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-6 col-sm-offset-3">
                            <input id="submit" name="submit_chef" type="submit"
                                   class="form-control btn btn-primary">
                        </div>
                    </div>

                </fieldset>
            </form>

            <?php
        }
        ?>
        <?php
        if ($_GET['id'] == 4) {
            ?>

            <form class="form-horizontal" method="post" action="#">
                <fieldset>

                    <legend class="text-center">Ajouter un Préstataire</legend>

                    <div class="form-group">
                        <div class="col-sm-6 col-sm-offset-3">
                            <input id="textinput" name="nom" type="text" placeholder="Nom du préstataire"
                                   class="form-control input-md">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-6 col-sm-offset-3">
                            <input id="textinput" name="ville" type="text" placeholder="Ville du prestataire"
                                   class="form-control input-md">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-6 col-sm-offset-3">
                            <input id="textinput" name="cp" type="number" placeholder="Code postal"
                                   class="form-control input-md">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-6 col-sm-offset-3">
                            <input id="textinput" name="num_rue" type="number" placeholder="Numéro de la rue"
                                   class="form-control input-md">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-6 col-sm-offset-3">
                            <input id="textinput" name="nom_rue" type="text" placeholder="Nom de la rue"
                                   class="form-control input-md">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-6 col-sm-offset-3">
                            <input id="submit" name="submit_presta" type="submit"
                                   class="form-control btn btn-primary">
                        </div>
                    </div>

                </fieldset>
            </form>

            <?php
        }
        ?>



    </div>
</div>