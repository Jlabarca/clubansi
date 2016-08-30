<?php
	header('Content-Type: text/html; charset=UTF-8');
	header('Content-type: application/json');
	require_once("facade.php");

	$errores = Array();
	$return['error'] = false;
	$return['msg'] = "";
	$return['id'] = "";


	$db = new Facade();
	$db->beginTransaction();

		if(	$db->isEmailRegistrado(Array("email" => $_REQUEST['email'])) != null){
			$return['msg'] = "El correo ingresado ya está registrado en club ANSI";
			$return['error'] = true;
		}
		else{

				$datos =  Array("email" => $_REQUEST['email'],
				"nombre" => $_REQUEST['nombre'],
				"apellidos" => $_REQUEST['apellido'],
				"sexo" => $_REQUEST['sexo'],
				"contrasena" => $_REQUEST['contrasena'],
				"objetivo" => $_REQUEST['objetivo'],
				"rango_etario" => $_REQUEST['retario']);
				$return['id'] = $db->insert("usuario", $datos);
				
				if($db->consolidateAjax()){
					$return['error'] = false;
					$return['msg'] = "Usuario registrado";
				}
				else{
					$return['msg'] = "Hubo un error al ingresar al usuario";
					$return['error'] = true;

				}
	  }
		//$return['msg'] = $db->getMessage();

	$db->close();



	echo json_encode($return);

?>
