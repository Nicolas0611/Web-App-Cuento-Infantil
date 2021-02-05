	<link rel="stylesheet" href="/eslobo_admi/alertifyJS/css/alertify.min.css" />
	<link rel="stylesheet" href="/eslobo_admi/alertifyJS/css/themes/semantic.min.css" />
	<script src="/eslobo_admi/alertifyJS/alertify.min.js"></script>
<?php 
$CODEV=28022000; 
	include 'funciones/f_conexion.php';

	//Si todos los campos están llenos.
	if(!empty($_POST['nombre']) && !empty($_POST['username']) && !empty($_POST['password'])&& !empty($_POST['confirmar_password'])&& !empty($_POST['codigoverificar'])){
	  
	  	//Asigne las variables.
	  	$name= $_POST['nombre'];
	    $username= $_POST['username'];
	    $cpassword= $_POST['password'];
	    $password= password_hash($_POST['password'], PASSWORD_BCRYPT); 

	    if($_POST['codigoverificar']==$CODEV){
	    	//Busque si hay uno igual.
	        $sql = "SELECT *  FROM administradores WHERE username='$username'";
	        $resultado = $conn->query($sql);
	        $contador=mysqli_num_rows($resultado);
	        
	        //Si no hay uno igual (no tiene rows),
	        if($contador==0){

	        	if(trim($_POST['confirmar_password'])==trim($cpassword)){
	        		//entonces insértelo.
	        		$sql = "INSERT INTO administradores (nombre,username, password) VALUES ('$name', '$username', '$password')";
	          		$resultado = $conn->query($sql);
	          		      		echo " <script type=\"text/javascript\">alertify.success(\"Perfecto $name! Se ha completado tu registro\"); </script> ";
	          }else{
	          	echo " <script type=\"text/javascript\">alertify.error(\"Las contraseñas no coinciden\"); </script> ";
	          }

	        }else{
	          //Ya se encuentra registrado.p
	        	echo " <script type=\"text/javascript\">alertify.error(\"este nombre de usuario ya se encuentra\"); </script> ";
	       }   
	    } else{
	    	   echo " <script type=\"text/javascript\">alertify.error(\"ERROR: Parece que el código de verificación que ingresaste no es válido.\"); </script> ";
	    	//echo json_encode("CODIGO MALO");
	    }   
	}else{
				//LLENE LOS DATOS JODA.
		echo " <script type=\"text/javascript\">alertify.error(\"Todos los campos son obligatorios\"); </script> ";
	}
 ?>