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
        <link rel="stylesheet" href="messa.css" /> 
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
            <a href="Sonometre.php"  class="nav-link    " >
                <span class="d-inline">Sonomètre</span>
            </a>    
          </li>
          

          <li class="nav-item">
            <a href="Fréquence.php"  class="nav-link   active " >
                <span class="d-inline">Fréquence Cardiaque</span>
            </a>    
          </li>
          

          
          <li class="nav-item">
            <a href="Saturation.php"  class="nav-link    " >
                <span class="d-inline">Saturation en oxygène</span>
            </a>
          </li>

              
          <li class="nav-item">
            <a href="Diagnostique.php"  class="nav-link    " >
                <span class="d-inline">Diagnostique</span>
            </a>
          </li>


          <li class="nav-item">
            <a href="Messagerie.php"  class="nav-link  btn_messagerie  " >
                <span class="d-inline">Messagerie</span>  
            </a>
          </li>
          
         
          <li class="nav-item">
            <a href="moncompte.php"  class="nav-link  d-xl-none  " >
                <span class="d-inline">Mon compte</span>  
            </a>
          </li>
          
            </ul>
        </div>
    </nav>
</aside>

<sectionn class="droite">
  <h1>
  Votre Résumé :
  </h1>
  
    <div class="graph">
      <canvas id="mycanvas" style="background: white;
    border-radius: 25px;
    box-shadow: 4px 4px 10px rgb(77, 77, 77, 0.8);
    padding: 20px 20px;"></canvas>
    </div>
    
    <!-- javascript -->
    <script type="text/javascript" src="jquery.min.js"></script>
    <script type="text/javascript" src="chart.min.js"></script>
    <script type="text/javascript" src="linegraph.js"></script>
  
</section>
<?php require("freq.php");?>

    </body>
</html>
