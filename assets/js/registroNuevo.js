$(function(){

	$('form#primer').on('submit',cargaPrimer);
	$('form#segundo').hide();
});


function cargaPrimer(e){
	e.preventDefault();
	var datos=$(this).serialize();
	$.post({
		url:'/primer/save',
		data:datos,
		success:function(){
			$('form#primer').hide('fast');
			$('div.segundo').show();
			$('form#segundo').show();
			
			$.get({
		url:'/get/categorias',
		success:function(data){
			data=$.parseJSON(data);
			var table='';
			$.each(data, function(index, val) {
				 table+='<option value='+data[index].idCategoria+'>'+data[index].nombre+'</option>';
			});
			
				$('select#categoria').append(table);
				
				$('select#categoria').on('change',function(){
					var valor=$(this).val();
					$.get({
						url:'/getbyId/subcategorias',
						data:{
							datos:valor
						},
						success:function(json){
							json=$.parseJSON(json);
							console.log(json);
							var opt="";
							$.each(json, function(index, val) {
								 opt+='<option value='+json[index].idSubCategoria+'>'+json[index].nombre+'</option>';
							});
							$('select#subCategoria').html(opt);
							$('form#segundo').on('submit',guardaSegundo);
						}
					});
				});	
			}
			});
		}
	});
}



function guardaSegundo(e){
	e.preventDefault();
	datosSegundo=$(this).serialize();

}