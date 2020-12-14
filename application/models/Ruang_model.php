<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ruang_model extends CI_Model {

	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function getAll()
	{
		$this->db->select('*');
		$this->db->from('tb_ruang');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function getOne($data)
	{
		$this->db->select('*');
		$this->db->where('id_ruang',$data);
		$this->db->from('tb_ruang');
		$query = $this->db->get();
		return $query->row();
	}

	public function update($data)
	{
		$this->db->where('id_ruang',$data['id_ruang']);
		$this->db->update('tb_ruang',$data);
	}

	public function delete($data)
	{
		$this->db->where('id_ruang',$data);
		$this->db->delete('tb_ruang');
	}

	public function umum()
	{
		$this->db->select('*');
		$this->db->where('jenis','umum');
		$this->db->from('tb_ruang');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function bengkel()
	{
		$this->db->select('*');
		$this->db->where('jenis','bengkel');
		$this->db->from('tb_ruang');
		$query = $this->db->get();
		return $query->result_array();
	}
}