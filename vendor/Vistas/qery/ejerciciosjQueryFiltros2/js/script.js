$(document).ready(function(){
	//Todos los párrafos que tengan atributo class
	//$("p[class]").addClass("amarillo");

	//Párrafos que tengan el atributo id con el valor "parrafo1"
	//$("p[id*='p1']").addClass("verde");

	//Todos los párrafos cuyo id empiece como par
	//$("p[id^='par']").addClass("letra1");
 
 	//Cuya clase no sea clase1
	//$("p:not(:eq('clase1'))");

	//Contienen el id valor "afo"
	//$("id[name*='afo']").animate({height: "25%"}, 200);

	//Parrafos cuya clase empiece por "par" y tenga el atributo align con contenido center
	//$("p[class^='par'][align*='center']").css("text-Transform","uppercase");

	//Oculta los parrafo cuyo id acaben con 1.
	//$("p[id$='1']").hide();

	//Selecciona todos los elementos que son del tipo cabecera h1,h2 y h3
	//$("h1,h2,h3").addClass("verde");

	//Selecciona el elemento con id pdf1, encabezados h2 y párrafos con align center y que cuando cliques aparezca el mensaje "Has clicadi"
	$("[id*='pdf1'],h2,[align*='center']").click(function(){
		alert("Has clicado");
	});
});