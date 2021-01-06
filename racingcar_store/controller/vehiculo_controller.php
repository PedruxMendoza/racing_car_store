<?php 


require "../model/vehiculo_model.php";

class vehiculo{

	public $obj_model;

	public function __construct(){


		$this->obj_model = new CRUD_vehiculo;

	}//cierre metodo constructor


	public function index(){

		require "../view/vehiculo_view.php";


	}//cierre metodo index

	public function eliminar(){

		$mensaje = $this->obj_model->eliminar(base64_decode($_REQUEST["id"]));
		require "../view/vehiculo_view.php";

	}//cierre metodo eliminar

	public function guardar(){

		$datos ["matricula"] = $_POST["matricula"];
		$datos ["color"] = $_POST["color"];
		$datos ["anio"] = $_POST["anio"];
		$datos ["precio"] = $_POST["precio"];
		$datos ["modelo"] = $_POST["modelo"];
		$datos ["estado"] = $_POST["estado"];
		$datos ["dispo"] = $_POST["dispo"];
		$datos ["concesionaria"] = $_POST["concesionaria"];
		

		$mensaje = $this->obj_model->set_vehiculo($datos);

		require "../view/vehiculo_view.php";

	}//cierre de metodo guardar

	public function get_datos(){

		require "../view/vehiculo_viewact.php";

	}//cierre metodo get_datos

	public function actualizar(){
		$datos ["id"] = $_POST["id"];
		$datos ["matricula"] = $_POST["matricula"];
		$datos ["color"] = $_POST["color"];
		$datos ["anio"] = $_POST["anio"];
		$datos ["precio"] = $_POST["precio"];
		$datos ["modelo"] = $_POST["modelo"];
		$datos ["estado"] = $_POST["estado"];
		$datos ["dispo"] = $_POST["dispo"];
		$datos ["concesionaria"] = $_POST["concesionaria"];
		

		$mensaje = $this->obj_model->set_vehiculoAct($datos);

		require "../view/vehiculo_view.php";

	}//cierre metodo actualizar


}//cierre clase


$obj_local = new vehiculo;


if (isset($_REQUEST["action"])){
	if ($_REQUEST["action"]=="Guardar") {
		$action = "Guardar";
	}elseif($_REQUEST["action"]=="Actualizar"){
		$action = "actualizar";
	}else{
		$action = base64_decode($_REQUEST["action"]);
	}
	$obj_local->$action();
}else{

	$obj_local->index();


}//cierre elseif


?>