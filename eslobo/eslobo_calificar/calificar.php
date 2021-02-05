<link rel="stylesheet" type="text/css" href="/eslobo_calificar/estilocalificar.css">
		<?php 	include "f_conexion.php" ?>


	<script>
	function myFunction() {
  		document.getElementById("myForm").submit();
  		console.log("ENVIADO");
	}
	</script>
<main>	
		<head>
			<h2>Calificando</h2>
		</head>

		<body>
		<form id="myForm" action="" method="POST">
		<section class="contenido_calificar">
		<div class="contenido_op">
			<label class="container"><input type="radio" name="calificar" value="5" onclick="myFunction()">
			<span id="feliz" class="checkmark"></span></label>
		</div>

		<div class="contenido_op">
			<label class="container"><input type="radio" name="calificar" value="3" onclick="myFunction()">
			<span id="normal" class="checkmark"></span></label>
		</div>

		<div class="contenido_op">
			<label class="container"><input type="radio" name="calificar" value="1" onclick="myFunction()">
			<span id="triste" class="checkmark"></span></label>
		</div>
	</section><br><br><br>	
		
</form>	
		</body>
</main>

<?php 	
if (!empty($_POST['calificar'])) {
  		$calificar=$_POST['calificar'];
		echo "$calificar"; 

		$sql = "INSERT INTO calificaciones (calificacion) VALUES ('$calificar')";
	    $resultado = $conn->query($sql);
	}
 ?>