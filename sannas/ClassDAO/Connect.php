<?php
	class Connect{
		private $dbname;
		private $host;
		private $user;
		private $passwd;

		public $pdo;

		public function conectar() {
			try{
				/*
				$this->dbname = "adp";
				$this->host = "localhost";
				$this->user = "root";
				$this->passwd = "123456";
				*/
				$this->dbname = "estudioclcik_academiaDpro";
				$this->host = "186.202.152.20";
				$this->user = "estud_digiPRO";
				$this->passwd = "ec3s7ud10ec";

				$param = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8");

				$this->pdo = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname, $this->user, $this->passwd, $param);

				$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

				$this->pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

				$this->pdo->setAttribute(PDO::ATTR_PERSISTENT, true);

				return $this->pdo;

			}catch(PDOException $e){

				echo $e->getMessage();
				return false;
			}
		}
	}
?>
