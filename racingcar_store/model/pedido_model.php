<?php 

require "../config/conexion.php";

/**
 * 
 */
/*Cambiar nombre de CRUD_cliente por CRUD_(su_tabla)*/
class CRUD_pedido
{

	public $cnx;
	
	public function __construct(){
		$this->cnx = conexion::conex();
	}
	/*Cambiar nombre de get_clientes por get_(su_tabla)*/
	public function get_pedidos(){
		/*Cambiar SELECT del query*/
		$query = "SELECT m.nombre_modelo, ma.nombre_marca, pa.nombre_pais, pr.nombre, c.nombre, p.fecha_pedido, p.fecha_entrega, p.id_pedido 
		FROM pedidos p 
		INNER JOIN modelo m ON m.id_modelo = p.id_modelo 
		INNER JOIN marca ma ON ma.id_marca = m.id_marca 
		INNER JOIN pais pa ON pa.id_pais = ma.id_pais 
		INNER JOIN proveedores pr ON pr.id_proveedor = p.id_proveedor 
		INNER JOIN concesionario c ON c.id_concesionario = p.id_concesionario 
		ORDER BY p.fecha_pedido desc";

		$exe = $this->cnx->prepare($query);
		$exe->execute();

		return $exe->fetchAll();
	}//cierre de get_pedidos

	public function borrar($id){
		$query = "DELETE FROM pedidos WHERE id_pedido=?";
		$exe = $this->cnx->prepare($query);
		$exe->execute([$id]);

		if ($exe->rowCount()) {
			header("refresh: 2, url=pedido_controller.php");
			return "<span class='badge badge-pill badge-success'>Eliminado exitosamente!!</span>";
		}else{
			return "<span class='badge badge-pill badge-danger'>Error al eliminar! Intente nuevamente</span>";
		}//cierre de else
	}//cierre de metodo borrar

	public function get_modelo(){
		$query = "SELECT * FROM modelo";

		$exe = $this->cnx->prepare($query);
		$exe->execute();

		return $exe->fetchALL();
	}//final get_modelo

	public function get_marca(){
		$query ="SELECT *FROM marca";
		$exe = $this->cnx->prepare($query);
		$exe->execute();

		return $exe->fetchALL();
	}//final get_marca


	public function get_proveedor(){
		$query ="SELECT *FROM proveedores";
		$exe = $this->cnx->prepare($query);
		$exe->execute();

		return $exe->fetchALL();
	}//final get_pais

	public function get_concesionario(){
		$query ="SELECT *FROM concesionario";
		$exe = $this->cnx->prepare($query);
		$exe->execute();

		return $exe->fetchALL();
	}//final get_pais



	public function set_pedido($datos){
		$query = "INSERT INTO pedidos(id_modelo,cantidad,id_concesionario,fecha_pedido,hora_pedido, fecha_entrega,hora_entrega,id_proveedor)
		VALUES(?,?,?,?,?,?,?,?)";

		$exe = $this->cnx->prepare($query);

		$exe->execute([$datos["id_modelo"], $datos["cantidad"], $datos["id_concesionario"], $datos["fecha_pedido"], $datos["hora_pedido"] , $datos["fecha_entrega"], $datos["hora_entrega"],$datos["id_proveedor"],]);

		if ($exe->rowCount()) {
			header("refresh: 2, url=pedido_controller.php");
			return "<span class='badge badge-pill badge-success'>Ingresado exitosamente!!</span>";
		}else{
			return "<span class='badge badge-pill badge-danger'>Error al ingresar! Intente nuevamente</span>";
		}
	}

	public function get_datos_pedidos($id){ 
		$query = "SELECT * FROM pedidos WHERE id_pedido = ?";
		$exe = $this->cnx->prepare($query);
		$exe->execute([$id]);

		return $exe->fetchAll();
    }//cierre de metodo get_datos_pedidos

    public function actualizar($datos){ 
    	$query = "UPDATE pedidos SET
    	id_modelo = ?,
    	cantidad = ?,
    	id_proveedor = ?,
    	id_concesionario = ?
    	WHERE id_pedido = ?";
    	$exe = $this->cnx->prepare($query);
    	$exe->execute([$datos["id_modelo"], $datos["cantidad"], $datos["id_proveedor"], $datos["id_concesionario"], $datos["id"]]);

    	if($exe->rowCount()){
    		header("refresh: 2, url=pedido_controller.php");
    		return "<span class='badge badge-pill badge-success'>Actualizado exitosamente!!</span>";
    	}else{
    		return "<span class='badge badge-pill badge-danger'>Error al actualizar! Intente nuevamente</span>";
    	}
    }//cierre de metodo actualizar  

    





}



?>