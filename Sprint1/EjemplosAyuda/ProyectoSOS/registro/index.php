<html>
	<head>
	<title>Formulario de Registro </title>
	</head>
	<body> 
		<h1>Formulario de Registro</h1>
		<h4>Los campos con(*) son requeridos</h4>
		<form method="post" action="" />
			<table>
				<tr>
					<td>
						Nombre y Apellido:
					</td>
					<td>
						<input type="name" name="realname"/>
					</td>
				</tr>
				<tr>
					<td>
						*Nick Usuario:
					</td>
					<td>
						<input type="name" name="nick" />
					</td>
				</tr>
				<tr>
					<td>
						*Contraseña:
					</td>
					<td>
						<input type="password" name="pass" />
					</td>
				</tr>
				<tr>
					<td>
						*Repetir Contraseña
					</td>
					<td>
						<input type="password" name="rpass" />
					</td>
				</tr>
			</table>
			<input type="submit" name="submit" value="Registrarme" /> <input type="reset" />
		</form>
		<?php
		if (isset($_POST['submit'])){
		require("registro.php");
		}
		?>
	</body>
</html>