<?php 

require "../model/home_model.php";

/**
 * 
 */
class home
{
	public $obj_home;

	public function __construct()
	{
		$this->obj_home = new CATALOGO_HOME;
	}

	public function index()
	{
		require 'index.php';
	}

	public function get_datos(){
		require "../view/modelo_disponible.php";
	}
}

$obj_local = new home;

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