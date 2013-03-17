<?php
	session_start();
	session_destroy();
	$_POST['accion'] = 'principal';
	include("../index.html");

?>