<?php
session_start();
require 'conexion.php';
?>
<?php
if (isset($_REQUEST['registrar']) && isset($_REQUEST['reg_agree'])) {
	if ($_REQUEST['contrasena'] === $_REQUEST['contrasenaConfirmar']) {
	$usuario = $_REQUEST['usuario'];
	$password = $_REQUEST['contrasena'];

	$encriptar = password_hash($password, PASSWORD_BCRYPT, ["cost" => '11']);
	$conexion->query("INSERT INTO usuarios (usuario, contrasena) VALUES ('$usuario', '$encriptar')");
	$_SESSION['logged'] = "Logged";
	$_SESSION['usuario'] = $usuario;
	$_SESSION['contrasena'] = $encriptar;
	header("Location: index.php");
	} else {
		echo "<div class='error'><span>Las Contraseñas no son iguales</span></div>";
	}
} elseif (isset($_REQUEST['registrar']) && isset($_REQUEST['reg_agree']) === FALSE) {
	echo "<div class='error'><span>Necesitas Estar de Acuerdo con los Términos y Condiciones</span></div>";
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Registrarse</title>
	<link rel="stylesheet" type="text/css" href="http://netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>
<!-- REGISTRATION FORM -->
<div class="text-center register" style="padding-top:50px">
    <div class="logo">registro</div>
	<!-- Main Form -->
	<div class="login-form-1">
		<form id="register-form" class="text-left" method="post">
			<div class="login-form-main-message"></div>
			<div class="main-login-form">
				<div class="login-group">
					<div class="form-group">
						<label for="reg_username" class="sr-only">Usuario</label>
						<input type="text" class="form-control" id="reg_username" name="usuario" placeholder="usuario">
					</div>
					<div class="form-group">
						<label for="reg_name" class="sr-only">Nombre</label>
						<input type="text" class="form-control" id="reg_name" name="name" placeholder="nombre">
					</div>
					<div class="form-group">
						<label for="reg_correo" class="sr-only">Correo</label>
						<input type="text" class="form-control" id="reg_correo" name="correo" placeholder="correo">
					</div>
					<div class="form-group">
						<label for="reg_generacion" class="sr-only">Generación</label>
						<input type="text" class="form-control" id="reg_generacion" name="generacion" placeholder="generacion">
					</div>
					<div class="form-group">
						<label for="reg_password" class="sr-only">Contraseña</label>
						<input type="password" class="form-control" id="reg_password" name="contrasena" placeholder="contraseña">
					</div>
					<div class="form-group">
						<label for="reg_password_confirm" class="sr-only">Confirme Contraseña</label>
						<input type="password" class="form-control" id="reg_password_confirm" name="contrasenaConfirmar" placeholder="confirme contraseña">
					</div>
					
					<div class="form-group login-group-checkbox">
						<input type="checkbox" class="" id="reg_agree" name="reg_agree">
						<label for="reg_agree">de acuerdo con los términos y condiciones</label>
					</div>
				</div>
				<button type="submit" class="login-button" name="registrar"><i class="fa fa-chevron-right"></i></button>
			</div>
			<div class="etc-login-form">
				<p>Ya tiene una cuenta? <a href="login.php">Login Aquí</a></p>
			</div>
		</form>
	</div>
	<!-- end:Main Form -->
</div>
</body>
</html>