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
        <link rel="stylesheet" href="mes.css" /> 
        <title>HYPNOS - Page client</title>  
        <link rel="icon" type="png" href="media/iconoff.png" />
        <script src="traitement.js"></script>
    </head>

<body>
<div class="wrapper h-100">

   <aside class="sidebar p-0 navbar-fixed">
    <nav class="navbar navbar-expand flex-xl-column flex-row align-items-start p-0 scroll-lg">

        <div class="navbar-brand d-none d-xl-flex w-100 justify-content-center flex-column">
            <a href="../index.php">
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
            <a href="Fréquence.php"  class="nav-link    " >
                <span class="d-inline">Fréquence Cardiaque</span>
            </a>    
          </li>
          

          
          <li class="nav-item">
            <a href="Saturation.php"  class="nav-link    " >
                <span class="d-inline">Saturation en oxygène</span>
            </a>
          </li>

              
          <li class="nav-item">
            <a href="Diagnostique.php"  class="nav-link    ">
                <span class="d-inline">Diagnostique</span>
            </a>
          </li>


          <li class="nav-item">
            <a href="Messagerie.php"  class="nav-link  active  ">
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
</div>

<section class="droite">
  <h1>
  Vous souhaitez nous laisser un message ?
  </h1>
 
  <!-- <form method="post">
    <p>
      
      <input type="text" name="pseudo" id="pseudo" placeholder="Ex : abc123@"* size="30" />
      <br/>
      <textarea name="commentaire" id="commentaire" rows="10"* cols="50"**></textarea>
    </p>
  </form>
-->
<form action="https://formsubmit.co/kenny.clovis77@gmail.com" method="POST">

  
    <input type="text" name="your-name" value="" size="50" class="Nom" aria-required="true" aria-invalid="false" placeholder="Nom" require>
  
    <input type="text" name="your-prenom" value="" size="50" class="prenom" aria-invalid="false" placeholder="Prénom" require>
  
    <input type="email" name="email" placeholder="Email" value=<?php if (isset($_COOKIE['email'])) { echo $_COOKIE['email']; } else {echo "";};?> >

    <input type="hidden" name="_next" value="https://hypnosbysandsellers.000webhostapp.com/Page_client/thankyou.html">
    <input type="hidden" name="_subject" value="HYPNOS - Nouvel mail reçu">
    <input type="hidden" name="_captcha" value="false">
    <input type="text" name="your-tel" value="" size="50" class="tel" aria-invalid="false" placeholder="Téléphone">
  
  <div class="col-md-12">
    <input type="text" name="your-suj" value="" size="106" class="objet" aria-invalid="false" placeholder="Objet">
  </div>
  <div class="col-md-12">
    <textarea name="your-message" cols="98" rows="10" class="message" aria-invalid="false" placeholder="Message"></textarea>
  </div>
  <div class="col-md-12">
    <div style="margin-left:10px" class="contact-form-submit">
      <input type="submit" value="     Envoyer" class="envoyer" id="submit" onclick="popup(); validate()">

    </div>
  </div>

</form>

</section>


    </body>
</html>
