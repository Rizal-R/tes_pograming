<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kurs extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Model_admin');
	}	
	function index()
	{
		// $this->model_squrity->get_squrity();
		$this->load->view('kurs');
	}
	function data_kurs(){
		$data=$this->Model_admin->get_kurs();
		echo json_encode($data);
	}

	function get_kurs(){
		$id_kurs=$this->input->get('id_kurs');
		$data=$this->Model_admin->get_id_kurs($id_kurs);
		echo json_encode($data);
	}

	function simpan_kurs(){
		$data = array(
			'bank' => $this->input->post('bank'),
			'kurs_jual' => $this->input->post('kurs_jual'),
			'kurs_beli' => $this->input->post('kurs_beli')
		);
		$data=$this->Model_admin->simpan_kurs($data);
		echo json_encode($data);
	}

	function update_kurs(){
		$id_kurs=$this->input->post('id_kurs');
		$data = array(
			'bank' => $this->input->post('bank'),
			'kurs_jual' => $this->input->post('kurs_jual'),
			'kurs_beli' => $this->input->post('kurs_beli')
		);
		$data=$this->Model_admin->update_kurs($data, $id_kurs);
		echo json_encode($data);
	}

	function hapus_kurs(){
		$id_kurs=$this->input->post('id_kurs');
		$data=$this->Model_admin->hapus_kurs($id_kurs);
		echo json_encode($data);
	}
}