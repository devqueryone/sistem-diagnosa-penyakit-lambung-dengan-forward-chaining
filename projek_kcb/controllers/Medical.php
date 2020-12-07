<?php

class Medical extends Controller {
	private $db;
	private $conn;

	public function __construct() 
	{
		$this->db = new Database();
		$this->conn = $this->db->connection;
	}

	public function index() 
	{
		$nums = $this->model('Medical_models')->numsDatarecord();
		$data = [
				'judul' 	=> 'Dashboard',
				'nums'		=> $nums
		];

		$this->view('templates/header', $data);
		$this->view('dashboard/index', $data);
		$this->view('templates/footer');
	}

	public function jenisPenyakit()
	{
		$penyakit 	= $this->model('Medical_models')->getDatapenyakit();
		$data 		= [
			'judul' 	=> 'Jenis Penyakit',
			'penyakit' 	=> $penyakit
		];

		$this->view('templates/header', $data);
		$this->view('medical/jenis_penyakit', $data);
		$this->view('templates/footer');
	}

	public function diagnosis() 
	{
		$gejala = $this->model('Medical_models')->getGejala();
		$data  	= [
			'judul' 	=> 'Konsultasi',
			'gejala'	=> $gejala
		];

		$this->view('templates/header', $data);
		$this->view('medical/diagnosis', $data);
		$this->view('templates/footer');
	}

	public function hasilDiagnosis()
	{
		$d_status = $this->model('Medical_models')->getDiagnosis($_POST);
		if ($d_status == true) {
			$data = $this->model('Medical_models')->getTrue();
		}
		else {
			$this->errorDiagnosis();
			exit();
		}
		$hasil = $this->model('Medical_models')->getTrue();

		$data = [
					'judul'	=> 'Hasil Diagnosa',
					'hasil' => $hasil
				];

		$this->view('templates/header', $data);
		$this->view('medical/hasil_diagnosis', $data);
		$this->view('templates/footer');
	}

	public function errorDiagnosis()
	{
		$data = [
					'judul' => 'Hasil Diagnosa',
				];

		$this->view('templates/header', $data);
		$this->view('medical/error');
		$this->view('templates/footer');
	}
}
