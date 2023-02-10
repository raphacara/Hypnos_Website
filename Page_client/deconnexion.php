<?php
session_start();
if(!$_SESSION['mdp']){
    header('Location:../Page_inscription_connexion/connexion.html');
}
$_SESSION=array();
session_destroy();
header('Location:../Page_accueil/pageaccueil.php');

?>
