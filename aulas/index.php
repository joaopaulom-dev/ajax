<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso AJAX - João Ribeiro</title>
</head>
<body>
    <h2>Curso AJAX - Aulas</h2>
	<ul>
		<li><a href="http://localhost/AJAX/aulas/index.php?p=001">001</a>
		<li><a href="http://localhost/AJAX/aulas/index.php?p=002">002</a>
		<li><a href="http://localhost/AJAX/aulas/index.php?p=003">003</a>
	</ul>
	<br>
	<hr>
	<br>
	
	<?php
	//Valida e pega aula para apresentar na tela
	if(!empty($_GET['p']))
		include_once $_GET['p'] . '/page.php';
	?>
	
	<!-- jQuery - CDN -->
	<script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
</body>
</html>