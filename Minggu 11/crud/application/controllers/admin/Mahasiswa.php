<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Mahasiswa_model'); // load file model dengan nama Mahasiswa_model
	}

	public function index()
	{
		$data['mahasiswa'] = $this->Mahasiswa_model->getAll()->result(); //mengambil data array dari database melalui model
		$this->template->views('crud/home_mahasiswa',$data); //menampilkan file view home_mahasiswa dengan menggunakan library template
	}
}

 ?>