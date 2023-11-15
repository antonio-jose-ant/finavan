const formulario = document.getElementById('formulario');//accedemos al id_formulario
const inputs = document.querySelectorAll('#formulario input');//All obtenemos todos los inputs de formularios
const expresiones = {
	usuario: /^[a-zA-Z0-9\_\-]{4,16}$/, // Letras, numeros, guion y guion_bajo,se puedan repetir(-),etc..
	//esperamos que el usuario empiece (^) y termine ($) que pueda tener mayusculas, minusculas
	nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
	apellidop: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
	apellidom: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
	contrasena: /^.{4,12}$/, // 4 a 12 digitos.
	correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
	telefono: /^\d{7,14}$/, // 7 a 14 numeros.
	cantidadini: /^\d{7,14}$/ // 7 a 14 numeros.
}

//hago mi objeto, representan si un campo sea valido o no, hafo que todos lo campos sean invalidos
const campos = {
	usuario: false,//cuando validemos cambiaa a true
	nombre: false,
	apellidop: false,
	apellidom: false,
	contrasena: false,
	correo: false,
	telefono: false
}

const validarFormulario = (e) => { //me comprobara los campos cuando levantemos la tecla y cuando le den un clic fue del input se ejecute la comprobacion
	switch (e.target.name) {//voy a ejecutar un switch y lo quue quiero comprobar  (e)
		case "usuario"://en caso de que  el nombre del input sea suario, se ejecutara el sig. cond
			validarCampo(expresiones.usuario, e.target, 'usuario'); //pasamos los 3 valores 
			//llamamos la funcion validar campo accedemos a=(expresiones(objeto).usuario(accedemos)) , accedemos(e.target, usuario)accedemos al valor que teniamos  en el input, nos devolvera si se cumplio o no se cumplio
		break;//salida
		case "nombre"://en caso de nombre
			validarCampo(expresiones.nombre, e.target, 'nombre');
		break;
		case "apellidop"://en caso de ...
			validarCampo(expresiones.apellidop, e.target, 'apellidop');
		break;
		case "apellidom":
			validarCampo(expresiones.apellidom , e.target, 'apellidom');
		break;
		case "contrasena":
			validarCampo(expresiones.contrasena, e.target, 'contrasena');
			validarcontrasena2();//aqui trabajanmos en las 2
		break;
		case "contrasena2":
			validarcontrasena2();
		break;
		case "correo":
			validarCampo(expresiones.correo, e.target, 'correo');
		break;
		case "telefono":
			validarCampo(expresiones.telefono, e.target, 'telefono');
		break;
	}
}
//le pasamos 3 valores (exprecion,input al que queremos comprobar,campo(nombre, usuario,etc..))
const validarCampo = (expresion, input, campo) => {
	//queremos acceder a la exprecion y accedemos al valor del input y que despues o compruebe  con la exprecion 
	if(expresion.test(input.value)){
		//obtenemos el id del grupo 
		document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-incorrecto');
		//remove (removemos)es como refrescar la pantalla
		document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-correcto');
		document.querySelector(`#grupo__${campo} i`).classList.add('fa-check-circle');
		//accedemos a querySelector, accedemo ala etiqueta grupo.. accedemos a su lista de clases  y eliminamos a la clase que le permite agregar el icono al icono, removemos fas-times-circle
		document.querySelector(`#grupo__${campo} i`).classList.remove('fa-times-circle');
		//eliminamos el mensaje de error de atos si es que nuestro input tiene todo correcto
		document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.remove('formulario__input-error-activo');
		campos[campo] = true;//acedemos a campo y lo combertimos a true
	} else {//este codigo se ejecutara cuando  es incorrecto 
		document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-incorrecto');
		document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-correcto');
		//si es incorrecto agreges la class de times y 
		document.querySelector(`#grupo__${campo} i`).classList.add('fa-times-circle');
		//Elimines la clase de check
		document.querySelector(`#grupo__${campo} i`).classList.remove('fa-check-circle');
		//aparece mi texto de error
		document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.add('formulario__input-error-activo');
		campos[campo] = false;
	}
}

const validarcontrasena2 = () => {
	//accedemos l elemento por su id a passwprd
	const inputcontrasena1 = document.getElementById('contrasena');
	const inputcontrasena2 = document.getElementById('contrasena2');

	//sies difrente 
	if(inputcontrasena1.value !== inputcontrasena2.value){
		//mostraremos los errores 
		//acedemos a password 2 y le pondremos la clase de grupo incorrecto
		document.getElementById(`grupo__contrasena2`).classList.add('formulario__grupo-incorrecto');
		document.getElementById(`grupo__contrasena2`).classList.remove('formulario__grupo-correcto');
		//agregamos
		document.querySelector(`#grupo__contrasena2 i`).classList.add('fa-times-circle');
		//eliminamos
		document.querySelector(`#grupo__contrasena2 i`).classList.remove('fa-check-circle');
		document.querySelector(`#grupo__contrasena2 .formulario__input-error`).classList.add('formulario__input-error-activo');
		campos['contrasena'] = false;//no esta validado
	} else {//en caso de que sean iguales
		document.getElementById(`grupo__contrasena2`).classList.remove('formulario__grupo-incorrecto');
		document.getElementById(`grupo__contrasena2`).classList.add('formulario__grupo-correcto');
		document.querySelector(`#grupo__contrasena2 i`).classList.remove('fa-times-circle');
		document.querySelector(`#grupo__contrasena2 i`).classList.add('fa-check-circle');
		document.querySelector(`#grupo__contrasena2 .formulario__input-error`).classList.remove('formulario__input-error-activo');
		campos['contrasena'] = true;//validado
	}
}

inputs.forEach((input) => { //por cada input me ejecutaras un codigo
	input.addEventListener('keyup', validarFormulario);//por cada input agregaresmos un evento voy a comprobar que cuando precione una tecla se ejcute mi fucion "validarFormulario"
	input.addEventListener('blur', validarFormulario);//cuando se de clic fuera de mi input se ejecutara mi funcion 

});

formulario.addEventListener('input[button]', (e) => { //cuando el usuario presione del boton, se ejecutaria una funcion
	e.preventDefault(); //(e)Evento para que no me mande los datos sin nada


	const terminos = document.getElementById('terminos');
	//si usuario, nombre,apellidop,etc.. comprobar que los dato sean correctos 
	if(campos.usuario && campos.nombre && campos.apellidop && campos.apellidom &&  campos.password && campos.correo && campos.telefono && terminos.checked ){
		formulario.reset();//accedemos a formulario (reset) reiniciar todos los campos del formulaio

		document.getElementById('formulario__mensaje-exito').classList.add('formulario__mensaje-exito-activo');
		setTimeout(() => {
			//eliminamos la clase de mensaje
			document.getElementById('formulario__mensaje-exito').classList.remove('formulario__mensaje-exito-activo');
		}, 5000);//tiempo en que quiero que este codigo qse ejecute osea en 5 seg

		document.querySelectorAll('.formulario__grupo-correcto').forEach((icono) => {
			icono.classList.remove('formulario__grupo-correcto');
		});
	} else {
		document.getElementById('formulario__mensaje').classList.add('formulario__mensaje-activo');
	}
});