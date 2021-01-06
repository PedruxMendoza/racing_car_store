<?php 

require "../config/conexion.php";

class CRUD_venta{
	public $cnx;

	public function __construct(){
		$this->cnx=conexion::conex();
	}

	public function get_venta(){
		$query="SELECT vc.matricula,mar.nombre_marca,mol.nombre_modelo,CONCAT(cl.nombre, ' ', cl.apellido) As cliente , CONCAT(a.nombre, ' ', a.apellido) As agente, e.nombre_estado,v.total,v.fecha_venta,v.id_venta
		FROM ventas v 
		INNER JOIN vehiculos vc on vc.id_coche=v.id_coche 
		INNER JOIN clientes cl on cl.id_cliente=v.id_cliente
		INNER JOIN agente a on a.id_agente=v.id_agente 
		INNER JOIN estado_venta e ON e.id_estado_venta=v.id_estado_venta
		INNER JOIN modelo mol ON mol.id_modelo = vc.id_modelo
		INNER JOIN marca mar ON mar.id_marca = mol.id_marca";
		$exe=$this->cnx->prepare($query);
		$exe->execute();

		return $exe->fetchAll();
	}

	public function get_vehiculos(){
		$query = "SELECT * FROM vehiculos WHERE id_disponibilidad != 2";
		$exe = $this->cnx->prepare($query);
		$exe->execute();
		return $exe->fetchAll();
	}

	public function get_clientes(){
		$query = "SELECT * FROM clientes";
		$exe = $this->cnx->prepare($query);
		$exe->execute();
		return $exe->fetchAll();
	}

	public function get_agente(){
		$query = "SELECT * FROM agente";
		$exe = $this->cnx->prepare($query);
		$exe->execute();
		return $exe->fetchAll();
	}

	public function get_estado_venta(){
		$query = "SELECT * FROM estado_venta";
		$exe = $this->cnx->prepare($query);
		$exe->execute();
		return $exe->fetchAll();
	}

	public function set_venta($datos){
		$query="INSERT INTO ventas(id_coche,id_cliente,id_agente,id_estado_venta,total,fecha_venta)
		VALUES(?,?,?,?,?,?) ";
		
		$exe = $this->cnx->prepare($query);
		$exe->execute([$datos["id_coche"],$datos["id_cliente"],$datos["id_agente"],$datos["id_estado_venta"],$datos["total"],$datos["fecha_venta"]]);
		if($exe->rowCount()){
			$query2 = "UPDATE vehiculos SET
			id_disponibilidad = 2
			WHERE id_coche = ?";
			$exe2 = $this->cnx->prepare($query2);
			$exe2->execute([$datos["id_coche"]]);

			if($exe2->rowCount()){
				header("refresh: 2, url=venta_controller.php");
				return "<span class='badge badge-pill badge-success'>Ingresado exitosamente!!</span>";
			}else{
				return "<span class='badge badge-pill badge-danger'>Error al actualizar! Intente nuevamente</span>";
			}
		}else{
			return "<span class='badge badge-pill badge-danger'>Error al ingresar! Intente nuevamente</span>";
		}
	}

	public function eliminar($id){

		$coche=0;

		$query = "SELECT id_coche FROM ventas WHERE id_venta=?";
		$exe = $this->cnx->prepare($query);
		$exe->execute([$id]);

		foreach ($exe->fetchAll() as $valor) {
			$coche = $valor[0];
		}

		$query = "UPDATE vehiculos SET
		id_disponibilidad = 1
		WHERE id_coche = ?";
		$exe = $this->cnx->prepare($query);
		$exe->execute([$coche]);

		if($exe->rowCount()){
			$query="DELETE FROM ventas WHERE id_venta=?";
			$exe = $this->cnx->prepare($query);
			$exe->execute([$id]);

			if($exe->rowCount()){
				header("refresh: 2, url=venta_controller.php");
				return "<span class='badge badge-pill badge-success'>Eliminado exitosamente!!</span>";
			}else{
				return "<span class='badge badge-pill badge-danger'>Error al eliminar! Intente nuevamente</span>";
			}
		}else{
			return "<span class='badge badge-pill badge-danger'>Error al actualizar! Intente nuevamente</span>";
		}


	}






}







?>