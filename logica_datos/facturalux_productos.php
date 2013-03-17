<?php 
session_start();
$nombre=$_POST['accion'];
//Conectar a  la base de datos
$db=mysql_connect("localhost","","");
mysql_select_db("abanq");
$query = "SELECT * FROM articulos WHERE codfamilia = ( SELECT codfamilia FROM familias WHERE descripcion='$nombre' )";


/*

$query = "SELECT * FROM familias WHERE descripcion='$nombre' ";
$result=mysql_query($query);
$familias[0]=mysql_fetch_array($result);
$result=$familias[0]["codfamilia"];
$query = "SELECT * FROM articulos WHERE codfamilia=".$result." "; 

*/

$result=mysql_query($query);
$num_result=mysql_num_rows($result);
for ($i=1; $i<=$num_result; $i++)	 //  ciclo para procesado
	{$_POST[$i]=mysql_fetch_array($result);
	}
$_POST['num_productos']=$num_result;
mysql_close($db);
?> 

