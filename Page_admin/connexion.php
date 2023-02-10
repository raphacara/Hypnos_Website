<?php
session_start();
if(isset($_POST['Connexion'])){
    if(!empty($_POST['email']) AND !empty($_POST['mdp'])){
        $email="admin@gmail.com";
        $mdp="admin";

        $email_saisi= htmlspecialchars($_POST['email']);
        $mdp_saisi=htmlspecialchars($_POST['mdp']);
        if($email_saisi==$email AND $mdp_saisi==$mdp){
            $_SESSION['mdp'] = $mdp_saisi;
            header('Location:Utilisateur.php');

        }else{
            echo"<script>alert('Email ou Mot de passe incorrect');</script>";
        }
    }else{
        echo"<script>alert('Veuillez remplir tous les champs!');</script>";
    }

}




?>