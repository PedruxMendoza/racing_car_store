<?php 

require "../config/conexion.php";

class validarLogin{

	private $con;

	public function __construct(){
		$this->con = conexion::conex();
	}

	public function validar($datos){
		
		$query="SELECT * FROM clientes WHERE usuario=? AND clave=?";
		$exe=$this->con->prepare($query);
		$exe->execute([$datos->user,$datos->pass]);

		if($exe->rowCount()>0){

			foreach ($exe->fetchAll() as $datos) {
				$_SESSION["rol"] = $datos[5];
				$_SESSION["nombre"] = $datos[1];
			}
			return true;

		}else{

			$query="SELECT * FROM agente WHERE usuario=? AND clave=?";
			$exe=$this->con->prepare($query);
			$exe->execute([$datos->user,$datos->pass]);

			if($exe->rowCount()>0){
				foreach ($exe->fetchAll() as $datos) {
					$_SESSION["rol"] = $datos[6];
					$_SESSION["nombre"] = $datos[1];
				}
				return true;
			}else{
				return false;
			}
			
		} 

	}

}
?>