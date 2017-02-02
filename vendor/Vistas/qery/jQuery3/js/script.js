$(document).ready(function(){


	$( "#barra" ).hover(function () {
        $(this).stop().animate({left: '0', backgroundColor:'#FFBF00'}, 500, 'easeInSine');
    	},
        function(){
        $(this).stop().animate({left: "-92", backgroundColor:'#FFFFFF'}, 1500, 'easeOutBounce');
    });
    

});