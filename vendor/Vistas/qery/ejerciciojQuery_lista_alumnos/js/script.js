$(document).ready(function(){
	$('#add-container').on('click','button',function(){
		var valor=$("#add-container input").val();

		console.log(valor);

		var html="<div class='item'><div class='remove'>X</div>" +valor+"</div>";

		$('#places-container').children().last().after(html);


	});

	$('#places-container').on('click','.remove',function(){
			var padre=$(this).parent().remove();
		});
});