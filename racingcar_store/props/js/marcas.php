<?php 

require "../../config/conexion.php";

class marcas{

	private $con;

	public function __construct(){
		$this ->con = conexion::conex();
	}
	public function get_modelo($id){
		
		$query = "SELECT * FROM modelo WHERE id_marca = ?";
		$exe = $this ->con-> prepare($query);
		$exe -> execute([$id]);
		return $exe -> fetchAll();	
	}
	
}

$marca = new marcas;

if(empty($_POST['p'])){
}else{ 
	$id = $_POST['p'];
		?>
		<label>materia</label>
		<select name="modelo" id="modelo">
			<option value="">-- Seleccione un modelo --</option>
			<?php foreach ($marca -> get_modelo($id) as $valor) { ?>
				<option value="<?php echo $valor[0] ?>"><?php echo $valor[1] ?></option>
			<?php	} ?>
		</select>

	<?php }	?>

