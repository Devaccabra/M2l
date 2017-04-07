<div class="page-content">
    <div class="row">
        <div>

                <div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="content-box-large">
                                <div class="panel-heading">
                                    <div class='panel-title'> Suppression de salarié</div>

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

            </div>
        </div>
    </div>