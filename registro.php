<!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
<link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet"> -->
<link rel="stylesheet" href="estilos.css">
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Registrate</title>
</head>
<body>
	<div>
		<h1 class="titulo">Registrate</h1>

		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="formulario" name="login">
			<div class="form-group">
				<input type="text" name="usuario" class="usuario" placeholder="Usuario">
			</div>

			<div>
				<input type="password" name="password" class="password" placeholder="Contraseña">
			</div>

			<div class="form-group">
				<input type="password" name="password2" class="password_btn" placeholder="Confirmar Contraseña"><br><br>
				<button type="button" onclick="login.submit()">Registrate</button>
			</div>


<!--Mensaje de error -->
			<?php if(!empty($errores)): ?>
				<div>
					<ul>
						<?php echo $errores; ?>
					</ul>
				</div>
			<?php endif; ?>
		</form>

		<p>
			¿Ya tienes cuenta? <br>
			<a href="login.php">Iniciar Sesión</a>
		</p>
	</div>
</body>
</html>