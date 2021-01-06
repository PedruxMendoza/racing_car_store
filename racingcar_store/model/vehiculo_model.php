<?php 

require "../config/conexion.php";


class CRUD_vehiculo{

	public $con;

	public function __construct(){

		$this->con = conexion::conex();

	}//cierre metodo constructor

	public function get_vehiculo(){

		$query = "SELECT a.matricula, a.color, a.anio, a.precio_unitario, m.nombre_modelo, ea.nombre_estado, d.disponibilidad, c.nombre, a.id_coche FROM vehiculos a INNER JOIN modelo m ON m.id_modelo = a.id_modelo INNER JOIN estado_auto ea ON ea.id_estado = a.id_estado INNER JOIN disponibilidad d ON d.id_disponibilidad = a.id_disponibilidad INNER JOIN concesionario c ON c.id_concesionario = a.id_concesionario";

		$exe = $this->con->prepare($query);
		$exe->execute();

		return $exe->FetchAll();

}//cierre metodo get vehiculo

public function eliminar($id){

	$query = "DELETE FROM vehiculos where id_coche=?";

	$exe = $this->con->prepare($query);
	$exe->execute([$id]);


	if ($exe->rowCount()) {
		header("refresh: 2; url=vehiculo_controller.php");
		return "<span class='badge badge-pill badge-success'>Se elimino de la base de datos general!!</span>";
	}else{
		header("refresh: 2; url=vehiculo_controller.php");
		return "<span class='badge badge-pill badge-danger'>Error al eliminar! Este vehiculo no puede ser eliminado porque ya fue vendido</span>";

	}

 }//cierre metodo eliminar

 public function get_modelo(){

 	$query = "SELECT * FROM  modelo";
 	$exe = $this->con->prepare($query);
 	$exe->execute();

 	return $exe->FetchAll();
 }


 public function get_estado(){

 	$query = "SELECT * FROM  estado_auto";
 	$exe = $this->con->prepare($query);
 	$exe->execute();
 	
 	return $exe->FetchAll();
 }

 public function get_disponibilidad(){

 	$query = "SELECT * FROM  disponibilidad";
 	$exe = $this->con->prepare($query);
 	$exe->execute();
 	
 	return $exe->FetchAll();
 }

 public function get_concesionaria(){

 	$query = "SELECT * FROM  concesionario";
 	$exe = $this->con->prepare($query);
 	$exe->execute();
 	
 	return $exe->FetchAll();
 }

 public function set_vehiculo($datos){

 	$query = "INSERT INTO vehiculos (matricula,color,anio,precio_unitario,id_modelo,id_estado,id_disponibilidad,id_concesionario)
 	VALUES (?,?,?,?,?,?,?,?)";
 	$exe = $this->con->prepare($query);
 	$exe->execute([$datos ["matricula"],$datos ["color"],$datos ["anio"],$datos ["precio"],$datos ["modelo"],$datos ["estado"],$datos ["dispo"],$datos ["concesionaria"]]);

 	if($exe->rowCount()){
 		header("refresh: 2; url=vehiculo_controller.php");
 		return "<span class='badge badge-pill badge-success'>Vehiculo Ingresado a sistema!!</span>";
 	}else{
 		header("refresh: 2; url=vehiculo_controller.php");
 		return "<span class='badge badge-pill badge-danger'>Error al ingresar! Intente nuevamente</span>";
 	}

 }


 public function get_vehiculoAct($id){


 	$query = "SELECT * FROM vehiculos WHERE id_coche = ?";
 	$exe = $this->con->prepare($query);
 	$exe->execute([$id]);

 	return $exe->fetchAll();

 }//cierre de get_vehiculoAct


 public function set_vehiculoAct($datos){

 	$query = "UPDATE vehiculos SET 
 	matricula=?,
 	color=?,
 	anio=?,
 	precio_unitario=?,
 	id_modelo=?,
 	id_estado=?,
 	id_disponibilidad=?,
 	id_concesionario=?
 	WHERE id_coche=?";

 	$exe = $this->con->prepare($query);
 	$exe->execute([$datos ["matricula"],$datos ["color"],$datos ["anio"],$datos ["precio"],$datos ["modelo"],$datos ["estado"],$datos ["dispo"],$datos ["concesionaria"],$datos ["id"]]);


 	if ($exe->rowCount()) {
 		header("refresh: 2; url=vehiculo_controller.php");
 		return "<span class='badge badge-pill badge-success'>Actualizado exitosamente!!</span>";
 	}else{
 		header("refresh: 2; url=vehiculo_controller.php");
 		return "<span class='badge badge-pill badge-danger'>Error al actualizar! Intente nuevamente</span>";
 	}

 }//cierre set_vehiculoAct




}//cierre clase





?>