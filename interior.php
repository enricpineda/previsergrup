<?php
$pagina = $_GET['pagina'];
if (isset($_GET['lang'])&& $_GET['lang']!='') {$lang = $_GET['lang'];}
else {$lang='cat';}
?>

<!doctype html>
<html class="no-js" lang="ca" dir="ltr">
  <head>
      <base href="http://www.previsergrup.es/">
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="referrer" content="no-referrer">
    <title>Previser grup</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
      <link href="https://fonts.googleapis.com/css?family=Abel|Open+Sans&display=swap" rel="stylesheet"> 
      <link rel="icon" href="/favicon-32.png" sizes="32x32">
      
  </head>
  <body>
    
      
      <div id="barra-superior-interna" class="show-for-medium">
          
          <div class="grid-container">
          <div class="grid-x grid-margin-x align-middle">
              <div class="cell medium-3"><a href="/"><img src="img/logo_blanc.svg" style="width: auto; height: 130px" alt="Logotip Previser Grup"></a></div>
              
              <div class="cell medium-9 text-right"> 
              <?php include("inc/menu-superior-interior.html");?>
              </div>
              </div>
          </div>
          
         </div>
      
       <div id="barra-superior-interna" class="show-for-small-only">
          
          <div class="grid-container">
          <div class="grid-x grid-margin-x align-bottom">
              <div class="cell small-5"><img src="img/logo_blanc.svg" ></div>
              
              <div class="cell small-7 text-right"> <img src="img/menu-mobil.svg" style="width: 32px; height: auto;" id="icona-menu-mobil"/>
              </div>
              </div>
          </div>
          <div id="menumobil">
           <?php include("inc/menu-superior-interior.html");?>
           </div>
         </div>
      
      
      
     <?php include("pages/".$pagina."_".$lang.".html");?>
      
  
  
          
      
    
      
      
      <div class="footer-interior">
      
          <div class="grid-container">
            <div class="grid-x grid-margin-x">
                <div class="cell small-12 medium-4"><a href="https://goo.gl/maps/ayCeKMvzHZEsj3k58" target="_blank"><img src="img/mapa_previser.png"></a></div>
                <div class="cell small-12 medium-4"><p><strong>Previser Grup</strong><br />C/ Marquès de Caldes de Montbui 125<br/>17003 Girona</p><p>Tel: <a href="tel:972 96 40 30">972 96 40 30</a><br /><a href="mailto:info@previsergrup.com">info@previsergrup.com</a></p>
                    <a href="https://twitter.com/previserG">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="26" height="26"
viewBox="0 0 172 172"
style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M171.04387,36.8756c-6.22776,2.76503 -12.92067,4.6256 -19.94952,5.47837c7.15805,-4.31551 12.6881,-11.11178 15.27224,-19.22596c-6.71875,3.97956 -14.16106,6.87379 -22.06851,8.42428c-6.33113,-6.74459 -15.34976,-10.95673 -25.35036,-10.95673c-19.17428,0 -34.73077,15.55649 -34.73077,34.73077c0,2.71335 0.3101,5.375 0.90445,7.90746c-28.86479,-1.44712 -54.44772,-15.29808 -71.58053,-36.30709c-2.9976,5.14242 -4.70312,11.11178 -4.70312,17.49459c0,12.04206 6.1244,22.66286 15.45312,28.89062c-5.71094,-0.18088 -11.0601,-1.73137 -15.73738,-4.34135c0,0.15505 0,0.28426 0,0.43931c0,16.82271 11.96454,30.85456 27.85697,34.05889c-2.92007,0.80108 -5.96935,1.21454 -9.14783,1.21454c-2.2482,0 -4.41887,-0.20673 -6.53786,-0.62019c4.41887,13.77344 17.23617,23.85156 32.43088,24.10997c-11.86117,9.32872 -26.84915,14.85878 -43.12921,14.85878c-2.81671,0 -5.55589,-0.15505 -8.26923,-0.46515c15.34976,9.84556 33.61959,15.58233 53.23317,15.58233c63.87981,0 98.81731,-52.92308 98.81731,-98.79147c0,-1.52463 -0.02584,-3.02344 -0.10337,-4.52223c6.79628,-4.85817 12.6881,-10.98258 17.33954,-17.95974"></path></g></g></svg></a>
                    &nbsp;&nbsp;
                    
                   <a href="https://www.instagram.com/previser.grup/" target="_blank"> <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="26" height="26"
