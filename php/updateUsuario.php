<?php
	header('Content-Type: text/html; charset=UTF-8');
	header('Content-type: application/json');
	require_once("facade.php");

	$errores = Array();
	$return['error'] = false;
	$return['msg'] = "";


	$db = new Facade();
	$db->beginTransaction();
	$datos = Array("email" => $_REQUEST['email'],
	"nombre" => $_REQUEST['nombre'],
	"apellidos" => $_REQUEST['apellidos'],
	"objetivo" => $_REQUEST['objetivo'],
	"rango_etario" => $_REQUEST['rango_etario']);

	$db->updateUsuario($datos);

	if($db->consolidateAjax()){
		session_start();
		$_SESSION['nombre'] = $_REQUEST['nombre'];
		$_SESSION['apellidos'] = $_REQUEST['apellidos'];
		$_SESSION['rango_etario'] = $_REQUEST['rango_etario'];
		$_SESSION['objetivo'] = $_REQUEST['objetivo'];

		$return['error'] = false;
		$return['msg'] = "Usuario Actualizado";
	}
	else{
		$return['msg'] = "Hubo un error al actualizar el usuario";
		$return['error'] = true;
	}


	$db->close();

	echo json_encode($return);

?>
