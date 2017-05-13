<?php  
session_start();
require 'Slim/Slim.php';
require 'models/get.php';
require 'models/insert.php';

\Slim\Slim::registerAutoloader();
$app = new \Slim\Slim();


$app->get('/admin/',function() use($app){
	$app->render('index.html');
});



$app->post('/admin/login',function() use ($app){
	$get = new Get();
	$tipo=$get->verificaLogin($app->request->post());
	if(count($tipo)>0){
		$app->render('adminPanel.php');
		$_SESSION['usr'] = $tipo[0]['idUsuarioNegocio'];
		$_SESSION['tipo'] = $tipo[0]['tipo'];
	}
	else
	{
		$app->render('index.html');
	}
});

$app->get('/admin/categorias',function() use($app){
	$app->render('categorias.php');
});



$app->post('/categorias/save',function() use($app){
	$insert= new Insert();
	$insert->insertaCategoria($app->request->post());

});


$app->get('/get/:tabla',function($tabla) use($app){
	$get= new Get();
	$get->cargaTabla($tabla);
	
});






$app->get('/admin/subcategorias',function() use($app){
	$app->render('subCategorias.php');
});


$app->post('/subcategorias/save',function() use($app){
	$insert= new Insert();
	$insert->insertasubCategoria($app->request->post());

});


$app->get('/getSpecial/subcategorias',function() use($app){
	$get= new Get();
	$get->cargaTablaSubCategorias();
	
});







$app->get('/admin/tipos',function() use($app){
	$app->render('tipos.php');
});

$app->post('/tipos/save',function() use($app){
	$insert= new Insert();
	$insert->insertaTiposSuscripcion($app->request->post());

});


$app->get('/getSpecial/tipos',function() use($app){
	$get= new Get();
	$get->cargaTablaTipos();
	
});



$app->get('/admin/cerrar',function() use($app){
	session_destroy();
	$app->render('index.html');
});




/*--------------------inici negocios -------------*/

$app->get('/negocios/',function() use($app){
	$app->render('negocios.html');
});














$app->run();

?>