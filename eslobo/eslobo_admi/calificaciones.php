
<main>
	<body>	
			<?php 
	include "eslobo_admi/funciones/f_conexion.php";
	$sql = "SELECT * FROM calificaciones";
	$resultado = $conn->query($sql);
	if($resultado->num_rows>0){
	?>
	<table>
		<thead>
			<tr>
				<th>#</th>
				<th>Puntaje</th>
			</tr>
		</thead>

		<tbody>
	<?php while($fila=$resultado->fetch_assoc()){ 
			++$contador;
			$promedio+=$fila["calificacion"];?>
			<tr>
				<td><?php echo $fila['ID']; ?></td>
				<td><?php echo $fila['calificacion']; ?></td>
			</tr>	
	<?php } 			$promedio/=$contador; ?> 		
		</tbody>
	</table>
<?php }else{
		echo "No hay nada";
	} ?>
<h2>El promedio es <?= round($promedio,1); ?></h2>
	</body>
</main>