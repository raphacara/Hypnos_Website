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

  if(isset($_POST['submit'])){
    if(!empty($_POST['question']) AND !empty($_POST['reponse'])){
        $question=htmlspecialchars($_POST['question']);
        $reponse=nl2br(htmlspecialchars($_POST['reponse']));

        $inserer= $conn->prepare('INSERT INTO faq(question,reponse) VALUES(?,?)');
        $inserer->execute(array($question,$reponse));
        echo "<script>alert('Ajouter avec succès')</script>";
        header('Location:faq.php');
    

  }else{
    echo"Veuillez remplir les champs.";
  }
}

?>

<form method="post">
  
  <label for="question">Nouvelle question :</label>
  <input type="text" name="question" id="question">
  <br>
  <label for="reponse">Nouvelle réponse :</label>
  <textarea name="reponse" id="reponse"></textarea>
  <br>
  <input type="submit" name="submit" value="Ajouter">
</form>