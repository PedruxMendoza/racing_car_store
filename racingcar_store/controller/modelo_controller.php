<?php 

require "../model/modelo_model.php";

/**
 * 
 */
class modelo
{ public $obj_m;
	
	public function __construct()
	{
		$this->obj_m= new CRUD_modelo;
	}

	public function index(){
		require "../view/modelo_view.php";
	}

	public function guardar(){

		$archivo = $_FILES['imagen']['name'];
      //Obtenemos algunos datos necesarios sobre el archivo
		$tipo = $_FILES['imagen']['type'];     
		$tamano = $_FILES['imagen']['size'];
		$temp = $_FILES['imagen']['tmp_name']; 
		$imagen=$_POST["modelo"].".jpeg";

      //Se comprueba si el archivo a cargar es correcto observando su extensión y tamaño
		if (!((strpos($tipo, "jpeg") || strpos($tipo, "jpg") || strpos($tipo, "png") ) && ($tamano < 4000000))) {

			//$not3=base64_encode("Error");
			//header("location:../vista/forms/modificar/EditCandidato.php?reg=$Foto&not3=$not3");
		}else {  	
        //Si la imagen es correcta en tamaño y tipo
        //Se intenta subir al servidor
			if (move_uploaded_file($temp, '../props/catalogo/'.$imagen)) {
            //Cambiamos los permisos del archivo a 777 para poder modificarlo posteriormente
				chmod('../props/catalogo/'.$imagen, 0777);          
			}else {
				//$not2=base64_encode("Error");
				//header("location:../vista/forms/modificar/EditCandidato.php?reg=$Foto&not2=$not2");
			}
		}

		$datos["modelo"]=$_POST["modelo"];
		$datos["marca"]=$_POST["marca"];
		$datos["imagen"]=$imagen;

		$mensaje=$this->obj_m->guardar($datos);
		require "../view/modelo_view.php";
	}

	public function get_datos(){
		require "../view/modelo_viewact.php";

	}

	public function actualizar(){
		$archivo = $_FILES['imagen']['name'];
      //Obtenemos algunos datos necesarios sobre el archivo
		$tipo = $_FILES['imagen']['type'];     
		$tamano = $_FILES['imagen']['size'];
		$temp = $_FILES['imagen']['tmp_name']; 
		$imagen=$_POST["modelo"].".jpeg";

      //Se comprueba si el archivo a cargar es correcto observando su extensión y tamaño
		if (!((strpos($tipo, "jpeg") || strpos($tipo, "jpg") || strpos($tipo, "png") ) && ($tamano < 4000000))) {

			//$not3=base64_encode("Error");
			//header("location:../vista/forms/modificar/EditCandidato.php?reg=$Foto&not3=$not3");
		}else {  	
        //Si la imagen es correcta en tamaño y tipo
        //Se intenta subir al servidor
			if (move_uploaded_file($temp, '../props/catalogo/'.$imagen)) {
            //Cambiamos los permisos del archivo a 777 para poder modificarlo posteriormente
				chmod('../props/catalogo/'.$imagen, 0777);          
			}else {
				//$not2=base64_encode("Error");
				//header("location:../vista/forms/modificar/EditCandidato.php?reg=$Foto&not2=$not2");
			}
		}
		
		$datos["modelo"]=$_POST["modelo"];
		$datos["marca"]=$_POST["marca"];
		$datos["id_modelo"]=$_POST["id"];
		$datos["imagen"]=$imagen;

		$mensaje=$this->obj_m->actualizar($datos);
		require "../view/modelo_view.php";
	}
}

$obj_local=new modelo;
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