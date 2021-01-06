<?php 

require "../config/conexion.php";

/**
 * 
 */
/*Cambiar nombre de CRUD_cliente por CRUD_(su_tabla)*/
class CRUD_cliente
{

	public $cnx;
	
	public function __construct(){
		$this->cnx = conexion::conex();
	}
	/*Cambiar nombre de get_clientes por get_(su_tabla)*/
	public function get_clientes(){
		/*Cambiar SELECT del query*/
		$query = "SELECT c.nombre, c.apellido, c.usuario, r.nombre_rol, ci.nombre_ciudad, d.nombre_departamento, c.id_cliente 
		FROM clientes c 
		INNER JOIN rol r ON r.id_rol = c.id_rol 
		INNER JOIN ciudad ci ON ci.id_ciudad = c.id_ciudad 
		INNER JOIN departamento d ON d.id_departamento = ci.id_departamento";
		$exe = $this->cnx->prepare($query);
		$exe->execute();

		return $exe->fetchAll();
	}

	public function borrar($id)
	{
		$query = "DELETE FROM clientes WHERE id_cliente = ?";
		$exe = $this->cnx->prepare($query);
		$exe->execute([$id]);

		if ($exe->rowCount()) {
			header("refresh: 2, url=cliente_controller.php");
			return "<span class='badge badge-pill badge-success'>Eliminado exitosamente!!</span>";
		}else{
			return "<span class='badge badge-pill badge-danger'>Error al eliminar! Intente nuevamente</span>";
		}
	}

	public function get_rol(){
		$query = "SELECT * FROM rol";
		$exe = $this->cnx->prepare($query);
		$exe->execute();
		return $exe->fetchAll();
	}

	public function get_ciudad(){
		$query = "SELECT * FROM ciudad";
		$exe = $this->cnx->prepare($query);
		$exe->execute();
		return $exe->fetchAll();
	}

	public function set_clientes($datos){
		$query = "INSERT INTO clientes (nombre, apellido, usuario, clave, id_rol, telefono, id_ciudad)
		VALUES (?,?,?,?,?,?,?)";
		$exe = $this->cnx->prepare($query);
		$exe->execute([$datos["nombre"],$datos["apellido"],$datos["usuario"],$datos["clave"],$datos["id_rol"],$datos["telefono"],$datos["id_ciudad"]]);

		if ($exe->rowCount()) {
			header("refresh: 2, url=cliente_controller.php");
			return "<span class='badge badge-pill badge-success'>Ingresado exitosamente!!</span>";
		}else{
			return "<span class='badge badge-pill badge-danger'>Error al ingresar! Intente nuevamente</span>";
		}
	}

	public function get_datos_clientes($id)
	{
		$query = "SELECT * FROM clientes WHERE id_cliente = ?";
		$exe = $this->cnx->prepare($query);
		$exe->execute([$id]);
		return $exe->fetchAll();
	}

	public function actualizar($datos){
		$query = "UPDATE clientes SET
		nombre = ?,
		apellido = ?,
		usuario = ?,
		id_rol = ?,
		telefono = ?,
		id_ciudad = ?
		WHERE id_cliente = ?";
		$exe = $this->cnx->prepare($query);
		$exe->execute([$datos["nombre"],$datos["apellido"],$datos["usuario"],$datos["id_rol"],$datos["telefono"],$datos["id_ciudad"],$datos["id"]]);

		if ($exe->rowCount()) {
			header("refresh: 2, url=cliente_controller.php");
			return "<span class='badge badge-pill badge-success'>Actualizado exitosamente!!</span>";
		}else{
			return "<span class='badge badge-pill badge-danger'>Error al actualizar! Intente nuevamente</span>";
		}
	}
}

?>