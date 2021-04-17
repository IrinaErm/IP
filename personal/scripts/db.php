<?php

class DB {
	private static $_instance;
	/**
		@return DB экземпляр класса для работы с бд
	*/
	public static function getInstance() {
		if (self::$_instance === null) {
				self::$_instance = new self;
		}
		return self::$_instance;
	}
	
	private function __construct() {
		$this->connect = mysqli_connect("localhost", "root", "Root123%") or die ("No connection");
		mysqli_select_db($this->connect, "intprg_users") or die ("No database");
		//$this->query('SET fio "utf8"');
	}
	
	private function __clone() {} //no cloning allowed
	
	private function __wakeup() {}
	
	public static function query($sql) {
		$obj=self::$_instance;
		
		if(isset($obj->connect)) {
			$result = mysqli_query($obj->connect, $sql) or die (false);
		}	
		return $result;
	}
	
	public static function fetch_object($object) {
		return @mysqli_fetch_object($object);
	}
	
	public static function fetch_array($object) {
		return @mysqli_fetch_array($object);
	}
}
	
?>