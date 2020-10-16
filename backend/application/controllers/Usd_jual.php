<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usd_jual extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Model_admin');
	}	
	function index()
	{
		$this->load->view('usd_jual');
	}
	function data_usd(){
		$data=$this->Model_admin->get_usd();
		echo json_encode($data);
	}

	function get_usd(){
		$id_usd=$this->input->get('id_usd');
		$data=$this->Model_admin->get_id_usd($id_usd);
		echo json_encode($data);
	}

	function simpan_usd(){
		$data = array(
			'mata_uang' => $this->input->post('mata_uang'),
			'jual_week' => $this->input->post('jual_week'),
			'jual_month' => $this->input->post('jual_month'),
			'jual_threemonth' => $this->input->post('jual_threemonth'),
			'jual_sixmonth' => $this->input->post('jual_sixmonth')
		);
		$data=$this->Model_admin->simpan_usd($data);
		echo json_encode($data);
	}

	function update_usd(){
		$id_usd=$this->input->post('id_usd');
		$data = array(
			'mata_uang' => $this->input->post('mata_uang'),
			'jual_week' => $this->input->post('jual_week'),
			'jual_month' => $this->input->post('jual_month'),
			'jual_threemonth' => $this->input->post('jual_threemonth'),
			'jual_sixmonth' => $this->input->post('jual_sixmonth')
		);
		$data=$this->Model_admin->update_usd($data, $id_usd);
		echo json_encode($data);
	}

	function hapus_usd(){
		$id_usd=$this->input->post('id_usd');
		$data=$this->Model_admin->hapus_usd($id_usd);
		echo json_encode($data);
	}
}