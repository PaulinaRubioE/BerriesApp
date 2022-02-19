<?php

include "utils.php";
$dbConn =  connect($db);

//SELECT
if ($_SERVER['REQUEST_METHOD'] == 'GET')
{
    if (isset($_GET['id']))
    {
      $id_empleados=$_GET['id'];
	  
	  if($id_empleados != "")
	  {
		$sql = $dbConn->prepare("SELECT * FROM empleados where id= '". $id_empleados ."' ;");
		$sql->execute();
		$sql->setFetchMode(PDO::FETCH_ASSOC);
		header("HTTP/1.1 200 OK");
		echo json_encode( $sql->fetchAll()  );
		exit();
	  }
	  else 
	  {
		//Mostrar lista de post
		$sql = $dbConn->prepare("SELECT * from empleados;");
		$sql->execute();
		$sql->setFetchMode(PDO::FETCH_ASSOC);
		header("HTTP/1.1 200 OK");
		echo json_encode( $sql->fetchAll()  );
		exit();
	  }
	}
}

//INSERT AND UPDATE
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
	
	$data = json_decode(file_get_contents('php://input'), true);
	

		$nombre = $data['nombre'];
		$fecha_nacimiento=$data['fecha_nacimiento'];
		$domicilio=$data['domicilio'];
		$telefono=$data['telefono'];
		$correo=$data['correo'];
		$puesto=$data['puesto'];
		$estatus=$data['estatus'];
		
		$sql="INSERT INTO empleados(nombre, fecha_nacimiento, domicilio, telefono, correo, puesto, estatus) 
							VALUES (:nombre, :fecha_nacimiento, :domicilio, :telefono, :correo, :puesto, :estatus);"; 
		
		$sql = $dbConn->prepare($sql);
		$sql->bindParam(':nombre',$nombre);
		$sql->bindParam(':fecha_nacimiento',$fecha_nacimiento);
		$sql->bindParam(':domicilio',$domicilio);
		$sql->bindParam(':telefono',$telefono);
		$sql->bindParam(':correo',$correo);
		$sql->bindParam(':puesto',$puesto);
		$sql->bindParam(':estatus',$estatus);

		$sql->execute();

	/*
	else if(isset($_POST['update']))
	{
		$nombre=$_POST['nombre'];
		$correo=$_POST['correo'];
		$domicilio=$_POST['domicilio'];
		$giro=$_POST['giro'];
		
		$sql="UPDATE empleados SET nombre= :nombre,corre= :correo,domicilio= :domicilio,giro= :giro ; ";
		$sql = $dbConn->prepare($sql);
		$sql->bindParam(':nombre',$nombre,PDO::PARAM_STR, 25);
		$sql->bindParam(':correo',$correo,PDO::PARAM_STR, 25);
		$sql->bindParam(':domicilio',$domicilio,PDO::PARAM_STR,25);
		$sql->bindParam(':giro',$giro,PDO::PARAM_STR,25);
		$sql->execute();
	}
*/
}

//DELETE
if ($_SERVER['REQUEST_METHOD'] == 'DELETE')
{
 if (isset($_POST['id']))
	{
		$id=$_POST['id'];
		
		$sql="DELETE FROM empleados WHERE id= :id;";
		$sql = $connect->prepare($sql);
		$sql->bindParam(':id',$id,PDO::PARAM_STR, 25);
		$sql->execute();
		
	}

}


?>

