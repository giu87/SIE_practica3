<?php
	session_start();
	
	$path="/wamp/www/SIE_practica3/";

	$db=mysql_connect("localhost","","");
	mysql_select_db("abanq",$db);
	$query = "SELECT * FROM clientes WHERE clave='".$_POST['clave']."' AND cifnif='".$_POST['dni']."'";
	
	$result=mysql_query($query);
	$num_result=mysql_num_rows($result);
	$nombre = mysql_fetch_array($result);
	
	if($num_result>0){
		
		$_SESSION['dni_cliente'] = $_POST['dni'];
		$_SESSION['nombre_cliente'] = $nombre['nombre'];
		$_POST['accion'] = 'compras_cliente';
		
		include($path."logica_datos/compras_cliente.php");
		$_POST['accion'] = 'compras_cliente';
		include($path."index.html");
	}
	
	else{
		
		$_POST['accion'] = 'compras_cliente';
		include("../index.html");
		echo 'valori di login errati';
	}
?>