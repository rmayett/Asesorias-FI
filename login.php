<?php
session_start();
require 'conexion.php';

?>
<?php
if (isset($_REQUEST['iniciar'])) {
	$usuario = $_REQUEST['usuario'];
	$password = $_REQUEST['contrasena'];

	$sql = $conexion->query("SELECT * FROM ALUMNO WHERE USUARIO='$usuario'");
	while ($login = $sql->fetch_assoc()) {
		$usuarioDB = $login['USUARIO'];
		$passwordDB = $login['CONTRASENA'];
	}
	if ($usuario == isset($usuarioDB) && password_verify($password, $passwordDB)) {
		$_SESSION['logged'] = "Logged";
		$_SESSION['usuario'] = $usuarioDB;
		$_SESSION['contrasena'] = $passwordDB;
		header("Location: index.php");
	} elseif ($usuario !== isset($usuarioDB)) {
		echo "<div class='error'><span>El Nombre de Usuario que has Introducido es Incorrecto</span></div>";
	} elseif (password_verify($password, $passwordDB) === FALSE) {
		echo "<div class='error'><span>La Contraseña que has Introducido es Incorrecta</span></div>";
	}
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link rel="shortcut icon" href="https://www.unam.mx/sites/default/files/favicon_0.ico" type="image/vnd.microsoft.icon" />
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="/sites/all/themes/unam/apple_icon.png" />
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Iniciar Sesion</title>
	<link rel="stylesheet" type="text/css" href="http://netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>
<!-- LOGIN FORM -->
<div class="text-center login" style="padding:50px 0">
    <div class="logo">Login</div>
	<!-- Main Form -->
	<div class="login-form-1">
		<form id="login-form" class="text-left" method="post">
			<div class="login-form-main-message"></div>
			<div class="main-login-form">
				<div class="login-group">
					<div class="form-group">
						<label for="lg_username" class="sr-only">Username</label>
						<input type="text" class="form-control" id="lg_username" name="usuario" placeholder="Usuario" required="">
					</div>
					<div class="form-group">
						<label for="lg_password" class="sr-only">Password</label>
						<input type="password" class="form-control" id="lg_password" name="contrasena" placeholder="Contraseña" required="">
					</div>
					<div class="form-group login-group-checkbox">
						<input type="checkbox" id="lg_remember" name="lg_remember">
						<label for="lg_remember">Recordar</label>
					</div>
				</div>
				<button type="submit" class="login-button" name="iniciar"><i class="fa fa-chevron-right"></i></button>
			</div>
			<div class="etc-login-form">
				<p>¿Nuevo Usuario? <a href="register.php">Cree una nueva cuenta</a></p>
			</div>
		</form>
	</div>
	<!-- end:Main Form -->
</div>
</body>
</html>