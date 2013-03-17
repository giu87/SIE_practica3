<?php 
session_start();
$path="/";
//Conectar a  la base de datos
$db=mysql_connect("localhost","","");
mysql_select_db("abanq");
$query = "SELECT logo FROM empresa";
$result=mysql_query($query);
$empresa[0]=mysql_fetch_array($result);
$result=$empresa[0]["logo"];
$_POST['logo']=$result;
mysql_close($db);


/*$nuevo_dir=$path."img/";
chdir($nuevo_dir);

if (!file_exists("marca.jpg"))
	{$archivo="marca.xpm";
     $fp = fopen($archivo,"w"); 
     fwrite($fp, $_POST['logo']); 
     $sal=system('"c:\Archivos de programa\ImageMagick-6.2.7-Q16\convert" marca.xpm marca.jpg');}

$nuevo_dir=$path;
chdir($nuevo_dir);*/
?> 

