<?php
foreach ($_GET as $key => $value) {$$key = $value;}
$fitxer = $nomfitxer."_".$lang.".html";
$contingut = file_get_contents("../pages/".$fitxer);
?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador Previser Grup</title>
    <link rel="stylesheet" href="../css/foundation.css">
    <link rel="stylesheet" href="../css/app.css">
      <link href="https://fonts.googleapis.com/css?family=Abel|Open+Sans&display=swap" rel="stylesheet"> 
      <link rel="icon" href="/favicon-32.png" sizes="32x32">
      <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
  </head>
  <body>
      
      <h1>Editor</h1>
      <p>Fes servir el quadre de text inferior per editar el fitxer</p>
<textarea name="editor_web" id="editor_web" rows="40"><?php echo $contingut;?></textarea>
      <button id="boto-editor-web" class="button">Guardar</button> <div id="hurra" style="display: none; color: #00ff00;">Fitxer guardat</div>
      <script>
      CKEDITOR.replace('editor_web');</script>
    <script src="../js/vendor/jquery.js"></script>
    <script src="../js/vendor/what-input.js"></script>
    <script src="../js/vendor/foundation.js"></script>
    <script src="../js/app.js"></script>
      <script>
      $("#boto-editor-web").click(function(){
    var contingut = CKEDITOR.instances.editor_web.getData();
    $.post("guardar.php",{nom_fitxer: '<?php echo $fitxer;?>', contents: contingut}, function(){
        $("#hurra").show().fadeOut();
    });
});
      </script>
  </body>
</html>
