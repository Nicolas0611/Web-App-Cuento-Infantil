<?php  include "funciones/f_startsesion.php";
include "generales/g_metadatos.html";?>
<!DOCTYPE html>
<html>
  <head>
  	<?php include "generales/tituloprincipal.html" ?>
    <title>Administrador - El estado del lobo.</title>
  </head>

  <body>
  	<br>
    <h2 class="txt_title">Administrador.</h2>

    <?php if(!empty($user)): ?>
      <?php header('Location: /eslobo_admi/administrando.php'); ?>
      <?php else: ?>
      <p id="txt_pregunta">¿Deseas <a class="link_inicial" href="ingresar.php">ingresar</a> o <a class="link_inicial" href="registrarme.php">registrarte</a>?</p>
    <?php endif; ?>
  </body>
</html>