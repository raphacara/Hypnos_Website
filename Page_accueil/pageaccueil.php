<!DOCTYPE html>
<?php session_start(); ?>


<html lang="fr">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hypnos</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style1.css" />
</head>


<section class="accueil">
    <div class="overlay">
        <div class="logo">
            <img src="img/logo__sand_sellers_noir.png" alt="logo" />
        </div>
        <ul class="menu">
            <li><a href="pageaccueil.php#home" class="menu__link">Home</a></li>
            <li><a href="#about" class="menu__link">About</a></li>
            <li><a href="#boutique" class="menu__link">Shop</a></li>
            <li><a href="faq.html" class="menu__link">FAQ</a></li>
            <li><a href="tips.html" class="menu__link">TIPS</a></li>
        </ul>
    </div>
</section>

<body>
    <div class="slider">
        <img src="img/maquette_1.png" alt="img1" class="img__slider active" />
        <img src="img/maquette_2.png" alt="img2" class="img__slider" />
        <div class="suivant">
            <i class="fas fa-chevron-circle-right"></i>
        </div>
        <div class="precedent">
            <i class="fas fa-chevron-circle-left"></i>
        </div>
    </div>
    <script src="app.js"></script>
</body>

<section class="haut">
    <div class="haut">

        <h1 class="haut">
            SAND SELLERS, LE GARDIEN DE VOS NUIT
        </h1>  
        <h2 class="haut">
            Dormir,
        </h2>
        <h3 class="haut">
            simplement
        </h3>
        <div id="home">...</div>
        <h4 class="haut" id="home">
            Car il suffit de connaître son sommeil pour rendre <br>ses nuits plus agréable.
        </h4>
        <button class="inscription">
        <a href="../Page_inscription_connexion/inscription.html" class="lien"><span style="color: white">Inscription</span></a>           
        </button>
        
        <button class="connexion">
            <span>Connexion</span>
        </button>  
        <img class="haut" src="img/dormir.JPG">
        <p class="haut">
            Pour en savoir plus sur notre entreprise,<br>c'est en-dessous !
        </p>              
    </div>
</section>
    
<section>
    <h1 class="milieu" id="about">Qui sommes-</h1 class="milieu">
    <h2 class="milieu">nous ?</h2 class="milieu">
    <div id="about">...</div>
    <p class="milieu1">
        Sand sellers est une entreprise fondée en 2022 spécialisée dans le domaine 
        de la santé, plus particulièrement dans les troubles du sommeil.
    </p>
    <p class="milieu2">
        Nous analysons et nous pouvons grâce à nos produits pallier l’indétectabilité de syndrômes 
        liés à votre sommeil.
    </p>
    <p class="milieu3">
         Notre objectif est simple, rendre votre sommeil le plus efficace et plus agréable possible 
        car il a un impact sur l'état général de notre santé mentale et physique.
    </p>
    <h3 class="milieu">Plus qu'un produit, un service</h3>
    <h4 class="milieu">Notre volonté est de vous fournir un service de qualité car votre santé est notre 
        priorité !</h4>
</section>

<section>
    <div id="rectanglegris">
    <img class="bas1"src="img/illustration_cerveau.png">
    <h5 class="bas1">Pour un cerveau efficace et stimulé</h5>
    <p class="bas1">
        Lorsque le cerveau est moins oxygéné, ilfavorise l’apparition de troubles cognitifs 
        (fatigue, trouble de l’attention...)
    </p>
    <img class="bas2" src="img/illustration_coeur.png">
    <h5 class="bas2">Et pour un coeur en bonne santé</h5>
    <p class="bas2">
        L'insuffisance cardiaque peut apparaître chez une personne qui souffre d'apnée 
        du sommeil non traitée.
    </p>
</section>

<section>  
<h1 class="boutique" id="boutique"> Une offre pour chaque besoin,<br> un prix pour chaque moyen</h1>
<h2 class="boutique" id="boutique"> Notre Boutique</h2>
<h3 class="boutique" id="boutique">Pour découvrir nos formules c'est ici !</h3>  
<h4 class="boutique" id="boutique">L'accéssoire qui vient de sortir</h5>
<h5 class="boutique" id="boutique">Le T-shirt</h5>  
<div id="shop">...</div>
<h6 class="boutique" id="boutique">Plusieurs designs et couleurs</h6> 
<img class="boutique" src="img/tshirt.jpg">
<button class="boutique">
    <span><a href="../Page_payement/Payement.html"><span style="color:#c9a236";>Acheter</span></a>
</button>  


</section>  

<section>  
        <div id="rectangleblanc"></div>
        <div id="rectangledoré"></div>

        <h1 class="classique">FORMULE CLASSIQUE</h1>
        <h1 class="premium">FORMULE PREMIUM</h1>

        <h2 class="classique">178 €</h2>
        <h2 class="premium">547 €</h2>

        <h3 class="classique">Profitez de l’expèrience Hypnos classique pour analyser en 
            détail votre nuit et les phases de votre sommeil.</h3>
        <h3 class="premium">Allez encore plus loin avec l’expèrience premium pour analyser 
            plus de paramètres environnementaux.</h3>

        <div id="traitnoir"></div>
        <div id="traitblanc"></div>

        <h4 class="classique">Analyse de la fréquence cardiaque<br>
            Analyse de la concentration d’oxygène <br>
            Analyse du niveau sonore <br>
            Analyse de la température<br>
            Analyse du monoxyde de carbonne<br>
            Alerte sur le téléphone</h4>
        <h4 class="premium">Analyse de la fréquence cardiaque<br>
            Analyse de la concentration d’oxygène <br>
            Analyse du niveau sonore <br>
            Analyse de la température<br>
            Analyse du monoxyde de carbonne<br>
            Alerte sur le téléphone</h4>
            
        <img class="classique" src="img/Check.jpg">
        <img class="premium" src="img/Checkdore.png">

        <button class="acheter1">
            <a href="../Page_payement/Payement.html"><span style="color: white";>Acheter</span></a>             
        </button>
        <button class="connexion">
<a href="../Page_inscription_connexion/connexion.html"> <span class="lien">Connexion</span> </a>

</button> 
        
        <button class="avenir">
        <a href="../Page_accueil/Avenir.html"><span style="color: #c9a236";> A Venir ! </span></a>  
        </button>  
        <div id="faq">...</div>

        <br><h5 class="cgu">Consultez nos conditions générales d'utilisation </br>
    
</section> 

</html>
