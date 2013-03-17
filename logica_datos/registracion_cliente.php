<?php
	session_start();
	//Conectar a  la base de datos	
	$db=mysql_connect("localhost","","");
	mysql_select_db("abanq",$db);

	$query = "INSERT INTO clientes(nombre,cifnif,telefono1,clave) VALUES ('".$_POST['nombre']." ".$_POST['apellido']."','".$_POST['dni']."','".$_POST['movil']."','".$_POST['clave']."')";
	
	$result = mysql_query($query);	
	mysql_close($db);
	
	$_POST['accion']="principal";
	include("../index.html");
?>