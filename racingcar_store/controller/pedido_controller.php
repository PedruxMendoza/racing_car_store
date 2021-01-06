<?php

require "../model/pedido_model.php";

/**
 * 
 */
/*Cambiar nombre de cliente por (su_tabla)*/
class pedido
{	/*Cambiar obj_cliente por obj_(su_tabla)*/
	public $obj_pedido;

	public function __construct(){
		/*Cambiar obj_cliente y CRUD_cliente por el nombre de su tabla obj_(su_tabla)*/
		$this->obj_pedido = new CRUD_pedido;
	}

	public function index(){
		require "../view/pedido_view.php";
	}//cierre de index

	public function eliminar(){
		$mensaje = $this->obj_pedido->borrar(base64_decode($_REQUEST["id"]));
		require "../view/pedido_view.php";
	}//cierre de eliminar

	public function guardar(){
		$datos["id_modelo"] = $_POST["modelo"];
		$datos["cantidad"] = $_POST["cantidad"];
		$datos["id_proveedor"] = $_POST["proveedor"];
		$datos["id_concesionario"] = $_POST["concesionario"];
		$datos["fecha_pedido"] = date("Y-m-d");
		$datos["hora_pedido"] = date("h:m:s");
		$fecha_actual = date("Y-m-d");
		$fecha = date("Y-m-d",strtotime('+ 3 month'));
		$datos["fecha_entrega"] = $fecha;
		$datos["hora_entrega"] = date("h:m:s");

		$mensaje = $this->obj_pedido->set_pedido($datos);
		require "../view/pedido_view.php";

	}//fin de lafuncion guardar.

	public function get_datos(){
		require "../view/pedido_viewact.php";

	}

	public function actualizar(){
		$datos["id"] = $_POST["id"];
		$datos["id_modelo"] = $_POST["modelo"];
		$datos["cantidad"] = $_POST["cantidad"];
		$datos["id_proveedor"] = $_POST["proveedor"];
		$datos["id_concesionario"] = $_POST["concesionario"];


		$mensaje = $this->obj_pedido->actualizar($datos);
		require "../view/pedido_view.php";
	}













}
/*Cambiar nombre de la clase cliente por su tabla*/
$obj_local = new pedido;

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
}
?>