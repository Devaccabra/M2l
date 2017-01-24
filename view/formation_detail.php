<link href="http://localhost/M2l/css/formations.css" rel="stylesheet">

<?php
if (!isset($_SESSION['connecte'])) {
    header("location:accueil");
}
?>

<div class="page-content">
    <div class="row">
        <div class="col-md-2" style="min-height: 150px">
            <div class="sidebar content-box" style="display: block; position: fixed">
                <ul class="nav">
                    <!-- Main menu -->
                    <li class="current"><a href="http://localhost/M2l/formations"><i class="glyphicon glyphicon-calendar"></i> Formations</a></li>
                    <li><a href="stats"><i class="glyphicon glyphicon-stats"></i> Statistics (Charts)</a></li>
                    <li><a href="tables"><i class="glyphicon glyphicon-list"></i> Tables</a></li>
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

        <section id="formation">

            <div class="text-center">
                <h1>FORMATIONS DISPONIBLES</h1><hr><br>

                <?php
                $get_salaries = $requete2->fetch();
                while ($get_formation = $requete->fetch()){
                    echo "<div class='col-md-4 wow fadeInUp' data-wow-delay='0.9s'>
                                <div class='wrapper'>
                                        <img src='http://localhost/M2l/images/formations/".$get_formation['image']."' class='img-responsive' alt='formation img'>
                                </div>
                          </div>
                          
                          <div class='col-md-5 wow fadeInUp' data-wow-delay='0.9s'>
                                <div class='wrapper'>
                                            <div class=''>
                                                <h1>".$get_formation['nom_f']."</h1>
                                                <h2>Durée : ".$get_formation['nb_jour']." jours</h5>
                                                <h2>Coût : ".$get_formation['credits_f']." crédits</h5>
                                                <h2>Date de début : ".$get_formation['date_debut']."</h5>
                                                <hr>
                                                <p style='font-size:14px;'>".$get_formation['description']."</p><hr>";
                                                if($check->rowCount() == 1 )
                                                {
                                                    if ($get_etat['etat'] == 1){
                                                        echo "<p style='font-size:14px;' class='alert-success'>Formation accepté par l'administrateur</p>";
                                                    }
                                                    else {
                                                        echo "<p style='font-size:14px;' class='alert-warning'>En attente de confirmation...</p>";
                                                    }
                                                }
                                                else
                                                {
                                                    if ($get_formation['credits_f'] > $_SESSION['credits']){
                                                        echo "<p style='font-size:14px;' class='alert-danger'>Crédits insuffisants</p>";
                                                    }
                                                    else{
                                                        if ($get_formation['nb_jour'] > $_SESSION['jour']){
                                                            echo "<p style='font-size:14px;' class='alert-danger'>Vous ne disposez pas d'asser de jours</p>";
                                                        }
                                                        else{
                                                            echo "<p style='font-size:14px;'>Crédits après l'achat : ".($get_salaries['credits'] - $get_formation['credits_f'])."</p>
                                                            <a href='../add_formation/".$get_formation['id_f']."' class='addFormation btn btn-lg btn-primary'>Suivre cette formation</a>";
                                                        }
                                                    }
                                                }
                                       echo "</div>
                                </div>
                          </div>";
                }
                ?>
            </div>
        </section>

    </div>
</div>