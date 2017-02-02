$(document).ready(function(){

	$('#titulo').click(function(){
        $('h1').addClass('titulo')
    });

$('#estiloLista').click(function(){
    $('#obras>').addClass('horizontal')
    $('#obras>li>').addClass('sublista')
});

$('#Borrar').click(function(){
    $('h1').removeClass('titulo');  
    $('#obras>').removeClass('horizontal'); 
    $('#obras>li>').removeClass('sublista'); 
});
    

});