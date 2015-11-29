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
function funcionamiento() {
	alert("Para cada caso de prueba, en el primer campo se insertaran 2 enteros N y M, separados por un solo espacio. \n"+
		"Después de insertar los 2 enteros, deberá ingresar las consultas dependiendo del valor de M\n"+
		"T\n"+
		"N M\n"+
		"Query");
	}
function entrada() {
	alert("2\n"+
		"4 5\n"+
		"UPDATE 2 2 2 4\n"+
		"QUERY 1 1 1 3 3 3\n"+
		"UPDATE 1 1 1 23\n"+
		"QUERY 2 2 2 4 4 4\n"+
		"QUERY 1 1 1 3 3 3\n"+
		"2 4\n"+
		"UPDATE 2 2 2 1\n"+
		"QUERY 1 1 1 1 1 1\n"+
		"QUERY 1 1 1 2 2 2\n"+
		"QUERY 2 2 2 2 2 2");
}
function salida() {
	alert("4\n"+
		"4\n"+
		"7\n"+
		"0\n"+
		"1\n"+
		"1");
}
function validar() {
	testcases = document.getElementById('input').value;
	if(testcases==''){
		alert("El campo de entrada esta vacio");
	}
	else {
		linea = testcases.split("\n");
		alert(""+testcases)
		validarT(linea);
	}	
}
function validarT(linea) {
	if (isNaN(linea[0])==false){
		if ((linea[0]>=1)&&(linea[0]<=50)){
			validarNM(linea);
		}
		else {
			alert("Error - T debe estar entre 1 y 50");
		}
	}
	else {
		alert("Recuerde que el primer valor es T, por favor ingrese un valor númerico");
	}
}
function validarNM(linea) {
	contador = 1;
	for (i=1;i<linea.length;i++) {
		if (contador>linea[0]){
			alert("No ingreso N y M para el numero de casos de prueba");
			i=linea.length;
			error = 0;
		}
		else {
			NM = linea[i].split(new RegExp("\\s+"));
			if (NM.length==2){
				N = NM[0];
				M = NM[1];
				if ((isNaN(N)==true)||(isNaN(M)==true)){
					alert("No ingreso N y M de la manera correcta. Por favor revise el input");
					i=linea.length;
					error = 0;
				}
				else {
					if(((N>=1)&&(N<=100))&&((M>=1)&&(M<=1000))){
							validacion = i+1;
						if (validacion>=linea.length){
							alert("No ha ingresado las consultas a realizar");
							i=linea.length;
							error = 0;
						}
						else {
							i = validarConsulta(linea, M, validacion, N);
							if (i==(linea.length+1)){
								i=linea.length;
								error = 0;
							}
							else {
								error = 1;
							}
						}
					}
					else{
						alert("Los valores de N y/o M no son correctos");
						i=linea.length;
						error = 0;
					}				
				}
			}
			else {
				alert("No ingreso N y M de la manera correcta. Por favor revise el input ");
				error = 0;
				i=linea.length;
			}
		}
		contador ++;
	}
	if (error == 1){
		controlador();
	}
}
function validarConsulta(linea, M, validacion, N) {
	for (i=0;i<M; i++){
		validacion=validacion+1;
		if ((validacion>linea.length)){
			alert("No ingreso el numero de consultas correctas");
			i=M;
			retorno = linea.length+1;
		}
		else {
			consulta = linea[validacion-1].split(new RegExp("\\s+"));
			if (((consulta[0]=="UPDATE")&&(consulta.length==5))||((consulta[0]=="QUERY")&&(consulta.length==7))) {
				if (consulta[0]=="UPDATE"){
					x=consulta[1];
					y=consulta[2];
					z=consulta[3];
					w=consulta[4];
					if (((x>=1)&&(y>=1)&&(z>=1))&&((x<=N)&&(y<=N)&&(z<=N))&&((w>=(Math.pow(-10,9)))&&(w<=(Math.pow(10,9))))){
						retorno = validacion-1;
					}
					else{
						alert("No ingreso las consultas de manera correcta");
						i=M;
						retorno = linea.length+1;
					}

				}
				else {
					x1=consulta[1];
					x2=consulta[4];
					y1=consulta[2];
					y2=consulta[5];
					z1=consulta[3];
					z2=consulta[6];
					if (((x2>=1)&&(x1<=x2)&&(x2<=N))&&((y2>=1)&&(y1<=x2)&&(y2<=N))&&((z2>=1)&&(z1<=z2)&&(z2<=N))){
						retorno = validacion-1;
					}
					else{
						alert("No ingreso las consultas de manera correcta");
						i=M;
						retorno = linea.length+1;
					}
				}
			}
			else {
				alert("No ingreso las consultas de manera correcta");
				i=M;
				retorno = linea.length+1;
			}
		}
	}
	return retorno;
}
function controlador() {
	document.casosPrueba.submit();
}