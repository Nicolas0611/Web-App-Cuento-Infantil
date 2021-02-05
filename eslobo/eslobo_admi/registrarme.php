<?php include "generales/tituloprincipal.html"; 
include "funciones/f_conexion.php";
include "funciones/f_insertar.php";
include "generales/g_metadatos.html";?>
<script type="text/javascript" src="js/pruebas.js"></script>

<main>
	<head>
		<title>Registrarme - El estado del lobo.</title>
	</head>
	<body>

		<h2 class="txt_title">Registro.</h2>
		<p>¿Ya tienes una cuenta? <a class="link_inicial" href="ingresar.php">ingresa aquí.</a></p>
		<form action="" method="POST" id="myform">
			<section class="contenido_formulario">

				<div class="contenido_derecha">
					<label>Nombre:<span class="obligatorio">*</span></label><br>
					<div id="error_nombre"></div>
					<input id="nombre" name="nombre" type="text" placeholder="Lobo Rodrigo"><br>

					<label>Username:<span class="obligatorio">*</span></label><br>
					<div id="error_user"></div>
					<input id="username" name="username" type="text" placeholder="lobofeliz2"><br>

					<label>Código de membresía:<span class="obligatorio">*</span></label><br>
					<div id="error_codigo"></div>
      				<input id="codigoverificar" name="codigoverificar" type="text" placeholder="839884"><br>
				</div>

				<div class="contenido_derecha">
					<label>Crea una contraseña:<span class="obligatorio">*</span></label><br>
					<div id="error_password"></div>
	      			<input id="password" name="password" type="password" placeholder="* * * * * * *"><br>
	      			
	      			<label>Confirma tu contraseña:<span class="obligatorio">*</span></label><br>
	      			<div id="error_password_confirm"></div>
	      			<input id="confirmar_password" name="confirmar_password" type="password" placeholder="Confirma tu contraseña"><br>
		      		
	      			<div class="contenido_btn">
	      				<div id="error_form"></div><br>
	      				<input type="submit" value="Registrarme" onclick="return enviar();">
	      			</div>
				</div>
			</section>
	    </form>		
	</body>
</main>