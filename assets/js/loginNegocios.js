$(function(){

	$('main h3').click(function(){
		$('form#login').hide('fast');
		$(this).text('Llena los campos y empieza a promocionar tu negocio')
		$('form#registro').show('slow');
	});

	
	$('form#registro').on('submit',crearUsuario);

});


function crearUsuario(e){
	e.preventDefault();
	var datos=$(this).serialize();
	$.post({
		url:'/usuario/save',
		data:datos,
		success:function(){
			$('form#registro input[type=email]').val('');
			$('form#registro input[type=password]').val('');
			$(this).text('No tienes Cuenta Registrate Aqui!')
			$('form#registro').hide('fast');
			$('form#login').show('slow');	
			
		}
	});
}





