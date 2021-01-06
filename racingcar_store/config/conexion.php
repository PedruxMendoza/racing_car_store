<?php 

session_start();

class conexion
{
	
	public function conex()
	{
		$pdo = new pdo("mysql: host=localhost; dbname=racingcar_store; charset=utf8","root","");
		return $pdo;
	}
}

?>