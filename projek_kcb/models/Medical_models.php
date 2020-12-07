<?php

class Medical_models {
	private $db;
	private $conn;
	private $data;

	public function __construct() 
	{
		$this->db 	= new Database();
		$this->conn = $this->db->connection;
	}
	public function numsDatarecord() 
	{		
		$query 	= "SELECT * FROM penyakit";
		$result = mysqli_query($this->conn, $query);
		while ($row = mysqli_fetch_assoc($result)) {
			$penyakit[] = $row;
		}

		$nums = count($penyakit);
		return $nums;
	}

	public function getDatapenyakit() 
	{
		$query 	= "SELECT * FROM penyakit";
		$result = mysqli_query($this->conn, $query);
		while ($row = mysqli_fetch_assoc($result)) {
			$penyakit[] = $row;
		}

		return $penyakit;
	}

	public function getGejala() 
	{
		$query 	= "SELECT * FROM tb_gejala";
		$result	= mysqli_query($this->conn, $query);
		while ($row = mysqli_fetch_assoc($result)) {
			$gejala[] = $row;
		}

		return $gejala;
	}

	public function getDiagnosis()
	{
		$query = "SELECT id FROM rule WHERE ";
		// menghapus elemen array terakhir
		$arr = array_pop($_POST);
		$rule_input = array();
		foreach ($_POST as $where) {
			$query .= $where . "= 1 AND ";
			array_push($rule_input, $where); 
		}

		$query 		.="1= 1";
		$this->data  = mysqli_query($this->conn, $query);

		//memindahkan rule dari database ke array
		$db_rule= mysqli_query($this->conn, "SELECT * FROM rule");
		while ($d = mysqli_fetch_array($db_rule)) {
			$arr_rule[] = $d;
		}

		//mencari value dari yg memiliki nilai 1 dan akan di simpan dalam array rule
		$rule = array();
		for ($i=0; $i < sizeof($arr_rule); $i++) { 
			$key		= array_keys($arr_rule[$i]);
			$val 		= $arr_rule[$i];
			// var_dump($val); die;
			$sub_rule	= array();
			for ($j=3; $j < (sizeof($key)) ; $j+=2) { 
				if ($val[$key[$j]] == 1) {
					$sub_rule[] = $key[$j];
				}
			}
			$rule[] = $sub_rule;
			
		}

		$status = false;

		//mencocokan gejala yang di inputkan user dengan rule yang ada
		for ($i=0; $i < sizeof($rule); $i++) { 
			$result	= ($rule_input==$rule[$i]);
			if ($result) {
				$status = true;
				break;
			} else {
				$status = false;
			}
		}

		return $status;
	}

	public function getTrue()
	{
		$this->getDiagnosis();
		while ($d = mysqli_fetch_array($this->data)) {
			$id = $d['id'];
		}

		$query	= "SELECT * FROM penyakit WHERE id = $id";
		$result = mysqli_query($this->conn, $query);
		while ($row = mysqli_fetch_assoc($result)) {
			$hasil[] = $row;
		}
		return $hasil;
	}
}