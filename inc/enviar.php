<?php
foreach ($_POST as $key => $value){$$key = $value;}
$missatge = "Has rebut un nou missatge de contacte des de la web<br>";
$missatge .= "---------------------------------------------------<br>";
$missatge .= "Nom i cognoms: ".$nom."<br>";
$missatge .= "Correu electrònic: ".$correu."<br>";
$missatge .= "Ens ha conegut per: ".$contacte."<br>";

    $missatge .= "Ens ha deixat aquest missatge: <br>".$missatge_usuari;

$missatge .= "---------------------------------------------------------<br>";

/*Paràmetres d'enviament*/

$pera = "info@previsergrup.com";
$tema ="Missatge des de la web de Previser";
$headers = "From: " . strip_tags($correu) . "\r\n";
$headers .= "Reply-To: ". strip_tags($correu) . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

/*Envia*/
mail($pera,$tema,$missatge,$headers);
?>
