$(document).ready(function(){
	
	$('.button').mouseover(function(){
		$(this).css('background-color','red').fadeTo("fast",1);;
		$(this).nextAll('.button').css('background-color','white').fadeTo("fast",1);
		$(this).prevAll('.button').css('background-color','white').fadeTo("fast",0.33);	
	});
});
