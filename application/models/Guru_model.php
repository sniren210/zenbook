<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Guru_model extends CI_Model {

	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function getAll()
	{
		$this->db->select('*');
		$this->db->from('tb_guru');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function getOne($data)
	{
		$this->db->select('*');
		$this->db->from('tb_guru');
		$this->db->where('id_guru',$data);
		$query = $this->db->get();
		return $query->row();	
	}

	public function delete($data)
	{
		$this->db->where('id_guru',$data['id_guru']);
		$this->db->delete('tb_guru');
	}

	public function update($data)
	{
		$this->db->where('id_guru', $data['id_guru']);
		$this->db->update('tb_guru', $data);
	}
}