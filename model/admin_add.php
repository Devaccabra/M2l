<?php

if ($_SESSION['admin'] == 0){
    header("location:formations");
}

$requete = $bdd->query("SELECT * FROM salaries WHERE chef=1");

$requete2 = $bdd->query("SELECT * FROM prestataires");

if (isset($_POST['submit_formation'])){
    $nom = ucfirst($_POST['nom']);
    $description = ucfirst($_POST['description']);
    $duree = intval($_POST['duree']);
    $prerequis = ucfirst($_POST['prerequis']);
    $credit = intval($_POST['credit']);
    $date_debut = date($_POST['date_debut']);
    $date_fin = $_POST['date_fin'];

    $target_dir = "C:/wamp/www/M2l/images/formations/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }
// Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
// Check file size
    if ($_FILES["fileToUpload"]["size"] > 1000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
// Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
// Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
            $ins = "INSERT INTO formations (nom_f, description, image, nb_jour, prerequis, credits_f, date_debut, date_fin) VALUES ('$nom', '$description', '".$_FILES['fileToUpload']['name']."', '$duree', '$prerequis', '$credit', '$date_debut', '$date_fin')";

            $inse = $bdd->prepare($ins);

            $insert = $inse->execute();
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}

if (isset($_POST['submit_salarie'])){
    $nom = ucfirst($_POST['nom']);
    $prenom = ucfirst($_POST['prenom']);
    $login = $_POST['login'];
    $mdp = "root";
    $jour = intval($_POST['jour']);
    $credit = intval($_POST['credit']);
    $equipe = intval($_POST['equipe']);

    $ins = "INSERT INTO salaries (login, password, email, nom, prenom, jour, credits, equipe, inscription_d, inscription_h) VALUES ('$login', '$mdp', 'email-temporaire@exemple.com', '$nom', '$prenom', '$jour', '$credit', '$equipe', NOW(), NOW())";

    $inse = $bdd->prepare($ins);

    $insert = $inse->execute();

}

if (isset($_POST['submit_chef'])){

    $requete = $bdd->query("SELECT MAX(equipe) FROM salaries");
    $max_equipe = $requete->fetch();

    $nom = ucfirst($_POST['nom']);
    $prenom = ucfirst($_POST['prenom']);
    $login = $_POST['login'];
    $mdp = "root";
    $jour = intval($_POST['jour']);
    $credit = intval($_POST['credit']);
    $equipe = $max_equipe['MAX(equipe)'] + 1;

    $ins = "INSERT INTO salaries (login, password, email, nom, prenom, jour, credits, equipe, chef) VALUES ('$login', '$mdp', 'email-temporaire@exemple.com','$nom', '$prenom', '$jour', '$credit', '$equipe', '1')";

    $inse = $bdd->prepare($ins);

    $insert = $inse->execute();

}

if (isset($_POST['submit_presta'])){

    $nomPresta = ucfirst($_POST['nom']);
    $ville = ucwords(strtolower($_POST['ville']));
    $cp = intval($_POST['cp']);
    $numRue = intval($_POST['num_rue']);
    $nomRue = ucwords($_POST['nom_rue']);

    var_dump($nomRue, $numRue, $cp, $ville, $nomPresta);

    $ins = "INSERT INTO prestataires (nom_p, ville, cp, num_rue, nom_rue) VALUES ('$nomPresta', '$ville', '$cp', '$numRue', '$nomRue')";

    $inse = $bdd->prepare($ins);

    $insert = $inse->execute();

}