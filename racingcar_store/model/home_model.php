<?php 

require "../config/conexion.php";

/**
 * 
 */
class CATALOGO_HOME
{
	public $cnx;

	public function __construct()
	{
		$this->cnx = conexion::conex();
	}

	public function get_vehiculos($id)
	{
		$query="SELECT m.nombre_modelo, m.id_marca, v.precio_unitario, m.imagen FROM modelo m 
		INNER JOIN vehiculos v ON v.id_modelo = m.id_modelo
		WHERE v.id_disponibilidad != 2 AND m. id_marca = ?";
		$exe = $this->cnx->prepare($query);
		$exe-> execute([$id]);

		return $exe->fetchAll();
	}
}

?>