viewBox="0 0 172 172"
style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M57.33333,21.5c-19.7585,0 -35.83333,16.07483 -35.83333,35.83333v57.33333c0,19.7585 16.07483,35.83333 35.83333,35.83333h57.33333c19.7585,0 35.83333,-16.07483 35.83333,-35.83333v-57.33333c0,-19.7585 -16.07483,-35.83333 -35.83333,-35.83333zM57.33333,35.83333h57.33333c11.85367,0 21.5,9.64633 21.5,21.5v57.33333c0,11.85367 -9.64633,21.5 -21.5,21.5h-57.33333c-11.85367,0 -21.5,-9.64633 -21.5,-21.5v-57.33333c0,-11.85367 9.64633,-21.5 21.5,-21.5zM121.83333,43c-3.95804,0 -7.16667,3.20863 -7.16667,7.16667c0,3.95804 3.20863,7.16667 7.16667,7.16667c3.95804,0 7.16667,-3.20863 7.16667,-7.16667c0,-3.95804 -3.20863,-7.16667 -7.16667,-7.16667zM86,50.16667c-19.7585,0 -35.83333,16.07483 -35.83333,35.83333c0,19.7585 16.07483,35.83333 35.83333,35.83333c19.7585,0 35.83333,-16.07483 35.83333,-35.83333c0,-19.7585 -16.07483,-35.83333 -35.83333,-35.83333zM86,64.5c11.85367,0 21.5,9.64633 21.5,21.5c0,11.85367 -9.64633,21.5 -21.5,21.5c-11.85367,0 -21.5,-9.64633 -21.5,-21.5c0,-11.85367 9.64633,-21.5 21.5,-21.5z"></path></g></g></svg></a>
                    &nbsp;&nbsp;
                    
                <a href="https://www.facebook.com/previsersl/">    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="26" height="26"
viewBox="0 0 172 172"
                                                                        style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M86,6.88c-43.62608,0 -79.12,35.49048 -79.12,79.12c0,43.62952 35.49392,79.12 79.12,79.12c43.62952,0 79.12,-35.49048 79.12,-79.12c0,-43.62952 -35.49048,-79.12 -79.12,-79.12zM110.08,55.04h-11.3176c-6.66672,0 -9.3224,1.5652 -9.3224,6.21264v10.98736h20.64l-3.44,17.2h-17.2v44.72h-20.64v-44.72h-10.32v-17.2h10.32v-9.54256c0,-14.534 5.79984,-24.85744 22.63864,-24.85744c9.01968,0 18.64136,3.44 18.64136,3.44z"></path></g></g></svg></a>
                    
                     &nbsp;&nbsp;
                    <a href="https://www.linkedin.com/company/10095730" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="26" height="26"
viewBox="0 0 172 172"
style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M86,6.88c-43.62608,0 -79.12,35.49048 -79.12,79.12c0,43.62952 35.49392,79.12 79.12,79.12c43.62608,0 79.12,-35.49048 79.12,-79.12c0,-43.62952 -35.49392,-79.12 -79.12,-79.12zM61.92,120.4h-13.76v-51.6h13.76zM55.04,58.48c-3.8012,0 -6.88,-3.0788 -6.88,-6.88c0,-3.8012 3.0788,-6.88 6.88,-6.88c3.8012,0 6.88,3.0788 6.88,6.88c0,3.8012 -3.0788,6.88 -6.88,6.88zM127.28,120.4h-13.76v-17.2v-8.6c0,-6.622 -5.418,-12.04 -12.04,-12.04c-6.622,0 -12.04,5.418 -12.04,12.04v25.8h-13.76v-51.6h13.76v6.24704c4.01792,-3.85968 9.46688,-6.24704 15.48,-6.24704c12.3496,0 22.36,10.0104 22.36,22.36z"></path></g></g></svg></a>
                    
                </div>
                <div class="cell small-12 medium-4">
                    <?php if ($lang == "cat"){ ?>
                    <p><a href="privacitat/">Política de privacitat</a></p>
                <p><a href="avislegal/">Avís legal</a></p>
                    <?php } else { ?>
                    <p><a href="privacitat/es">Política de privacidad</a></p>
                <p><a href="avislegal/es">Aviso legal</a></p>
                    
                    <?php } ?>
                </div>
              </div>
          </div>
      
      </div>

    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>
