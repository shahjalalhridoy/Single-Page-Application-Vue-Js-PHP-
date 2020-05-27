<?php
Class Connection {

	private  $dbhost = "localhost";
	private  $dbname = "vue_chirkut";
	private  $dbuser = "root";
	private  $dbpass = "";	
	public $db;

	public function __construct(){
		$this->connctDB();
	}

	private function connctDB(){
		try {
			$this->db = new PDO("mysql:host={$this->dbhost}; dbname={$this->dbname}", $this->dbuser,$this->dbpass);
			$this->db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			/*echo "Successfull";	*/
			
		} catch (PDOException $e) {
			echo "Connection error:".$e->getMessage();
		}

	}
}

