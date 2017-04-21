<?php

class DBConnection {
	
 private $host, $user, $password, $db;
 
 private $link;
 	
 private static $instance = null;	
	
 private function __construct($host = 'localhost', $user = 'root', $password = 'root', $db = 'crud') {
 	
	$this->host = $host;
	$this->user = $user;
	$this->password = $password;
	$this->db = $db;
	$this->link = new mysqli($this->host, $this->user, $this->password, $this->db);
 }	
	
	public static function getInstance() {
		if(DBConnection::$instance == null) {
			DBConnection::$instance = new DBConnection();
		}
		return self::$instance;
	}
	
	public function getLink() {
		return $this->link;
	}
	
}

?>