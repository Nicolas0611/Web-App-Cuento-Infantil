<?php include "generales/tituloprincipal.html"; 
include "funciones/f_ingresar.php";
include "generales/g_metadatos.html";?>

<main>
	<head>
		<title>Ingresar - El estado del lobo.</title>
	</head>
	<body>

		<h2 class="txt_title">Ingreso.</h2>
		<p>O <a class="link_inicial" href="registrarme.php">regístrate</a> si aún no tienes una cuenta.</p>
		<form action="ingresar.php" method="POST">
			<section class="contenido_ingresar">
					<label>Username:</label><br>
					<input name="username" type="text" placeholder="lobofeliz2"><br>

					<label>Contraseña:</label><br>
	      			<input name="password" type="password" placeholder="* * * * * * *"><br>
				
	      			<div class="contenido_btn">
	      				<input type="submit" value="Ingresar">
	      			</div>
			</section>
	    </form>		
	</body>
</main>