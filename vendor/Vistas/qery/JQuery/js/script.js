$(document).ready(function(){
	console.log("Hola desde jQuery");

	//Selector de etiqueta
	$('p').click(function(){
		$(this).html('Cambio desde jQuery');
	});

	//Selector de id
	$('#caja1').css('color','blue').css('font-weight','bold');

	//Selector de clase
	//$('.clase1').css('color','red');

	//CUando pulse se cambie el color
	$('.clase1').click(function(){
		$(this).addClass('clase2');
	});

	//Cuando click que desaparezca
	$('button').click(function(){
		$('.clase1,.clase2').fadeTo("fast",0.3); //fadeto->Tiene dos parámetros, 1 para la velocidad y el otro para saber cuanto 
	});
});