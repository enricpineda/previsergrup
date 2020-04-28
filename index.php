<?php if (isset($_GET['lang'])&& $_GET['lang']!='') {$lang = $_GET['lang'];}
else {$lang='cat';}?>
<!doctype html>
<html class="no-js" lang="ca" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Previser grup</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
      <link href="https://fonts.googleapis.com/css?family=Abel|Open+Sans&display=swap" rel="stylesheet"> 
      <link rel="icon" href="/favicon-32.png" sizes="32x32">
  </head>
  <body>
    <div class="video-container">
	<video autoplay loop muted width="1280" height="720" playsinline>
		<source src="video/portada.mp4" type="video/mp4">
	</video>
</div>
      
      <div id="canvia-idioma-portada"><a href="/cat" class="boto2">CAT</a>&nbsp;&nbsp;<a href="/es" class="boto2">ESP</a>&nbsp;&nbsp;<a href="tel:+34972964030" class="show-for-small-only"><img src="img/phone-round.svg" style="width: 40px; height: auto;" alt="Truca a Previser Grup" /></a></div>
        <div class="menupral-container">
            <div class="logo-portada">
      <?php if ($lang == "cat") { ?>
                <img src="img/logo_blanc2.svg" class="imatge-logo-portada" alt="Logo Previser Grup">
    
          
          <!--<h1>SOM CONSULTORS</h1>-->
              <h2 class="text-blanc">Tenim la solució a totes les seves necessitats empresarials</h2>
              
                <ul class="menupral-portada">
              <li><a href="que-es-previser/" class="boto">Què és Previser Grup</a></li>
                  <li><a href="serveis/" class="boto">Serveis</a>
                    </li>
                  <li><a href="qui-som/" class="boto">Qui som</a></li>
                  <li><a href="contacte/" class="boto">Contacte</a></li>
                  
              </ul>
         
<?php } else { ?>
      <img src="img/logo_blanc2_es.svg" class="imatge-logo-portada" alt="Logo Previser Grup">
                <br>
              <h2 class="text-blanc">Tenemos la solución a todas sus necessidades empresariales</h2>
                
              <ul class="menupral-portada">
              <li><a href="que-es-previser/es" class="boto">Qué es Previser Grup</a></li>
                  <li><a href="serveis/es" class="boto">Servicios</a></li>
                  <li><a href="qui-som/es" class="boto">Quienes somos</a></li>
                  <li><a href="contacte/es" class="boto">Contacto</a></li>

              </ul>
          
      
      
      <?php } ?>
                
          </div></div>
    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>
