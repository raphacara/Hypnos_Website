<!DOCTYPE html>  
<?php
session_start();
if (!isset($_SESSION['connecté'])) {
    header('Location:../Page_inscription_connexion/connexion.html');
    exit;
}

?>

<html>
    <head>
        <meta charset="utf-8" />  
        <link rel="stylesheet" href="Moncompte.css" /> 
        <title>HYPNOS - Page client</title>  
        <link rel="icon" type="png" href="media/iconoff.png" />

    </head>

<body>
<div class="wrapper h-100">

   <aside class="sidebar p-0 navbar-fixed">
    <nav class="navbar navbar-expand flex-xl-column flex-row align-items-start p-0 scroll-lg">

        <div class="navbar-brand d-none d-xl-flex w-100 justify-content-center flex-column">
            <a href="/elearning/formation-home">
                <img src="media/logoblancH.png" alt="Logo Hypnos" class="logoblancH">
            </a>
                        <p>
                par <b>Sandsellers</b>
            </p>
                    </div>



        <div id="menu" class="collapse">
            <ul class="navbar-nav w-100 flex-md-column">

          <li class="nav-item">
            <a href="Sonometre.php"  class="nav-link    " style="">
                <span class="d-inline">Sonomètre</span>
            </a>    
          </li>
          

          <li class="nav-item">
            <a href="Fréquence.php"  class="nav-link    " style="">
                <span class="d-inline">Fréquence Cardiaque</span>
            </a>    
          </li>
          

          
          <li class="nav-item">
            <a href="Saturation.php"  class="nav-link    " style="">
                <span class="d-inline">Saturation en oxygène</span>
            </a>
          </li>

              
          <li class="nav-item">
            <a href="Diagnostique.php"  class="nav-link    " style="">
                <span class="d-inline">Diagnostique</span>
            </a>
          </li>


          <li class="nav-item">
            <a href="Messagerie.php"  class="nav-link  btn_messagerie  " style="">
                <span class="d-inline">Messagerie</span>  
            </a>
          </li>
          
         
          <li class="nav-item">
            <a href="moncompte.php"  class="nav-link  active  " style="">
                <span class="d-inline">Mon compte</span>  
            </a>
          </li>
          
            </ul>
        </div>
    </nav>
</aside>

<sectionn class="droite">
  <h1>
      
  </h1>
  <p>
    <?php
    
     $db_host     = "localhost";
     $db_username = "root";
     $db_password = "";
     $db_name = "hypnos";
 
  
     $conn = mysqli_connect($db_host, $db_username, $db_password, $db_name) or die("Error " . mysqli_error());
     
     
     $email=$_SESSION['email'];

     $sql="SELECT Nom,Prenom FROM client WHERE email='$email'";
     
     $result = $conn->query($sql);

     if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        echo "<p>Bonjour, ".$row['Nom']." ".$row['Prenom']."</p>";
        
       }
     } else {
         echo "Aucun utilisateur trouvé";
     }
     
          
     
    
     
 ?>
 

 
 
  </p>
  
  <button class="connexion">
    <a href="deconnexion.php"> <span class="lienor">Déconnexion</span> </a>

    
  </button> 


</section>


    </body>
</html>