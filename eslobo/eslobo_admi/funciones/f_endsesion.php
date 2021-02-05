<?php
  session_start();

  session_unset();

  session_destroy();

  header('Location: /eslobo_admi/administrador.php');
?>
