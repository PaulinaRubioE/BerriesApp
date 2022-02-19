<?php
class DataModel
{
    private $db;
	private $respuestas;
 
	public function __construct()
	{
        $db=self::conexion();
        
    }
    public function get_empleados()
	{
		$empleados=array();
        $consulta=("select * from empleados");
		$result =self::conexion()->query($consulta);
		if($result)
		{
			$tabla=$result->fetch_all();
			/*
			while($row=$result->fetch_array())
			{
				$empleados[]=$row[1];
			}
			*/
			return $tabla;
		}
        
    }
	public static function conexion()
	{
        $conexion=new mysqli("localhost", "root", "", "sisprod");
        $conexion->query("SET NAMES 'utf8'");
        return $conexion;
    }
}
?>
