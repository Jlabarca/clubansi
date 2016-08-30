<?php
require("connection.php");

class Transaction{

private $connection;
private $error;
private $message;

public function __construct(){
	$this->connection=new Connection();
	$this->error=false;
	$this->message="";
}

public function insert($tabla,$cadena=array()){
	try{
		foreach($cadena as $campo=>$valor){
			$campos[]=":".$campo;
		}
		$campos=implode(",",$campos);
		$nombres=implode(",",array_keys($cadena));
		$sql="INSERT INTO $tabla($nombres) VALUES ($campos)";

		$insertar=$this->connection->prepare($sql);
		foreach($cadena as $campoDos=>$valor){
			$insertar->bindValue(":".$campoDos,$valor);
		}
		$insertar->execute();
		return $this->connection->lastInsertId();
	}catch(PDOException $e){
		$this->error=true;
		//echo "".$this->error;
		$this->message="".$this->message."Error: ".$e->getCode()."\n".$e->getMessage()."\n";
	}
}

public function query($sql,$cadena=array()){
	$vector=Array();
	try{
		$consulta_sql=$this->connection->prepare($sql);
		foreach($cadena as $campo=>$valor){
			$consulta_sql->bindValue(":".$campo,$valor);
		}
		$consulta_sql->execute();

		if($consulta_sql->rowCount()>0){
			while($resultado=$consulta_sql->fetch(PDO::FETCH_ASSOC)){
				array_push($vector,$resultado);
			}
		}
		return $vector;
	}catch(PDOException $e){
		$this->error=true;
		$this->message=$this->message."Error: ".$e->getCode()."\n".$e->getMessage()."\n";
	}
}

public function exists($sql,$cadena=Array()){
	$cantidad=0;
	try{
		$consulta_sql=$this->connection->prepare($sql);
		foreach($cadena as $campo=>$valor){
			$consulta_sql->bindValue(":".$campo,$valor);
		}
		$consulta_sql->execute();

		if($consulta_sql->rowCount()>0){
			$cantidad=$consulta_sql->fetchColumn(0);
		}
		return $cantidad;
	}catch(PDOException $e){
		$this->error=true;
		$this->message=$this->message."Error: ".$e->getCode()."\n".$e->getMessage()."\n";
	}
}

public function queryTwo($sql,$cadena=array()){
	try{
		$consulta_sql=$this->connection->prepare($sql);
		foreach($cadena as $campo=>$valor){
			$consulta_sql->bindValue(":".$campo,$valor);
		}
		$consulta_sql->execute();

	}catch(PDOException $e){
		$this->error=true;
		$this->message=$this->message."Error: ".$e->getCode()."\n".$e->getMessage()."\n";
	}
}

public function consolidateAjax(){
	if($this->error){
		$this->connection->rollBack();
		return false;
	}
	$this->connection->commit();
	return true;

}

public function getMessage(){
	if($this->error==true){
		$message="".$this->message;
	}else{
		$message="Todas las operaciones fueron realizadas correctamente";
	}
	return $message;
}

public function lastInsertIdObservacionDiagnostica(){
	return $this->connection->lastInsertIdObservacionDiagnostica();
}

public function lastInsertIdRegistroAcompanamientoDocente(){
	return $this->connection->lastInsertIdRegistroAcompanamientoDocente();
}

public function beginTransaction(){
	$this->connection->beginTransaction();
}

public function close() {
	$this->connection->close();
	$this->connection = null;
}
}

?>
