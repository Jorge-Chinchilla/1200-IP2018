<?php
	if(!(isset($_POST))){
		
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Procesar datos</title>
</head>
<body>
	<table border="1" align="center">
		<thead>
			<tr>
				<th>Nombre</th>
				<th>Apellido</th>
				<th>Correo</th>
				<th>Telefono</th>
				<th>Direccion</th>
				<th>Equipo</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>
					<?php
						$nombre=$_POST['nombre'];
						echo $nombre;
					?>
				</td>
				<td>
					<?php
						$apellido=$_POST['apellido'];
						echo $apellido;
					?>
				</td>
				<td>
					<?php
						$correo=$_POST['correo'];
						echo $correo;
					?>
				</td>
				<td>
					<?php
						$telefono=$_POST['telefono'];
						echo $telefono;
					?>
				</td>
				<td>
					<?php
						$direccion=$_POST['direccion'];
						echo $direccion;
					?>
				</td>
				<td>
					<?php
						$equipo=$_POST['equipo'];
						echo $equipo;
					?>
				</td>
			</tr>
			<tr>
				<td colspan="6" align="center"><a href="index.html">Volver</a></td>
			</tr>
		</tbody>
	</table>
</body>
</html>