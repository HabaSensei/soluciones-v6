<?php
class Conectar
{
	public static function con()
	{
		$conexion = ($GLOBALS["___mysqli_ston"] = mysqli_connect("localhost", "solucioc_user", "h3b24p@U"));
		mysqli_query($GLOBALS["___mysqli_ston"], "SET NAMES 'UTF-8'");
		mysqli_select_db($GLOBALS["___mysqli_ston"], 'solucioc_bd');
		return $conexion;
	}
}

$var_buscador = $_GET['s'];


class Buscador
{
	private $busqueda=array();
	
	public function buscar()
	{
		//print_r($_GET);exit;
		$query = "SELECT `producto`.*, `perfil`.*, `producto`.`NombreProd` FROM `producto` , `perfil` WHERE NombreProd like '%".$_GET['s']."%' OR Marca like '%".$_GET['s']."%' OR Modelo like '%".$_GET['s']."%'  OR CodigoProd like '%".$_GET['s']."%' ;";
		$res = mysqli_query(Conectar::con(), $query);
		while ($reg=mysqli_fetch_assoc($res))
		{
			$this->busqueda[] = $reg;
		}
			return $this->busqueda;
	}
}
   





?>
