<?php 

require "../model/login_model.php";

class Login{
	
	private $obj_modelo;

	public function __construct(){
		$this->obj_modelo = new validarLogin;
	}

	public function Index(){
		require "../view/login_view.php";
	}

	public function Ingresar(){
		$datos = $this->obj_modelo;
		$datos->user = $_POST["usuario"];
		$datos->pass = md5($_POST["pass"]);
		if($this->obj_modelo->validar($datos)==true){
			$mensaje = "<span class='badge badge-pill badge-success'>BIENVENIDO!!</span>";
			header("location:home_controller.php");
			require "../view/login_view.php";
		}else{
			$mensaje = "<span class='badge badge-pill badge-danger'>Usuario o contraseña son incorrectas! Intente nuevamente</span>";
			require "../view/login_view.php";
		}

	}
}

$obj_local = new Login;

if(isset($_POST["action"])){
	$obj_local->Ingresar();
}else{
	$obj_local->Index();
}
?>