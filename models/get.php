<?php 

class Get{

	private $usuario='root';
	private $password='';

	public function conecta(){
	try{
		$db = new PDO('mysql:host=localhost;dbname=olin', $this->usuario, $this->password);
		return $db;
	}catch (PDOException $e) {
		print "ERROR: " . $e->getMessage();
		die();
	}}


	public function consultaRetorno($sql){
		$db=$this->conecta();
		$query=$db->prepare($sql);
		$query->execute();
		return $query->fetchAll(PDO::FETCH_ASSOC);
	}

	public function verificaLogin($datos){
		$db=$this->conecta();
		$sql="SELECT tipo,idUsuarioNegocio from usuariosnegocios WHERE nombre='".$datos['user']."' AND password='".$datos['password']."'";
		$datos=$this->consultaRetorno($sql);
		return $datos;
	}

	public function cargaTabla($tabla){
		$db=$this->conecta();
		$sql="SELECT * from ".$tabla;
		$datos=$this->consultaRetorno($sql);
		echo json_encode($datos);
	}


	public function cargaTablaSubCategorias(){
		$db=$this->conecta();
		$sql="select sc.nombre, c.nombre as categoria from subcategorias sc inner join categorias c on sc.idCategoria=c.idCategoria";
		$datos=$this->consultaRetorno($sql);
		echo json_encode($datos);
	}

	public function checaTablaNegocios($id){
		$db=$this->conecta();
		$sql="SELECT * from negocios WHERE idNegocio=".$id;
		$datos=$this->consultaRetorno($sql);
		return $datos;
	}	

	public function getSubCategoriasByCat($id){
		$db=$this->conecta();
		$sql="SELECT * from subCategorias WHERE idCategoria=".$id['datos'];
		$datos=$this->consultaRetorno($sql);
		
		echo json_encode($datos);
	}

}

 ?>