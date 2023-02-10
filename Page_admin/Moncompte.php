<?php
session_start();

if (!isset($_SESSION['connecté'])) {
    header('Location: connexion.html');
    exit;
}
header('Moncompte.php');
?>



<!DOCTYPE html>  
<html>
    <head>
        <meta charset="utf-8" />  
        <link rel="stylesheet" href="Moncompte.css" /> 
        <title>HYPNOS - Page admin</title>  
        <link rel="icon" type="png" href="images/iconoff.png" />

    </head>

<body>
<div class="wrapper h-100">

   <aside class="sidebar p-0 navbar-fixed">
    <nav class="navbar navbar-expand flex-xl-column flex-row align-items-start p-0 scroll-lg">

        <div class="navbar-brand d-none d-xl-flex w-100 justify-content-center flex-column">
            <a href="/elearning/formation-home">
                <img src="images/logoblancH.png" alt="Logo Hypnos" class="logoblancH">
            </a>
                        <p>
                par <b>Sandsellers</b>
            </p>
                    </div>



        <div id="menu" class="collapse">
            <ul class="navbar-nav w-100 flex-md-column">

        
        
          <li class="nav-item">
            <a href="Utilisateur.php"  class="nav-link    " style="">
                <span class="d-inline">Utilisateurs</span>
            </a>    
          </li>
          

          
          <li class="nav-item">
            <a href="Contenu.html"  class="nav-link    " style="">
                <span class="d-inline">Contenu</span>
            </a>
          </li>

              
          <li class="nav-item">
            <a href="Curseur.html"  class="nav-link    " style="">
                <span class="d-inline">Curseurs</span>
            </a>
          </li>


          
          
         
          <li class="nav-item">
            <a href="Moncompte.html"  class="nav-link  active  " style="">
                <span class="d-inline">Mon compte</span>  
            </a>
          </li>
          
            </ul>
        </div>
    </nav>
</aside>

<sectionn class="droite">
  <h1>
  Administrateur
  </h1>
  <p>
  email: admin@gmail.com <br> mot de passe: admin
  </p>
  
  <button class="connexion" name="deconnexion">
    <a href="deconnexion2.php"> <span class="lienor">Déconnexion</span> </a>
  </button> 
</section>


    </body>
</html>