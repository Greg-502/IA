
//Codigo para generar el objeto ajax
function objetoAjax(){
	var xmlhttp=false;
	try {
		xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
	} catch (e) {
		try {
		   xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		} catch (E) {
			xmlhttp = false;
  		}
	}

	if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
		xmlhttp = new XMLHttpRequest();
	}
	return xmlhttp;
}

//Codigo para mostrar los modulos Aleatorios
function ModuloAleatorio(idioma, modulo, palabra, seleccion, puntuacion) {
	
	
	//OpcionesAleatoriasModulo(idioma, modulo);
	PalabraModulo(idioma, modulo, palabra, seleccion, puntuacion);
}

function OpcionesAleatoriasModulo(idioma, modulo){
	divResultado = document.getElementById('opciones');
	ajax=objetoAjax();
	ajax.open("GET", "BaseDatos/ModulosAleatorios.php?idioma="+idioma+"&modulo="+modulo);
	ajax.onreadystatechange=function() {
		if (ajax.readyState==4) {
			divResultado.innerHTML = ajax.responseText
		}
	}
	ajax.send(null)
}

function PalabraModulo(idioma, modulo, palabra, seleccion, puntuacion){
	var puntos = 0;
	if(seleccion == true){
		puntos = 10;
	}
	divPalabra = document.getElementById('palabra');
	ajax=objetoAjax();
	ajax.open("GET", "BaseDatos/PalabraModulo.php?idioma="+idioma+"&modulo="+modulo+"&palabra="+palabra+"&puntos="+puntos);
	ajax.onreadystatechange=function() {
		if (ajax.readyState==4) {
			divPalabra.innerHTML = ajax.responseText
		}
	}
	ajax.send(null)
	var progreso = document.getElementById("barra");
	var labelprogreso = document.getElementById("progreso");
	var labelPuntuacion = document.getElementById("pun");
	progreso.style.width = ((palabra-1)*10)+'%';
	labelprogreso.innerHTML = "<p> "+((palabra-1)*10)+"% progreso </p> ";
	if(seleccion == true){
		labelPuntuacion.innerHTML = (puntuacion+10)+" Pts ";
	}
}

//Codigo para Mostrar las unidades
function MostrarUnidades(unidad, idioma) {
	divResultado = document.getElementById('ModuloUnidad');
	ajax=objetoAjax();
	ajax.open("GET", "BaseDatos/ModuloUnidades.php?unidad="+unidad+"&idioma="+idioma);
	ajax.onreadystatechange=function() {
		if (ajax.readyState==4) {
			divResultado.innerHTML = ajax.responseText
		}
	}
	ajax.send(null)
}

//Codigo para Guardar el Idioma de Ajustes
function GuardarIdioma(idiomaOriginal){
	var chk1 = document.getElementById('check1');
	var chk2 = document.getElementById('check2');
	var chk3 = document.getElementById('check3');
	var chk4 = document.getElementById('check4');
	var chk5 = document.getElementById('check5');
	var chk6 = document.getElementById('check6');
	var idioma = 1;
	if(chk1.checked){
		idioma = 1;
	}else if(chk2.checked){
		idioma = 2;
	}else if(chk3.checked){
		idioma = 3;
	}else if(chk4.checked){
		idioma = 4;
	}else if(chk5.checked){
		idioma = 5;
	}else{
		idioma = 6;
	}
	ajax=objetoAjax();
	ajax.open("GET", "BaseDatos/GuardarIdioma.php?idiomaOriginal="+idiomaOriginal+"&idioma="+idioma);
	ajax.onreadystatechange=function() {
		if (ajax.readyState==4) {
			ajax.responseText
		}
	}
	ajax.send(null)
	window.location.href ="unidadesSeleccion.php";
}

//Codigo para Aumentar la Puntuacion
function AumentarPuntuacion() {
	ajax=objetoAjax();
	ajax.open("GET", "BaseDatos/AumentarPuntuacion.php?puntos=10");
	ajax.onreadystatechange=function() {
		if (ajax.readyState==4) {
			ajax.responseText
		}
	}
	ajax.send(null)
}

//Codigo para el Analisis de la Seleccion de los Modulos
function AnalisisdeSeleccion(seleccion, idioma, modulo, palabra, puntuacion){
	var divMensaje = document.getElementById("mensaje");
	var progreso = document.getElementById("barra");
	var labelprogreso = document.getElementById("progreso");
	//var puntuacion = document.getElementById("pun");
	//var puntos = 10;
	if(seleccion == true){
		if(palabra < 10){
			PalabraModulo( idioma, modulo, palabra + 1 , seleccion, puntuacion);
			divMensaje.innerHTML = "<p style='margin-left: 10px; color: black; font-size: 20px; text-align: left; margin-top:-20px;'> SELECCIONA LA PALABRA CORRECTA </p>";
			//progreso.style.width = (palabra*10)+'%';
			//labelprogreso.innerHTML = "<p> "+(palabra*10)+"% progreso </p> ";
		}
		else{
			AumentarPuntuacion();
			window.location.href ="Modulocompleto.php?modulo="+modulo;
		}
	}
	else{
		
		divMensaje.innerHTML = "<p style='margin-left: 10px; color: red; font-size: 20px; text-align: left; margin-top:-20px;'>  LA RESPUESTA NO ES LA CORRECTA </p>  ";
		//var audio = document.getElementById("audio");
		//audio.play();
		var tiempo = setTimeout(function(){
			divMensaje.innerHTML = "<p style='margin-left: 10px; color: black; font-size: 20px; text-align: left; margin-top:-20px;'> SELECCIONA LA PALABRA CORRECTA </p>";
		},1000);
	}
	
}

function playclip(numero) {
	if (navigator.appName == "Microsoft Internet Explorer" && (navigator.appVersion.indexOf("MSIE 7")!=-1) || (navigator.appVersion.indexOf("MSIE 8")!=-1))
	{
		if (document.all)
		{
			document.all.sound.src = "click.mp3";
		}
	}
	else 
	{
		{
		var audio = document.getElementById("audio"+numero);
		audio.play();
		}
	}
}

function tablaRankin(idioma){
	divResultado = document.getElementById('tablaRankin');
	ajax=objetoAjax();
	ajax.open("GET", "BaseDatos/Rankin.php?idioma="+idioma);
	ajax.onreadystatechange=function() {
		if (ajax.readyState==4) {
			divResultado.innerHTML = ajax.responseText
		}
	}
	ajax.send(null)
}

function VerificarNombre(idioma){
	var nombre = document.getElementById("NombreEST").value;
	ajax=objetoAjax();
	ajax.open("GET", "BaseDatos/VerificarNombre.php?nombre="+nombre+"&idioma="+idioma);
	ajax.onreadystatechange=function() {
		if (ajax.readyState==4) {
			ajax.responseText
		}
	}
	ajax.send(null)
}