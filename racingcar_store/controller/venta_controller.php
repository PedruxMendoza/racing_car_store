<?php 

require "../model/venta_model.php";

class venta{
	public $obj_venta;

	public function __construct(){
		$this->obj_venta=new CRUD_venta;
	}

	public function index(){
		require "../view/venta_view.php";
	}

	public function guardar(){
		$datos["id_coche"] = $_POST["coche"];
		$datos["id_cliente"] = $_POST["cliente"];
		$datos["id_agente"] = $_POST["agente"];
		$datos["id_estado_venta"] = $_POST["estado_venta"];
		$datos["total"] = $_POST["total"];
		$datos["fecha_venta"] = date("Y-m-d");
		
		

		$mensaje = $this->obj_venta->set_venta($datos);
		require "../view/venta_view.php";
	}

	public function eliminar(){
		$mensaje=$this->obj_venta->eliminar(base64_decode($_REQUEST["id"]));
		require "../view/venta_view.php";

	}
}

$obj_local = new venta;

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