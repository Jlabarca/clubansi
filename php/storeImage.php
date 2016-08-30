<?php

$contenttype =	'image/png';
$file_content = base64_decode($contenttype);
$output = '../userImages/';
$imageName = "avatar".$_REQUEST['id'].".png";
if (isset($_FILES['image'])) {
		$aExtraInfo = getimagesize($_FILES['image']['tmp_name']);
		$sImage = "data:" . $aExtraInfo["mime"] . ";base64," . base64_encode(file_get_contents($_FILES['image']['tmp_name']));
		//echo '<p>The image has been uploaded successfully</p><p>Preview:</p><img src="' . $sImage . '" alt="Your Image" />';
		$data = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $sImage));
		file_put_contents($output.$imageName, $data);
}


require_once("facade.php");

$return['error'] = false;
$return['msg'] = "";


$db = new Facade();
$db->beginTransaction();
$datos = Array("id" => $_REQUEST['id'],"imagen" => $imageName);

$db->updateImage($datos);

if($db->consolidateAjax()){
	$return['error'] = false;
	$return['msg'] = "Imagen registrada";
}
else{
	$return['msg'] = "Hubo un error al ingresar la imagen";
	$return['error'] = true;
}


$db->close();
