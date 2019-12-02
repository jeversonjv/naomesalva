<!DOCTYPE html>
<html lang="pt-br">

<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Login</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
	<link rel="stylesheet" href="<?=$base_url?>assets/css/login.css">

	<link rel="shortcut icon" href="<?=$base_url?>assets/img/favicon.ico" />
	<meta name="theme-color" content="#19181e">

</head>

<body>

	<!-- BEGIN container  -->
	<section class="container">

		<img class="logo" src="<?=$base_url?>assets/img/logo.png" alt="Logo marca"/>

		<!-- BEGIN alerta  -->
		<?php if($this->session->flashdata("mensagem")) { ?>
			<div class="alerta <?= $this->session->flashdata("erro") ? "borda-vermelha" : "borda-verde" ?>">
				<span> <b> <?= $this->session->flashdata("mensagem") ?> </b> </span>
				<i id="fechar_alerta" class="fa fa-times"></i>
			</div>
		<?php } ?>
		<!-- END container-login  -->
		
		<!-- BEGIN container-login  -->
		<div class="container-login">

			<!-- BEGIN controls  -->
			<div class="controls">
				<a class="active" data-reference="login" > Login </a>
				<a data-reference="cadastro"> Cadastro </a>
			</div><!-- END controls  -->

			<input type="hidden" name="tab_actived" value="login"/>
			<!-- BEGIN login  -->
			<div class="tab login">
				<form action="<?=$base_url?>login/login" method="post" class="form" autocomplete="off">
					<div class="form_group">
						<label> E-mail* </label>
						<input type="email" name="email" placeholder="Digite seu E-mail" required  />
					</div>
					<div class="form_group">
						<label> Senha* </label>
						<input type="password" name="password" placeholder="Digite sua Senha" required />
					</div>
					<button type="button" class="submit" > Login </button>
				</form>
			</div><!-- END login  -->

			<!-- BEGIN cadastro  -->
			<div class="tab cadastro">
				<form action="<?=$base_url?>login/cadastro" method="post" class="form" autocomplete="off">
					<div class="form_group">
						<label> Nome* </label>
						<input type="text" name="name" id="name" placeholder="Digite seu Nome" required />
					</div>
					<div class="form_group">
						<label> E-mail* </label>
						<input type="email" name="email" placeholder="Digite seu E-mail" required  />
					</div>
					<div class="form_group">
						<label> Senha* </label>
						<input type="password" name="password" placeholder="Digite sua Senha" required />
					</div>
					<button type="button" class="submit" > Cadastrar  </button>
				</form>
			</div><!-- END cadastro  -->

		</div><!-- END container-login  -->

	</section> <!-- END container  -->

	<script src="<?=$base_url?>assets/js/jquery.js"> </script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
	<script src="<?=$base_url?>assets/js/login.js"> </script>

</body>

</html>
