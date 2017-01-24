<?php
$chaine="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
$nb = 1;
$choix = 2;
$mdp="";
$tab_mdp = array();
$mdp_rand = array();

for($j = 0; $j < $nb; $j++)
{
    $mdp="";

    for($i = 0; $i < $choix; $i++)
    {
        $mdp .= $chaine[rand(0,25)];
    }
    for($i = 0; $i < $choix; $i++)
    {
        $mdp .= $chaine[rand(26,51)];
    }
    for($i = 0; $i < $choix; $i++)
    {
        $mdp .= $chaine[rand(52,61)];
    }
    $mdp = str_shuffle($mdp);
    $tab_mdp = $mdp;
    $mdp_rand = sha1($mdp);
}
var_dump($tab_mdp);
var_dump($mdp_rand);