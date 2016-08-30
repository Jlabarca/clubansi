<?php

	class Connection{
    private $dbhost="127.0.0.1";
    private $dbuser="buysalec_clubans";
    private $dbpass="buysalec";
    private $dbname="buysalec_clubansi";
    private $error;
    private $conexion;


		public function __construct(){
      $cadena="mysql:host=".$this->dbhost.";dbname=".$this->dbname;"charset=utf8";
			$options = array(
				PDO::ATTR_PERSISTENT => true,
				PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
			);
			try{
				$this->conexion=new PDO($cadena,$this->dbuser,$this->dbpass,$options);
			}catch(PDOException $e){
				$this->error=$e->getMessage();
			}
				$this->conexion->exec("set names utf8");
		}

		public function close() {
			$this->conexion = null;
		}

		public function prepare($statement) {
			return $this->conexion->prepare($statement);
		}

		public function execute(){
			return $this->conexion->execute();
		}

		public function commit(){
			return $this->conexion->commit();
		}

		public function rollBack(){
			return $this->conexion->rollBack();
		}

		public function beginTransaction(){
			return $this->conexion->beginTransaction();
		}

		public function lastInsertId(){
				return $this->conexion->lastInsertId();
			}

		/*public function lastInsertId(){
			return $this->conexion->lastInsertId('constancia_id_seq');
		}*/
	}






?>
