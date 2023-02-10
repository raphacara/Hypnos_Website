<?php
session_start();
if(!$_SESSION['mdp']){
    header('Location:connexion.html');
}
  // Connexion à la base de données
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "admin";
  $conn = new mysqli($servername, $username, $password, $dbname);
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  if(isset($_GET['id']) AND !empty($_GET['id'])){
    $id=$_GET['id'];
    $sql="DELETE FROM faq WHERE id=$id";
    if($conn->query($sql)==TRUE){
      echo"<script>alert('Supprimer avec succès')</script>";
      header('Location:faq.php');
    

    }else{
      echo"Aucune question trouvée";
    }
    

       
    

  }else{
    echo"Aucun identifiant trouvé";
  }


?>

