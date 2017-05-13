$(function(){


$('button#addCategoria').on('click',cargaFormCategorias);
$('button#cancelar').on('click',cancelar);
$('form.categorias').on('submit',guardar);
$('input[type=text]').on('keyup',mayus);
cargaTabla();

});





function mayus(){
	var letra=$(this).val();
	letra=letra.toUpperCase();
	$(this).val(letra);
}


function cargaTabla(){
	$.get({
		url:'/get/tiposuscripcion',
		success:function(data){
			data=$.parseJSON(data);
			var table='';
			$.each(data, function(index, val) {
				 table+='<tr><td>'+data[index].nombre+'</td><td>'+data[index].promociones+'</td></tr>';
			});
			
			$('table tbody').append(table);
		}
	});
}



function cargaFormCategorias(){
	$('table').hide('fast');
	$('div.form').show('slow');

}


function cancelar(e){
	e.preventDefault();
	location.href="http://localhost:8080/admin/tipos";
}


function guardar(e)
{
	e.preventDefault();
	datos=$(this).serialize();
	$.post({
		url:'/tipos/save',
		data:datos,
		success:function(){
			location.href="http://localhost:8080/admin/tipos";
		}
	});
}	