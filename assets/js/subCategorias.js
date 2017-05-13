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
		url:'/getSpecial/subcategorias',
		success:function(data){
			data=$.parseJSON(data);
			var table='';
			$.each(data, function(index, val) {
				 table+='<tr><td>'+data[index].categoria+'</td><td>'+data[index].nombre+'</td></tr>';
			});
			
			$('table tbody').append(table);
		}
	});
}



function cargaFormCategorias(){
	$('table').hide('fast');
	$('div.form').show('slow');
	$.get({
		url:'/get/categorias',
		success:function(data){
			data=$.parseJSON(data);
			var table='';
			$.each(data, function(index, val) {
				 table+='<option value='+data[index].idCategoria+'>'+data[index].nombre+'</option>';
			});
			
			$('select#categoria').append(table);
		}
	});

}


function cancelar(e){
	e.preventDefault();
	location.href="http://localhost:8080/admin/subcategorias";
}


function guardar(e)
{
	e.preventDefault();
	datos=$(this).serialize();
	$.post({
		url:'/subcategorias/save',
		data:datos,
		success:function(){
			location.href="http://localhost:8080/admin/subcategorias";
		}
	});
}	