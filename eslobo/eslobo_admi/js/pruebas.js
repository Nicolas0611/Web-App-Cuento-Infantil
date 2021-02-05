function enviar(){
	console.log("Empezando  a validar");

	var nombre= document.getElementById("nombre");
	var username= document.getElementById("username");
	var codigo= document.getElementById("codigoverificar");
	var password= document.getElementById("password");
	var password_confirm= document.getElementById("confirmar_password");
	
	var error_nombre = document.getElementById("error_nombre");
	var error_user = document.getElementById("error_user");
	var error_codigo = document.getElementById("error_codigo");
	var error_password = document.getElementById("error_password");
	var error_password_confirm = document.getElementById("error_password_confirm");
	var error_form = document.getElementById("error_form");

    var aux_nombre = false;
    var aux_user = false;
    var aux_code = false;
    var aux_password = false;
    var aux_password_confirm = false;

	error_nombre.style.fontStyle="italic";
	error_nombre.style.fontSize="12px";

	error_codigo.style.fontStyle="italic";
	error_codigo.style.fontSize="12px";

	error_user.style.fontStyle="italic";
	error_user.style.fontSize="12px";

	error_password.style.fontStyle="italic";
	error_password.style.fontSize="12px";

	error_password_confirm.style.fontStyle="italic";
	error_password_confirm.style.fontSize="12px";

	error_form.style.color="red";
	error_form.style.fontStyle="italic";
	error_form.style.fontSize="12px";

	verificarNombre();
	verificarUsername();
	verificarPassword();
	verificarCodigo();

	if(aux_nombre && aux_user && aux_password && aux_password_confirm && aux_code){
		console.log("Enviando el formulario");
		return true;
	}else
	{
		console.log("NO SE VA A MANDAR NADA");
		return false;
	}


	function verificarNombre() {

                if (nombre.value == '') {
                	error_nombre.style.display="block";
                    error_nombre.innerHTML = "No olvides este campo.";
        			nombre.style.borderBottom = "thick solid red";  
                    aux_nombre = false;

                } else if (nombre.value.length > 60) {
                	error_nombre.style.display="block";
                    error_nombre.innerHTML = "Parece ser que tu nombre es demsaiado largo.";
        			nombre.style.borderBottom = "thick solid red";  
                    aux_nombre = false;

                } else {
                    error_nombre.style.display = "none";
                    nombre.style.borderBottom = "0.7px solid #eee";                    
                    aux_nombre = true;
                }
    }

    function verificarCodigo() {

                if (codigo.value == '') {
                	error_codigo.style.display="block";
                    error_codigo.innerHTML = "Sólo pueden registrase administradores";
        			codigo.style.borderBottom = "thick solid red";  
                    aux_code = false;

                } else {
                    error_codigo.style.display = "none";
                    codigo.style.borderBottom = "0.7px solid #eee";                    
                    aux_code = true;
                }
    }

    function verificarUsername() {

                if (username.value == '') {
                	error_user.style.display="block";
                    error_user.innerHTML = "¿Y luego cómo ingresas?";
        			username.style.borderBottom = "thick solid red"; 
                    aux_user = false;

                } else if (username.value.length > 20) {
                	error_user.style.display="block";
                    error_user.innerHTML = "¿No es muy largo tu username?";
        			username.style.borderBottom = "thick solid red"; 
                    aux_user = false;

                } else {
                    error_user.style.display = "block";
                    error_user.style.color="#8E8E8E";
                    error_user.innerHTML = "¡Se ve genial ese username!";
                    username.style.borderBottom = "0.7px solid #eee"; 
                    aux_user = true;
                    //error_formulario_registro.style.display = none;
                }
    }

    function confirmPassword(contraseña) {
                if (password_confirm.value == '') {
                    error_password_confirm.style.display = "block";
                    error_password_confirm.innerHTML = "Debemos comparar las contraseñas.";
                    password_confirm.style.borderBottom = "thick solid red"; 
                    aux_password_confirm = false;

                } else if (password_confirm.value != password.value) {
                    error_password_confirm.style.display = "block";
                    error_password_confirm.innerHTML = "Las contraseñas no coinciden.";
                    password_confirm.style.borderBottom = "thick solid red"; 
                    aux_password_confirm = false;

                } else {
                    error_password_confirm.style.display = "none";
                    password_confirm.style.borderBottom = "0.7px solid #eee"; 
                    aux_password_confirm = true;
                }
    }

    function verificarPassword() {

                if (password.value != '') {
                    error_password.style.display = "none";
                    if (password.value.length < 5 && password.value.length > 0) {
                        error_password.style.display = "block";
                        error_password.style.color = "red";
                        error_password.innerHTML = "La contraseña es muy debil.";
                        password.style.borderBottom = "0.7px solid #eee"; 
                        confirmPassword(password);
                        aux_password = true;
                    } else if (password.value.length >= 5 && password.value.length < 15) {
                        error_password.style.display = "block";
                        error_password.style.color = "orange";
                        error_password.innerHTML = "La contraseña es aceptable.";
                        password.style.borderBottom = "0.7px solid eee";
                        confirmPassword(password);
                        aux_password = true;
                    } else if (password.value.length >= 15 && password.value.length <= 30) {
                        error_password.style.display = "block";
                        error_password.style.color = "green";
                        error_password.innerHTML = "La contraseña es segura.";
                        password.style.borderBottom = "0.7px solid #eee";
                        confirmPassword(password);
                        aux_password = true;
                    } else if (password.value.length > 30) {
                        error_password.style.display = "block";
                        error_password.style.color = "red";
                        error_password.innerHTML = "La contraseña es demasiado larga.";
                        password.style.borderBottom = "thick solid red"; 
                        aux_password = false;
                    }
                } else {
                    error_password.style.display = "block";
                    error_password.innerHTML = "Estás olvidando algo muy importante.";
                    password.style.borderBottom = "thick solid red"; 
                    aux_password = false;

                }
            }


            password.addEventListener('blur', verificarPassword);
            password_confirm.addEventListener('blur', confirmPassword);
}