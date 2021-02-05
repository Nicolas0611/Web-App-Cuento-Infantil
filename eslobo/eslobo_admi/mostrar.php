<?php  include "funciones/f_startsesion.php";
include "generales/g_metadatos.html";?>

<main>
	<head>
		<title>Lista de administradores.</title>
	</head>
	<body>

		<section class="top_info">
  		<?php include "generales/g_head_admi.php" ?>  
		</section>

		<h2 class="txt_title">Administradores.</h2>
		<?php
			include 'funciones/f_conexion.php';
			$sql = "SELECT * FROM administradores";
			$resultado = $conn->query($sql);
			if($resultado->num_rows>0){?>

			<section class="tabla">
			<table>
				<thead>
				<tr>
					<th>#</th>
					<th>Nombre</th>
					<th>Username</th>
				</tr>
				</thead>

				<tbody>
				<?php while($fila=$resultado->fetch_assoc()){ ?>
				<tr>
					<td><?php echo $fila['ID']; ?></td>
					<td><?php echo $fila["nombre"]; ?></td>
					<td><?php echo $fila["username"]; ?></td>
				</tr>	
				<?php } ?> 		
		</tbody>
			</table>
			</section>
	</body>	
	<?php }else{
		echo "No hay nada";} ?>
</main>