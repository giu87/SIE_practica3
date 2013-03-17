<?php 
// variables iniciales
session_start();
$path="/wamp/www/SIE_practica3/";
if (!isset($_POST['accion'])) $_POST['accion']="principal"; 
include($path."logica_datos/facturalux_familias.php");
for ($i=1; $i<=$_POST['num_familias']; $i++)
    if (!isset($_SESSION[$_POST["familia"][$i]["descripcion"]]))
		$_SESSION[$_POST["familia"][$i]["descripcion"]]=0.0;
		
include($path."logica_datos/facturalux_empresa_marca.php");
?>