  <link rel="stylesheet" href="/eslobo_admi/alertifyJS/css/alertify.min.css" />
  <link rel="stylesheet" href="/eslobo_admi/alertifyJS/css/themes/semantic.min.css" />
  <script src="/eslobo_admi/alertifyJS/alertify.min.js"></script>

<?php
  session_start(); //Comando para iniciar una sesión PHP.
  if (isset($_SESSION['user_id'])) {
    header('Location: /eslobo_admi/administrando.php');
  }
  include 'funciones/f_conexion.php';//Se llama el php donde se realiza la conexión con la base de datos.

  //Se debe comprobar que el usuario haya introducido datos.
  if (!empty($_POST['username']) && !empty($_POST['password'])) {
    $username= $_POST['username'];
    //Se buscan los datos según el nombre de usuario (que será único)
    $sql = "SELECT *  FROM administradores WHERE username='$username'";
    $resultado = $conn->query($sql);
    $fila=$resultado->fetch_assoc();
    $contador=mysqli_num_rows($resultado);

    if($contador>0){
      $temp=$fila['nombre'];
       //Si el usuario existe en la base de datos, verifique su contraseña.
        if (password_verify(trim($_POST['password']), trim($fila['password']))) {
            $_SESSION['user_id'] = $fila['ID']; //Si sirve, entonces inicie la sesión con su id.
            echo "Ha ingresado bien";
            header('Location: /eslobo_admi/administrando.php');
        } else {
          echo "<script type=\"text/javascript\">alertify.error(\"Contraseña incorrecta\");</script>";
        }
    }else{
      echo "<script type=\"text/javascript\">alertify.error(\"Usuario no encontrado\");</script>";
    }
  }else{
    echo "<script type=\"text/javascript\">alertify.error(\"Por favor completa todos los datos\");</script>";
  }
?>