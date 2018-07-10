<?php
class Database {
	private $host = 'localhost';
	private $user = 'root';
	private $pass = '123456';
	private $dbname = 'myblog';
	private $dbh;
	private $error;
	private $stmt;
	public function __contruct() {
		//set DSN
		$dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
		//set optins
		$options = array(
			PDO::ATTR_PERSISTENT => true,
			PDO::ATTR_ERRMODE = > PDO::ERRMODE_EXCEPTION
		);	
		//create PDO
		try {
			$this->dbh = new PDO($dsn, $this-user, $this->pass, $options);
		} catch {
			$this->error = $e->getMessage();
		}
	}
	public function query($query) {
		$this->stmt = $this->dbh->prepare($query);
	}
	public function bind($param, $value, $type = null) {
		if(is_null($type)) {
			swith(true) {
				case is_int($value):
					$type = PDO::PARAM_INT;
					break;
				case is_bool($value):
					$type = PDO::PARAM_BOOL;
					break;
				case is_null($value):
					$type = PDO::PARAM_NULL;
					break;
				default:
				$type = PDO::PARAM_STR;
			}
		}
		$this->stmt->bindValue($param, $value, $type);
	}
	public function execute() {
		return $this->stmt->execute();
	}
	public function lastInsertId() {
		$this->dbh->lastInsertId();
	}
	public function resultset() {
		$this->execute();
		return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
	}
}
?>