<link href="<?php BASE_URL; ?>css/formations.css" rel="stylesheet">

<?php
if (!isset($_SESSION['connecte'])) {
    header("location:accueil");
}
?>

<div class="page-content">
    <div class="row">

        <section id="formation">

            <div class="text-center">
                <h1>FORMATIONS DISPONIBLES (<?= $allFormations['COUNT(*)'] ?>)</h1><hr><br>
                <?php
                    while ($get_formation = $requete->fetch()){
                        $check = $bdd->query("SELECT * FROM historique WHERE id_f= ".$get_formation['id_f']." AND id_s= ".$_SESSION['id_s']." ");
                        $get_etat = $check->fetch();
                        if($check->rowCount() == 1 )
                        {
                            if ($get_etat['etat'] == 0){
                                echo "<div class='col-md-3 wow fadeInUp item' data-wow-delay='0.9s' id='".$get_formation['id_f']."'>
                                        <div class='wrapper'>
                                            <a href='formation_detail/".$get_formation['id_f']."'>
                                                <img style='height:350px; width:800px;' src='images/formations/".$get_formation['image']."' class='img-responsive' alt='formation img'>
                                                    <div class='des'>
                                                        <h4>".$get_formation['nom_f']."</h4>
                                                        <h5>Durée : ".$get_formation['nb_jour']." jours</h5>
                                                        <h5>Date de début : ".$get_formation['date_debut']."</h5>
                                                        <hr>
                                                        <p>".substr($get_formation['description'],0,30)."<span>...</span></p>
                                                        <p style='font-size:14px;' class='alert-warning'>En attente de confirmation...</p>
                                                    </div>
                                            </a>
                                        </div>
                                      </div>";
                            }
                            if ($get_etat['etat'] == 2){
                                echo "<div class='col-md-3 wow fadeInUp item' data-wow-delay='0.9s' id='".$get_formation['id_f']."'>
                                        <div class='wrapper'>
                                            <a href='formation_detail/".$get_formation['id_f']."'>
                                                <img style='height:350px; width:800px;' src='images/formations/".$get_formation['image']."' class='img-responsive' alt='formation img'>
                                                    <div class='des'>
                                                        <h4>".$get_formation['nom_f']."</h4>
                                                        <h5>Durée : ".$get_formation['nb_jour']." jours</h5>
                                                        <h5>Date de début : ".$get_formation['date_debut']."</h5>
                                                        <hr>
                                                        <p>".substr($get_formation['description'],0,30)."<span>...</span></p>
                                                        <p style='font-size:14px;' class='alert-danger'>Formation refusé par le chef</p>
                                                    </div>
                                            </a>
                                        </div>
                                      </div>";
                            }
                            else {
                                echo "<div class='col-md-3 wow fadeInUp item' data-wow-delay='0.9s' id='".$get_formation['id_f']."'>
                                        <div class='wrapper'>
                                            <a href='formation_detail/".$get_formation['id_f']."'>
                                                <img style='height:350px; width:800px;' src='images/formations/".$get_formation['image']."' class='img-responsive' alt='formation img'>
                                                    <div class='des'>
                                                        <h4>".$get_formation['nom_f']."</h4>
                                                        <h5>Durée : ".$get_formation['nb_jour']." jours</h5>
                                                        <h5>Date de début : ".$get_formation['date_debut']."</h5>
                                                        <hr>
                                                        <p>".substr($get_formation['description'],0,30)."<span>...</span></p>
                                                        <p style='font-size:14px;' class='alert-success'>Formation accepté par l'administrateur</p>
                                                    </div>
                                            </a>
                                        </div>
                                      </div>";
                            }
                        }
                        else {
                            echo "<div class='col-md-3 wow fadeInUp item' data-wow-delay='0.9s' id='".$get_formation['id_f']."'>
                                    <div class='wrapper'>
                                        <a href='formation_detail/".$get_formation['id_f']."'>
                                            <img style='height:350px; width:800px;' src='images/formations/".$get_formation['image']."' class='img-responsive' alt='formation img'>
                                                <div class='des'>
                                                    <h4>".$get_formation['nom_f']."</h4>
                                                    <h5>Durée : ".$get_formation['nb_jour']." jours</h5>
                                                    <h5>Coût : ".$get_formation['credits_f']." crédits</h5>
                                                    <h5>Date de début : ".$get_formation['date_debut']."</h5>
                                                    <hr>
                                                    <p>".substr($get_formation['description'],0,100)."<span>...</span></p>
                                                </div>
                                        </a>
                                    </div>
                                  </div>";
                        }
                    }
                ?>
                
                <div id="posts">
                    <!-- AFFICHAGE DU RESTE DES FORMATION -->
                </div>
                
                <div class="col-md-12 hidden infinite-scroll" id="loading">
                    <div class="adjust">
                        <div class="loader"></div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div>
                        <button id="Monbouton" class="btn btn-lg btn-default infinite-scroll">Voir plus... <span class="glyphicon glyphicon-chevron-down"></span></button>
                    </div>
                </div>
            </div>
        </section>

    </div>
</div>
