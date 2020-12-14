<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mapel_model extends CI_Model {

	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function getAll()
	{
		$this->db->select('*');
		$this->db->from('tb_mapel');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function getOne($data)
	{
		$this->db->select('*');
		$this->db->where('id_mapel',$data);
		$this->db->from('tb_mapel');
		$query = $this->db->get();
		return $query->row();
	}

	public function update($data)
	{
		$this->db->where('id_mapel',$data['id_mapel']);
		$this->db->update('tb_mapel',$data);
	}

	public function delete($data)
	{
		$this->db->where('id_mapel',$data);
		$this->db->delete('tb_mapel');
	}

}