<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kurs_erate extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Model_admin');
	}	
	function index()
	{
		$this->load->view('kurs_erate');
	}
	function data_kurs_erate(){
		$data=$this->Model_admin->get_kurs_erate();
		echo json_encode($data);
	}

	function get_kurs_erate(){
		$id_kurs=$this->input->get('id_kurs');
		$data=$this->Model_admin->get_id_kurs_erate($id_kurs);
		echo json_encode($data);
	}

	function simpan_kurs_erate(){
		$data = array(
			'erate_beli' => $this->input->post('erate_beli'),
			'erate_jual' => $this->input->post('erate_jual'),
			'ttcounter_beli' => $this->input->post('ttcounter_beli'),
			'ttcounter_jual' => $this->input->post('ttcounter_jual')
		);
		$data=$this->Model_admin->simpan_kurs_erate($data);
		echo json_encode($data);
	}

	function update_kurs_erate(){
		$id_kurs=$this->input->post('id_kurs');
		$data = array(
			'erate_beli' => $this->input->post('erate_beli'),
			'erate_jual' => $this->input->post('erate_jual'),
			'ttcounter_beli' => $this->input->post('ttcounter_beli'),
			'ttcounter_jual' => $this->input->post('ttcounter_jual')
		);
		$data=$this->Model_admin->update_kurs_erate($data, $id_kurs);
		echo json_encode($data);
	}

	function hapus_kurs_erate(){
		$id_kurs=$this->input->post('id_kurs');
		$data=$this->Model_admin->hapus_kurs_erate($id_kurs);
		echo json_encode($data);
	}
}