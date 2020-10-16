<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_admin extends CI_Model {
public function get_kurs ()
	{
	 	return $this->db->get('kurs')->result();
 	}

public function simpan_kurs ($data)
	{
		$this->db->insert('kurs',$data);
 	}

public function hapus_kurs($id_kurs){
	   $this->db->delete('kurs', array('id_kurs'=> $id_kurs));
	}

public function get_id_kurs($id_kurs){
	   	$hsl = $this->db->get_where('kurs', array('id_kurs'=> $id_kurs));
		if($hsl->num_rows()>0){
			foreach ($hsl->result() as $data) {
				$hasil=array(
					'id_kurs' => $data->id_kurs,
					'bank' => $data->bank,
					'kurs_jual' => $data->kurs_jual,
					'kurs_beli' => $data->kurs_beli,
					);
			}
		}
		return $hasil;
	}
public function update_kurs($data, $id_kurs){
	$this->db->where('id_kurs', $id_kurs);
	$this->db->update('kurs', $data);
	}


// KURS ERATE//

public function get_kurs_erate ()
	{
	 	return $this->db->get('kurs_erate')->result();
 	}

public function simpan_kurs_erate ($data)
	{
		$this->db->insert('kurs_erate',$data);
 	}

public function hapus_kurs_erate($id_kurs){
	   $this->db->delete('kurs_erate', array('id_kurs'=> $id_kurs));
	}

public function get_id_kurs_erate($id_kurs){
	   	$hsl = $this->db->get_where('kurs_erate', array('id_kurs'=> $id_kurs));
		if($hsl->num_rows()>0){
			foreach ($hsl->result() as $data) {
				$hasil=array(
					'id_kurs' => $data->id_kurs,
					'erate_beli' => $data->erate_beli,
					'erate_jual' => $data->erate_jual,
					'ttcounter_beli' => $data->ttcounter_beli,
					'ttcounter_jual' => $data->ttcounter_jual,
					);
			}
		}
		return $hasil;
	}
public function update_kurs_erate($data, $id_kurs){
	$this->db->where('id_kurs', $id_kurs);
	$this->db->update('kurs_erate', $data);
	}

	// USD JUAL //	

	public function get_usd ()
	{
	 	return $this->db->get('usd_jual')->result();
 	}

public function simpan_usd ($data)
	{
		$this->db->insert('usd_jual',$data);
 	}

public function hapus_usd($id_usd){
	   $this->db->delete('usd_jual', array('id_usd'=> $id_usd));
	}

public function get_id_usd($id_usd){
	   	$hsl = $this->db->get_where('usd_jual', array('id_usd'=> $id_usd));
		if($hsl->num_rows()>0){
			foreach ($hsl->result() as $data) {
				$hasil=array(
					'id_usd' => $data->id_usd,
					'mata_uang' => $data->mata_uang,
					'jual_week' => $data->jual_week,
					'jual_month' => $data->jual_month,
					'jual_threemonth' => $data->jual_threemonth,
					'jual_sixmonth' => $data->jual_sixmonth,

					);
			}
		}
		return $hasil;
	}
public function update_usd($data, $id_usd){
	$this->db->where('id_usd', $id_usd);
	$this->db->update('usd_jual', $data);
	}

}
	