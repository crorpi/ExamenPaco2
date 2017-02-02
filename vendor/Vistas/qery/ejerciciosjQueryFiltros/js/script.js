$(document).ready(function(){


			/// PRIMER DOCUMENTO ////
	//Coger rosa a partir de la posicion 2
	/* Actividad 1
	$('button').click(function(){
		$('div:gt(2)').addClass("rosa");
	});*/

	//Que solo coja el contenido del 3
	/* Actividad 2
	$('button').click(function(){
		$('div:eq(2)').addClass("rosa");
	});*/

	//Para coger los primeros de las posiciones
	/* Actividad 3
	$('button').click(function(){
		$('div:lt(2)').addClass("rosa");
	}); */

	//Para coger las posiciones 3,4 y 5
	/*Actividad 4 
	$('button').click(function(){
		$('div:gt(1)').addClass("verde");
	}); */

	//Para coger las posiciones pares
	/* Actividad 5 
	$('button').click(function(){
		$('div:even').addClass("verde");
	}); */

	//Para coger las posiciones impares
	/* Actividad 6
	$('button').click(function(){
		$('div:odd').addClass("rosa");
	}); */

	//Coger todos menos el contenedor 3
	/* Actividad 7
	$('button').click(function(){
		$('div:not(:eq(2))').addClass("verde");
	}); */
	

		//// SEGUNDO DOCUMENTO ///
	//Coger el div que tiene 
	/* Actividad 1 
	$('button').click(function(){
		$("div:contains('Contenedor 5')").addClass("verde");
	}); */

	//Añadir al div que tiene un ul
	/* Actividad 2 
	$('button').click(function(){
		$("div:has(ul)").addClass("verde");
	}); */

	//Los que tengan un span
	/* Actividad 3 
	$('button').click(function(){
		$("div:has(span)").addClass("verde");
	}); */

	//Los parents
	/* Actividad 4 
	$('button').click(function(){
		$("div:parent").addClass("verde");
	}); */


		///// TERCER DOCUMENTO ////
	//Div cuyo atributo empiecen por enero o enero-
	/* Actividad 1 
	$('button').click(function(){
		$("div[name |='enero']").addClass("verde");
	}); */

	//etiqueta name contenga marzo
	/* Actividad 2 
	$('button').click(function(){
		$("div[name*='marzo']").addClass("verde");
	}); */

	//Los que tengan abril sin espacio
	/* Actividad 3 
	$('button').click(function(){
		$("div[name~='abril']").addClass("verde");
	}); */

	//Los que acaben con la palabra marzo
	/* Actividad 4 
	$('button').click(function(){
		$("div[name$='marzo']").addClass("verde");
	}); */

	//Coincidencia exacta
	/* Actividad 5 
	$('button').click(function(){
		$("div[name='julioabril']").addClass("verde");
	}); */

	//Que empiece por enero
	/* Actividad 6 
	$('button').click(function(){
		$("div[name^='enero']").addClass("verde");
	}); */

	//Seleccionar el div que tenga el atributo concreto
	/* Actividad 8 
	$('button').click(function(){
		$("div[miatr]").addClass("verde");
	}); */

	//Seleccionar el cuarto div que empiece por enero
	/* Actividad 9 */
	$('button').click(function(){
		$("div[name^='enero']:eq(3)").addClass("verde");
	}); 
});