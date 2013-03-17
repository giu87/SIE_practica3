<?php 

session_start();

$db=mysql_connect("localhost","","");
mysql_select_db("abanq");
$query = "SELECT * FROM facturascli WHERE cifnif = '".$_SESSION['dni_cliente']."'";
$result=mysql_query($query);
$num_result=mysql_num_rows($result);


for ($i=1; $i<=$num_result; $i++)	 //  ciclo para procesado
	$_POST[$i] = mysql_fetch_array($result);	

$_POST['num_facturas']=$num_result;
mysql_close($db);

?>