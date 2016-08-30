<?php
	header('Content-Type: text/html; charset=UTF-8');
	header('Content-type: application/json');
	require_once("facade.php");

	$errores = Array();
	$return['error'] = false;
	$return['msg'] = "";


	$db = new Facade();
	$db->beginTransaction();
	$data= Array("email" => $_REQUEST['email'],"contrasena" => $_REQUEST['contrasena']);
	$stmt = $db->checkLogin($data);

		if($stmt != null){
				session_start();
				$_SESSION['email'] = $stmt[0]['email'];
				$_SESSION['nombre'] = $stmt[0]['nombre'];
				$_SESSION['apellidos'] = $stmt[0]['apellidos'];
				$_SESSION['imagen'] = $stmt[0]['imagen'];
				$_SESSION['plan'] = $stmt[0]['plan'];
				$_SESSION['rango_etario'] = $stmt[0]['rango_etario'];
				$_SESSION['objetivo'] = $stmt[0]['objetivo'];
				$return['error'] = false;
		}else{
					$return['msg'] = "Usuario o contraseña incorrectos";
					$return['error'] = true;
	  }
		//$return['msg'] = $db->getMessage();

	$db->close();



	echo json_encode($return);

?>
