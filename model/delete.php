<?php
if (isset($_GET['id'])) {

    $requete = $bdd->query("SELECT * FROM historique H, formations F, salaries S WHERE H.id_h = " . $_GET['id'] . " AND S.id_s = H.id_s AND F.id_f = H.id_f");
    $salarie = $requete->fetch();

    $new_credits = ($salarie['credits'] + $salarie['credits_f']);
    $new_jour = ($salarie['jour'] + $salarie['nb_jour']);

    $sql2 = "UPDATE salaries SET credits = " . $new_credits . ", jour = " . $new_jour . " WHERE id_s=" . $salarie['id_s'] . " ";
    $stmt = $bdd->prepare($sql2);
    $stmt->execute();

    $_SESSION['credits'] = $new_credits;
    $_SESSION['jour'] = $new_jour;

    $sql = "DELETE FROM historique WHERE id_h = " . $_GET['id'] . " ";
    $exe = $bdd->exec($sql);

    header("location:http://localhost/M2l/profile");
}
