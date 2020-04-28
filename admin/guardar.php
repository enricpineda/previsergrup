<?php
$contents = $_POST['contents'];
$fitxer = $_POST['nom_fitxer'];
file_put_contents("../pages/".$fitxer,$contents,LOCK_EX);
echo "ok";
?>