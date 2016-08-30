<?php
	require("transaction.php");
	class Facade{

		private $transaction;

		public function __construct(){
			$this->transaction=new Transaction();
		}

		public function close(){
			$this->transaction->close();
			$this->transaction = null;
		}

		public function beginTransaction(){
		$this->transaction->beginTransaction();
		}

		public function consolidateAjax(){
		return $this->transaction->consolidateAjax();
		}

		public function getMessage(){
			return $this->transaction->getMessage();
		}

		public function insert($tabla, $datos){
			return $this->transaction->insert($tabla, $datos);
		}

		public function getLastInsertId($table){
			return $this->transaction->lastInsertId($table.'_id_seq');
		}

		public function rollBack(){
			return $this->transaction->rollBack();
		}

		public function registrarLog($log){
			if(!(session_status() === PHP_SESSION_ACTIVE))
				session_start();
			$log["usuario"] = $_SESSION['rut'];
			$log["fecha"] = date('Y-m-d H:i:s');
			$this->transaction->insert("registro_log", $log);
		}

		public function getLogs(){
			return $this->transaction->query("SELECT * FROM registro_log");
		}

		public function isEmailRegistrado($data){
			$sql = "SELECT id from usuario where email = :email";
			return $this->transaction->query($sql,$data);
		}
		public function existUsuario($data){
			$sql = "SELECT id FROM usuario WHERE email = :email and contrasena = :contrasena";
			return $this->transaction->exists($sql, $data);
		}
		public function checkLogin($data){
			$sql = 'SELECT * from usuario where email = :email and contrasena = :contrasena';
			return $this->transaction->query($sql,$data);
		}
		public function getPlan($data){
			$sql = 'SELECT nombre FROM plan where id = :id';
			return $this->transaction->query($sql,$data);
		}
		public function getObjetivo($data){
			$sql = 'SELECT nombre FROM objetivo where id = :id';
			return $this->transaction->query($sql,$data);
		}
		public function getRetario($data){
			$sql = 'SELECT nombre FROM rango_etario where id = :id';
			return $this->transaction->query($sql,$data);
		}

		public function updatePlan($datos){

			$sql="UPDATE usuario
				  SET 	plan=:plan
				  WHERE email=:email";
			$this->transaction->queryTwo($sql, $datos);
		}

		public function updateUsuario($datos){

			$sql="UPDATE usuario
				  SET 	nombre=:nombre,apellidos=:apellidos,rango_etario=:rango_etario,objetivo=:objetivo
				  WHERE email=:email";
			$this->transaction->queryTwo($sql, $datos);
		}
		public function updateImage($datos){
			$sql="UPDATE usuario
				  SET 	imagen=:imagen
				  WHERE id=:id";
			$this->transaction->queryTwo($sql, $datos);
		}
	}
?>
