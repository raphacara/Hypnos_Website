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
?>

<!DOCTYPE html>

<html lang="en" >
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HYPNOS - Tips</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="faqq.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

  <section class="accueil">
    <div class="overlay">
        <div class="logo">
            <img src="media/logo__sand_sellers_noir.png" alt="logo">
        </div>
        <ul class="menu">
            <li><a href="../#home" class="menu__link">Home</a></li>
            <li><a href="../#about" class="menu__link">About</a></li>
            <li><a href="../#shop" class="menu__link">Shop</a></li>
            <li><a href="../Page_accueil/faq.html" class="menu__link">FAQ</a></li>
            <li><a href="../Page_accueil/tips.html" class="menu__link">TIPS</a></li>
        </ul>
    </div>
</section>

<body>


<main class="card">

  <div class="hero">
    <img src="media/iconoff.png" alt="section image" class="img" style="width:200px;height:200px;">
  </div>
  <a href="Contenu.html" class="cmd">Retour</a>
  <h2 class="title">FAQ</h2>

  <a href="ajouter.php"><button class="cmd">Ajouter une question</button></a>
   
  <?php
 $recupe= $conn->query('SELECT * FROM faq');
 while($faq=$recupe->fetch_array()){
    ?>
    <div class="acc-container" >
    <button class="acc-btn"><?=$faq['question'];?></button>
    <div class="acc-content"><p><?=$faq['reponse'];?></p></div>
    <a href="supprimer.php?id=<?= $faq['id']; ?>">
    <button class="cmd">Supprimer</button>
    </a>
    <a href="modifier.php?id=<?= $faq['id']; ?>">
    <button class="cmd">Modifier</button>
    </a>

<br>
<?php
 }
?>
</div>
</main>


<!-- partial -->
  <script  src="faq.js"></script>
</body>
</html>

