<?php
	header('Content-Type: text/html; charset=UTF-8');
	header('Content-type: application/json');
	require_once("facade.php");

	$errores = Array();
	$return['error'] = false;
	$return['msg'] = "";


	$db = new Facade();
	$db->beginTransaction();
	$datos = Array("email" => $_REQUEST['email'],"plan" => $_REQUEST['plan']);

	$db->updatePlan($datos);

	if($db->consolidateAjax()){
		session_start();
		$_SESSION['plan'] = $_REQUEST['plan'];
		$return['error'] = false;
		$return['msg'] = "Plan registrado";
	}
	else{
		$return['msg'] = "Hubo un error al ingresar el plan";
		$return['error'] = true;
	}


	$db->close();

	echo json_encode($return);

?>
