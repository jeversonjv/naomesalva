<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title> Cursos </title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?=$base_url?>assets/css/layout.css">
	<link rel="shortcut icon" href="<?=$base_url?>assets/img/favicon.ico" />
	<meta name="theme-color" content="#19181e">

</head>
<body>	

	<!-- BEGIN Header -->
	<header class="header">
		<a href="<?=$base_url?>cursos" > <img class="logo" src="<?=$base_url?>assets/img/logoBranca.png" alt="Logo marca" /></a>
		<nav class="nav">
			<p class="nome" > Olá, <?=$nome?> </p>
			<a class="logout" href="<?=$base_url?>login/sair"> Sair </a>
		</nav>
	</header>
	<!-- END Header -->

	<!-- BEGIN Conteudo principal -->
	<section class="container">
		<?= $conteudo ?>
	</section>
	
	<!-- END Conteudo principal -->

	<script src="<?=$base_url?>assets/js/jquery.js"> </script>
	<script src="<?=$base_url?>assets/js/layout.js"> </script>

</body>
</html>
