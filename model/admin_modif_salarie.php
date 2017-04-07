<?php

try {
    $bdd = new PDO("mysql:host=localhost;dbname=M2l;charset=utf8", "root", "",
        array(
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8'
        ));
}
catch (Exception $e) {

}

$new_credit_salarie = $_POST['credit_salarie'];
$new_jour_salarie = $_POST['jour_salarie'];
$id_salarie = $_POST['id_salarie'];

var_dump($id_salarie, $new_credit_salarie, $new_jour_salarie);
$ins = "UPDATE salaries SET jours='".$new_jour_salarie."', credits='".$new_credit_salarie."' WHERE id_s='".$id_salarie."' ";

$inse = $bdd->prepare($ins);

$inse->execute();