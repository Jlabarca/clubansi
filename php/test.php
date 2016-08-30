<?php
	header('Content-Type: text/html; charset=UTF-8');
	header('Content-type: application/json');
	require_once("facade.php");

	$errores = Array();
	$return['error'] = false;
	$return['msg'] = "";


	$db = new Facade();
	$db->beginTransaction();
	$data= Array("id" => 1);
	$stmt = $db->getPlan($data);

	$return['error'] = false;
	$return['msg'] = "Usuario registrado";
	$return['data'] = $stmt;

  //echo $stmt[0]['nombre'];
	echo json_encode($stmt);

?>
