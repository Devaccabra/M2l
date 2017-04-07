<link href="http://localhost/M2l/css/formations.css" rel="stylesheet">

<?php
if (!isset($_SESSION['connecte'])) {
    header("location:accueil");
}
?>

<div class="page-content">
    <div class="row">
        <div class="container">

        <section id="formation">

            <div class="text-center">
                <?php
                $get_formation = $requete->fetch();
                    echo "<div class='col-md-4 wow fadeInUp' data-wow-delay='0.9s'>
                               <div class='wrapper'>
                                     <div class=''>
                                           <h1>" . $get_formation['nom_p'] . "</h1>
                                           <h5>Ville : " . $get_formation['ville'] . "</h1>
                                           <h5>Code Postal : " . $get_formation['cp'] . "</h1>
                                     </div>
                               </div>
                          </div>";
                ?>

                <br><br><h1>FORMATION</h1><hr><br>

                <?php
                $get_salaries = $requete2->fetch();
                    echo "<div class='col-md-4 wow fadeInUp' data-wow-delay='0.9s'>
                                <div class='wrapper'>
                                        <img style='width:800px; height:350px' src='http://localhost/M2l/images/formations/".$get_formation['image']."' class='img-responsive' alt='formation img'>
                                </div>
                          </div>
                          
                          <div class='col-md-8 wow fadeInUp' data-wow-delay='0.9s'>
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
                                                    if ($get_etat['etat'] == 2){
                                                        echo "<p style='font-size:14px;' class='alert-danger'>Formation refusé par le chef</p>";
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
                ?>
            </div>
        </section>

            </div>
    </div>
</div>