<div class="page-content">
    <div class="row">

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
                            <input id="mot-de-passe" value="<?= $mdp; ?>" name="mdp" type="text" placeholder="Mot de passe du salarié" class="form-control input-md">
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

    </div>
</div>