<?php
session_start();

if (!isset($_SESSION['connecté'])) {
    header('Location: connexion.html');
    exit;
}
header('modifier.php');

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
    $question=$_GET['question'];
    $reponse=$_GET['reponse'];
    $sql="UPDATE faq SET question=$question, reponse=$reponse WHERE id=$id";

  
    if($conn->query($sql)==TRUE){
      echo"modifier";
      

      

      

    }else{
      echo"Aucune question trouvée";
    }
    

       
    

  }else{
    echo"Aucun identifiant trouvé";
  }

?>
<!DOCTYPE html>
<html>
<body>
<form method="post">
  
  <label for="question">Nouvelle question :</label>
  <input type="text" name="question" id="question" value="<?=$question;?>">
  <br>
  <label for="reponse">Nouvelle réponse :</label>
  <textarea name="reponse" id="reponse">
  <?= $reponse; ?>
  </textarea>
  <br>
  <input type="submit" name="submit" value="Modifier">
</form>
</body>
</html>

