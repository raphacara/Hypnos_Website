<?php
session_start();
$con = mysqli_connect('localhost', 'root', '', 'hypnos') or die('impossible de se connecter à la base de données');




if (isset($_POST['Connexion'])){
    $email = $_POST['email'];
    $mot_de_passe = $_POST['mdp'];

      
    $select = mysqli_query($con, "SELECT * FROM client WHERE email='$email'");  
    $row = mysqli_fetch_array($select);


    if(password_verify($mot_de_passe,$row['mot_de_passe'])){

        if(is_array($row)){
            session_start();
            $_SESSION["email"] = $row ['email'];
            $_SESSION["mot_de_passe"] = true;
            $_SESSION["connecté"] = true;
         
            header("Location:../Page_client/moncompte.php");
            exit;
            
        }else{ 
            echo "<script>alert('Email ou Mot de passe incorrect');</script>";
            
    }


    }
    


}

?>
