<?php
// precio total
session_start();
$path="../";
$_SESSION['total']=0.0;
$_SESSION['sub_total']=0.0;  
for ($i=1; $i<=$_POST['num_productos']; $i++)
	 	$_SESSION['sub_total']+=$_SESSION[$_POST[$i]["codbarras"]]*$_POST[$i]["pvp"];
	   
for ($i=1; $i<=$_POST['num_familias']; $i++)
    {if ($_POST["familia"][$i]["descripcion"]==$_POST['accion']) 
		 	$_SESSION[$_POST["familia"][$i]["descripcion"]]=$_SESSION['sub_total'];
	 $_SESSION['total']+=$_SESSION[$_POST["familia"][$i]["descripcion"]];  
	} 
?>