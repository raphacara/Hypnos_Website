<?php 
session_start();

if (!isset($_SESSION['connecté'])) {
    header('Location: connexion.html');
    exit;
}
header('ref.php');
$con = mysqli_connect('localhost', 'root', '', 'hypnos') or die('impossible de se connecter à la base de données');
exit;




if (isset($_POST['ref'])){
    $ref_capteur = $_POST['pruduct_code'];
    
    $sql = "INSERT INTO capteur (numero_de_serie) VALUES ('$ref_capteur')";
    $select = mysqli_query($con, "SELECT * FROM capteur WHERE numero_de_serie='$ref_capteur'");  
    $re = "SELECT numero_de_serie FROM capteur ";

    $row = mysqli_fetch_array($select);
    if(is_array($row)){
        $_SESSION["numero_de_serie"] = $row ['pruduct_code'];
        $email = $_POST['email'];
        
        if( $row ['pruduct_code'] =$re){
        header("Location:moncompte.php");   
        
      
        $con->close();
    }
    }else{
        
        echo "<script>alert('Numéro de série incorrecte');</script>";
    }

    
}

  

    
  
   

  

?>