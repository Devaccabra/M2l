<?php
if ( 0 < $_FILES['file']['error'] ) {
    echo 'Error: ' . $_FILES['file']['error'] . '<br>';
}
else {
    $bdd->exec("UPDATE salaries SET image='".$_FILES['file']['name']."' WHERE id_s=".$_SESSION['id_s']." ");

    move_uploaded_file($_FILES['file']['tmp_name'], 'C:/wamp/www/M2l/images/avatar/' . $_FILES['file']['name']);
}
