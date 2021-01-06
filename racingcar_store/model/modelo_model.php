<?php 

require "../config/conexion.php";

/**
 * 
 */
class CRUD_modelo
{ public $cnx;
	
	function __construct()
	{
		$this->cnx=conexion::conex();
	}

	public function get_modelo(){
		$query="SELECT ma.nombre_marca, m.nombre_modelo,m.imagen,m.id_modelo
		FROM modelo m 
		inner join marca ma on ma.id_marca=m.id_marca";
		$exe=$this->cnx->prepare($query);
		$exe->execute();

		return $exe->fetchAll();
	}//fin

	public function get_marcas(){
		$query="SELECT * FROM marca";
		$exe=$this->cnx->prepare($query);
		$exe->execute();

		return $exe->fetchAll();

	}

	public function guardar($datos){
		$query="INSERT INTO modelo(nombre_modelo,id_marca,imagen) 
		VALUES (?,?,?)";
		$exe=$this->cnx->prepare($query);
		$exe->execute([$datos["modelo"],$datos["marca"],$datos["imagen"]]);

		if($exe->rowCount()){
			header("refresh: 2, url=modelo_controller.php");
			return "<span class='badge badge-pill badge-success'>Ingresado exitosamente!!</span>";
		}else{ 
			return "<span class='badge badge-pill badge-danger'>Error al ingresar! Intente nuevamente</span>";
		}


	}

	public function get_modelo_act($id){
		$query="SELECT * FROM modelo WHERE id_modelo = ?";
		$exe=$this->cnx->prepare($query);
		$exe->execute([$id]);

		return $exe->fetchAll();
	}


	public function actualizar($datos){
		$query="UPDATE modelo SET 
		nombre_modelo=?,
		imagen= ?,
		id_marca=?
		WHERE id_modelo=?";
		$exe=$this->cnx->prepare($query);
		$exe->execute([$datos["modelo"],$datos["imagen"],$datos["marca"],$datos["id_modelo"]]);

		if($exe->rowCount()){
			header("refresh: 2, url=modelo_controller.php");
			return "<span class='badge badge-pill badge-success'>Actualizado exitosamente!!</span>";
		}else{ 
			return "<span class='badge badge-pill badge-danger'>Error al actualizar! Intente nuevamente</span>";
		}


	}




}//fin del clase







?>