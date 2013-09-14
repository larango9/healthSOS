<html>
	<head>
		<title>IniciarSesion</title>
	</head>
	<body>
	<h1>Iniciar Sesion</h1>
	<form method="post" action="" />
		<table>
			<tr>
				<td>
				Nick Usuario:
				</td>
				<td>
				<input type="name" name="nick" />
				</td>
			</tr>
			<tr>
				<td>
				Contraseña
				</td>
				<td>
				<input type="password" name="pass" />
				</td>
			</tr>
		</table>
		<input type="submit" name="login" value="Acceder" /> 
		</form>
		<?php
			if (isset($_POST['login'])){
			require("iniciarSesion.php");
			}
		?>
	</body>
	</html>