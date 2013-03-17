<?php 
session_start();
//Conectar a  la base de datos
$db=mysql_connect("localhost","","");
mysql_select_db("abanq",$db);
$query = "SELECT * FROM familias";
$result=mysql_query($query);
$num_result=mysql_num_rows($result);
for ($i=1; $i<=$num_result; $i++)	 //  ciclo para procesado
	{$_POST["familia"][$i]=mysql_fetch_array($result);
	}
$_POST['num_familias']=$num_result;
mysql_close($db);
?> 

