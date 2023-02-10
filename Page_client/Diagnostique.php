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
        <link rel="stylesheet" href="Diagnostique.css" /> 
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
            <a href="Diagnostique.php"  class="nav-link   active " style="">
                <span class="d-inline">Diagnostique</span>
            </a>
          </li>


          <li class="nav-item">
            <a href="Messagerie.php"  class="nav-link  btn_messagerie  " style="">
                <span class="d-inline">Messagerie</span>  
            </a>
          </li>
          
         
          <li class="nav-item">
            <a href="moncompte.php"  class="nav-link  d-xl-none  " style="">
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
  
  <div class="chartCard">
    <div class="chartBox">
      <canvas id="myChart"></canvas>
    </div>
  </div>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script>
    // setup
    //const chartWidth = document
    //const document.getElementbyId('myChart').getContext('2d')
//    const gradientSegment = ctx.createLinearGradient(0,0, )


  // setup 
  const data = {
    labels: ['Score', '..'],
    datasets: [{
      label: 'Diagnostique',
      data: [90, 10],
      backgroundColor: [
        'rgba(36, 157, 249,1)',
        'rgba(0, 0, 0, 0.1)'
      ],
      borderColor: [
        'rgba(36, 157, 249,1)',
        'rgba(0, 0, 0, 0)'
      ],
      borderWidth: 2,
      cutout: '80%',
      //circumference: 180,
      //rotation: 270
    }]
  };

  // gaugeChartText plugin block
const gaugeChartText = {
  id: 'gaugeChartText',
  afterDatasetsDraw(chart, args,pluginOptions) {
    const { ctx, data, chartArea: {top, bottom, left, right, width, height
    }, scales:{r} } = chart;

    ctx.save();
    const xCoor = chart.getDatasetMeta(0).data[0].x;
    const yCoor = chart.getDatasetMeta(0).data[0].y;
    const score = data.datasets[0].data[0];
    let rating;

    if(score < 30) {rating = 'Très inquiétant'};
    if(score >= 30 && score <=45) {rating = 'Inquiétant'};
    if(score > 45 && score<=60) {rating = 'Peu efficace'};
    if(score > 60  && score<=75) {rating = 'Correct'};
    if(score > 75 && score<=90) {rating = 'Très efficace'};  
    if(score > 90 && score<=100) {rating = 'Parfait'};

    ctx.font = '34px sans-serif';
    ctx.fillStyle='#666';
    ctx.textBaseline='top';
    ctx.textAlign= 'center';
    ctx.fillText(score + '%', xCoor, yCoor);
    
    ctx.font = '22px sans-serif';
    ctx.textBaseline='top';
    ctx.textAlign= 'center';
    ctx.fillText(rating, xCoor, yCoor - 40);
    
  }
}

  // config 
  const config = {
    type: 'doughnut',
    data,
    options: {
      aspectRatio: 1.5,
      plugins: {
        legend: {
          display: false
        },
        tooltip: {
          enabled: false
      }
    }
  },
  plugins: [gaugeChartText]
};

  // render init block
  const myChart = new Chart(
    document.getElementById('myChart'),
    config
  );
  </script>

<div class="trait"></div>
<footer class="footer">
  
  <ul class="menu">
      <li class="menu__item">
          <a class="menu__link"  href="home">Accueil</a>
      </li>
      <li class="menu__item">
          <a class="menu__link"  href="product">Produit</a>
      </li>
      <li class="menu__item">
          <a class="menu__link"  href="histoire">Histoire</a>
      </li>
      <li class="menu__item">
          <a class="menu__link"  href="contact">Contact</a>
      </li>
      <li class="menu__item">
          <a class="menu__link"  href="login">Connexion</a>
      </li>

  </ul>

  <section class="legaux">
    <ul class="copyright" > <a href="conditions" >Conditions d'utilisation</a>  <p class="separation">|</p>   <a href="/public/privacy" >Politique de confidentialité</a></ul>
  </section>
</footer>
</section>


    </body>
</html>
