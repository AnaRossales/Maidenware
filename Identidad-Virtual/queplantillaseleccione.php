<?php
$plantillaselecionada =$_POST['plantilla'];
if($plantillaselecionada==""){
	header('Location: index.html');
}else{
	echo'<!DOCTYPE HTML>
	<html>';
	//Aqui lo que vamos a hacer, es traer la plantilla que el usuario selecciono, la cual en base al if, podrá seleccionar 
	$plantillaselecionada =$_POST['plantilla'];
	if($plantillaselecionada=='1'){
		echo'<head>
	<title>Plantilla 1</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assetsplantilla1/assets/css/main.css" />
	<noscript><link rel="stylesheet" href="assetsplantilla1/assets/css/noscript.css" /></noscript>
	</head><body class="is-preload">';
	include 'incluyemelasvariablesuwu.php';
		include 'plantilla1.php';
	}
	if($plantillaselecionada=='2'){
		echo'
			<head>
				<title>Plantilla 2</title>
				<meta charset="utf-8" />
				<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
				<link rel="stylesheet" href="assetsplantilla2/assets/css/main.css" />
				<noscript><link rel="stylesheet" href="assetsplantilla2/assets/css/noscript.css" /></noscript>
			</head>
			<body class="is-preload">';
		include 'incluyemelasvariablesuwu.php';
		include 'plantilla2.php';
	}
	if($plantillaselecionada=='3'){
		echo'
			<head>
				<title>Plantilla 3</title>
				<meta charset="utf-8" />
				<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
				<link rel="stylesheet" href="assetsplantilla3\assets\css\main.css" />
				<noscript><link rel="stylesheet" href="assetsplantilla3\assets/css/noscript.css" /></noscript>
			</head>
			<body class="is-preload">';
		include 'incluyemelasvariablesuwu.php';
		include 'plantilla3.php';
	}
	echo '</body>
	</html>';
}

?>