$(document).ready(function(){


	//Sacar las criaturas de los animales
	/*
	var result=$('#animales .criaturas');
	console.log(result);
	*/

	//recorremos el DOM -> DOM: ARBOL DE HTML
	//descendientes directos e indirectos
	/*
	var result=$('#animales').find(".criaturas");
	console.log(result);
	*/

	//var result=$('#animales').children().first().children(".criaturas").last().prev();
	//var result=$('#animales').children().first().children(".criaturas").first().next();
	var result=$('#gatos').parents('.categoria');
	console.log(result);
});
