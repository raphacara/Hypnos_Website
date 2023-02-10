<!DOCTYPE html>  
<?php
session_start();

if (!isset($_SESSION['connecté'])) {
    header('Location: connexion.html');
    exit;
}
header('la page sur laquelle vous êtes');

?>
<html>
    <head>
        <meta charset="utf-8" />  
        <link rel="stylesheet" href="Accueil.css" /> 
        <title>HYPNOS - Page admin</title>  
        <link rel="icon" type="png" href="images/iconoff.png" />
        <link rel="stylesheet" href="">

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
            <a href="Utilisateur.php"  class="nav-link   active " style="">
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
            <a href="Moncompte.html"  class="nav-link  d-xl-none  " style="">
                <span class="d-inline">Mon compte</span>  
            </a>
          </li>
          
            </ul>
        </div>
    </nav>
</aside>

<sectionn class="droite">
  <h1>
  Gestion des utilisateurs : 
  
  </h1>
    <form action="recherche.php" method="POST">
    <input type="text" name="search_string" placeholder="Rechercher..." class="recherche">
    <input type="submit" name="submit" value="Rechercher" class="boutonrecherche">
    <style>
    .recherche {
  padding: 10px; 
  border-radius: 50px; 
  border: 1px solid #ccc; /
  font-size: 16px;
  width: 50%; 
  margin-right: 10px; 
}
.boutonrecherche {
  padding: 10px 20px; 
  border-radius: 50px; 
  background-image: url("media/sand_background.png");
  color: white; 
  border: none; 
  font-size: 16px; 
  cursor: pointer; 
}
</style>
   </form>
   <form>
  <label>Prénom: <input type="text" id="prenom"></label>
  <label>Nom: <input type="text" id="nom"></label>                                                                                            
   <label>Email: <input type="email" id="email"></label>
  <label>Password: <input type="password" id="password"></label>
  <button id="add-user">Add</button>
</form>


  

 <?php
 require("utilisateurs.php");

?>


  
</section>


    </body>
</html>