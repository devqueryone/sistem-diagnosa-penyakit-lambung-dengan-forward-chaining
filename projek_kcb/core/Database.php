<?php
class Database {

	private $host = DB_HOST;
	private $user = DB_USER;
	private $pass = DB_PASS;
	private $db_name = DB_NAME;
	public $connection;

	public function __construct() 
	{
		$this->connection	= mysqli_connect($this->host, $this->user, $this->pass, $this->db_name);

		if (!$this->connection)
		{
			die("Database '".$this->db_name."' tidak ditemukan!");
		}
	}

}
