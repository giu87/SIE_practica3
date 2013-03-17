<?php 
session_start();    
$path="/wamp/www/SIE_practica3/";
$_POST['accion']=$_GET['categoria'];
include($path."logica_datos/facturalux_productos.php");
include($path."index.html");
?> 