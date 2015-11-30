function validacion() {
	usuario = document.getElementById('usuario').value;
	contrasena = document.getElementById('contrasena').value;
	if(usuario=='' || contrasena==''){
		alert("Debe ingresar un usuario y/o contraseña");
	}
	else {
		document.login.submit();
	}	
}

function validarPerfil() {
	nombre = document.getElementById('nombre').value;
	apellido = document.getElementById('apellido').value;
	identificacion = document.getElementById('identificacion').value;
	valor = document.getElementById('valor').value;
	if(nombre=='' ){
		alert("Debe ingresar su nombre");
	}
	else if (apellido=='' ) {
		alert("Debe ingresar el numero de su tarjeta profesional");
	}	
	else if (identificacion=='' ) {
		alert("Debe ingresar su numero de identificacion");
	}	
	else if (valor=='' ) {
		alert("Debe ingresar el valor de su hora de trabajo");
	}	
	else {
		document.perfil.submit();
	}	
}

function validarCliente() {
	nombre = document.getElementById('nombre').value;
	identificacion = document.getElementById('identificacion').value;
	if(nombre=='' ){
		alert("Debe ingresar el nombre de su cliente");
	}
	else if (identificacion=='' ) {
		alert("Debe ingresar el numero de identificacion de su cliente");
	}	
	else {
		document.tercero.submit();
	}	
}