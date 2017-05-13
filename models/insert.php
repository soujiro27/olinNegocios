<?php  

class Insert{
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


	public function consultaEjecuta($sql){
		$db=$this->conecta();
		$query=$db->prepare($sql);
		$query->execute();
		
	}

	public function insertaCategoria($data){
		$db=$this->conecta();
		$usr=$_SESSION['usr'];
		$sql="INSERT INTO Categorias(nombre,usrAlta) values('".$data['nombre']."','".$usr."')";
		echo $sql;
		$datos=$this->consultaEjecuta($sql);
		
	}

	public function insertasubCategoria($data){
		$db=$this->conecta();
		$usr=$_SESSION['usr'];
		$sql="INSERT INTO subcategorias(nombre,idCategoria,usrAlta) values('".$data['nombre']."','".$data['idCategoria']."','".$usr."')";
		$datos=$this->consultaEjecuta($sql);
		
	}


		public function insertaTiposSuscripcion($data){
		$db=$this->conecta();
		$usr=$_SESSION['usr'];
		$sql="INSERT INTO tiposuscripcion(nombre,promociones,usrAlta) values('".$data['nombre']."','".$data['promociones']."','".$usr."')";
		$datos=$this->consultaEjecuta($sql);
		
	}

}

?>