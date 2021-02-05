<?php
  session_start(); //Comando para iniciar una sesión PHP.
  include 'funciones/f_conexion.php'; //Se llama el php donde se realiza la conexión con la base de datos.

  if (isset($_SESSION['user_id'])) {
    $d=$_SESSION['user_id'];
  	//¿De qé tabla de la base de datos se buscarán los datos?
    $sql = "SELECT *  FROM administradores WHERE ID='$d'";
    $resultado = $conn->query($sql);
    $fila=$resultado->fetch_assoc();
    $contador=mysqli_num_rows($resultado);
    $user = null;

    if ($contador > 0) {
      $user = $fila; //Si el usuario es encontrado, guarde sus datos.
    }
  }
?>