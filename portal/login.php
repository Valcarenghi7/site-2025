		<?php 
			session_start();
		?>
		<!doctype html>
		<html lang="en">
		<head>
			<title> Faça Login</title>
			<?php include 'login/includes-login/head.php'; ?>
			</head>
			<body>
			<header>
			<?php include 'login/includes-login/header.php'; ?>
			</header>
			<section class="ftco-section">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-md-6 text-center mb-5">
							<h2 class="heading-section">Bem Vindo!</h2>
						</div>
					</div>
					<div class="row justify-content-center">
						<div class="col-md-6 col-lg-5">
							<div class="login-wrap p-4 p-md-5">
						<div class="icon d-flex align-items-center justify-content-center">
							<span class="fa fa-user-o"></span>
						</div>
						<h3 class="text-center mb-4">Tem uma conta?</h3>
					<form class="login-form" method="POST" action="autentica.php">
							<div class="form-group">
								<input type="email" class="form-control rounded-left" placeholder="Nome do Usuario" name="email" required>
							</div>
						<div class="form-group d-flex">
						<input type="password" class="form-control rounded-left" placeholder="Senha" name="senha" required>
						</div>

						<?php if(isset($_SESSION['nao_autenticado'])):?>
							<div class="input100 validate-input m-b-18">
							<div class="alert alert-danger" role="alert"> 
								<center> Usuario ou Senha invalidos </center>
						</div>
						</div>
						<?php
							endif;
							unset($_SESSION['nao_autenticado']);
						?>
						
							<div class="form-group d-md-flex">
							<div class="w-50">
								<label class="checkbox-wrap checkbox-primary">Lembrar meu login
											<input type="checkbox" checked>
											<span class="checkmark"></span>
											</label>
										</div>
										<div class="w-50 text-md-right">
											<a href="#">Esqueceu sua senha?</a>
										</div>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary rounded submit p-3 px-5">Conecte-se</button>
						</div>
					</form>
					</div>
						</div>
					</div>
				</div>
			</section>

		
			<footer>
			<?php include 'login/includes-login/footer.php'; ?>
			<footer>
			</body>
		</html>

