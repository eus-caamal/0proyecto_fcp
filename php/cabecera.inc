<?php 
session_start();
if (!isset($_SESSION['contador'])) {
    $_SESSION['contador']=0;
	
}


 ?>


<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Blog del tec</title>
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/miestilo.css">

</head>
<body>
	<div class="container">
	
