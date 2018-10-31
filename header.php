<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.3/css/bootstrap-select.min.css">
		<link href="css/open-iconic/font/css/open-iconic-bootstrap.css" rel="stylesheet">
		<link rel="stylesheet" href="css/typeaheadjs.css">
		<link rel="stylesheet" href="https://use.typekit.net/dwh0ovi.css">
		<link rel="stylesheet" type="text/css" href="css/map-icons.min.css">
		<!--
			<link rel="stylesheet" href="css/index.css">
			<link rel="stylesheet" href="css/mobile.css">
		-->
		<link rel="stylesheet" href="css/form.css">
		<?php
		$local = "http://localhost/~maxwell/kamal";

		$json = file_get_contents($local.'/php/sexos.php');
		$sexos = json_decode($json);

		$json = file_get_contents($local.'/php/localidades.php');
		$localidades = json_decode($json);

		$json = file_get_contents($local.'/php/lugares.php');
		$lugares = json_decode($json);

		$json = file_get_contents($local.'/php/festivales.php');
		$festivales = json_decode($json);

		$json = file_get_contents($local.'/php/etiquetas.php');
		$etiquetas = json_decode($json);

		$loc = $_GET['loc'];

		?>
	</head>
	<body>