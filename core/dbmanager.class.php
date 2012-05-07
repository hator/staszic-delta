<?php
	
class DBManager { 
	
	private static $instance;
	
	private $dbconnection;
	
	/******/

	public static function instance() {
		
		if (!self::$instance) {
			self::$instance = new DBManager(DB_CONFIG::$host, DB_CONFIG::$user, DB_CONFIG::$pass, DB_CONFIG::$base);
		}
		
		return self::$instance;
	}
	
	public function __construct($_host, $_user, $_password, $_dbname){
		
		$this->dbconnection = new mysqli($_host, $_user, $_password, $_dbname); //makes new db connection
		
		if (mysqli_connect_errno()) {
			throw new RuntimeException('MySQL: '.mysqli_connect_error());
		}
			
		$this->dbconnection->query("SET NAMES utf8");
	}
	
	public function __destruct() {
		$this->dbconnection->close();
	}
		
	public function query($_input) {
		if($result = $this->dbconnection->query($_input)) {
			return $result;
		} else {
			return -1;
		}
	}	

}

?>
