<?php 

require "../model/cliente_model.php";

/**
 * 
 */
/*Cambiar nombre de cliente por (su_tabla)*/
class cliente
{	/*Cambiar obj_cliente por obj_(su_tabla)*/
	public $obj_cliente;

	public function __construct(){
		/*Cambiar obj_cliente y CRUD_cliente por el nombre de su tabla obj_(su_tabla)*/
		$this->obj_cliente = new CRUD_cliente;
	}

	public function index(){
		require "../view/cliente_view.php";
	}

	public function eliminar(){
		$mensaje=$this->obj_cliente->borrar(base64_decode($_REQUEST["id"]));
		require "../view/cliente_view.php";
	}

	public function guardar(){
		$datos["nombre"] = $_POST["nombre"];
		$datos["apellido"] = $_POST["apellido"];
		$datos["usuario"] = $_POST["usuario"];
		$datos["clave"] = md5($_POST["clave"]);
		$datos["id_rol"] = $_POST["rol"];
		$datos["telefono"] = $_POST["telefono"];
		$datos["id_ciudad"] = $_POST["ciudad"];		

		$mensaje = $this->obj_cliente->set_clientes($datos);
		require "../view/cliente_view.php";
	}

	public function get_datos(){
		require "../view/cliente_viewact.php";
	}

	public function actualizar(){
		$datos["id"] = $_POST["id"];
		$datos["nombre"] = $_POST["nombre"];
		$datos["apellido"] = $_POST["apellido"];
		$datos["usuario"] = $_POST["usuario"];
		$datos["id_rol"] = $_POST["rol"];
		$datos["telefono"] = $_POST["telefono"];
		$datos["id_ciudad"] = $_POST["ciudad"];

		$mensaje = $this->obj_cliente->actualizar($datos);
		require "../view/cliente_view.php";	
	}
}
/*Cambiar nombre de la clase cliente por su tabla*/
$obj_local = new cliente;

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