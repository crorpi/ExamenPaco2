$(document).ready(function(){
	$('.preguntas')
	  .css('background-color','yellow')
	  .css('font-family','verdana')
	  .css('font-size','16px')
	  .css('color','darkblue')
	  .css('margin-left','20px')
	  .css('margin-right','20px')
	  .css('font-weight','bold');

	$('.respuestas')
	  .css('font-family','verdana')
	  .css('font-size','16px')
	  .css('color','darkblue')
	  .css('margin-left','20px')
	  .css('margin-right','40px')
	  .css('padding','6px')
	  .css('font-weight','bold');

    $('.titulo').css('color','darkblue')
    			.css('font-family','verdana');

    $('.color').css('border','solid 1px')
    		   .css('border-radius','5px')
    		   .css('width','300px')
    		   .css('height','40px')
    		   .css('font-weight','bold');

    //Ocultar las respuestas
    $('.respuestas').hide();

    //evento click para que aparezca cada respuesta
    $('.preguntas').click(function(){
    	$(this).next().slideToggle(1000);
    });

    //Manejamos el color de fondo de la página
    $('#colorFondo').change(function(){
    	$('body').css('background-color',$(this).val());
    });

   

});