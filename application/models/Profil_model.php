<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profil_model extends CI_Model {

	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function getAll()
	{
		$this->db->select('tb_sekola.*,tb_guru.*');
		$this->db->from('tb_sekola');
		$this->db->join('tb_guru','tb_guru.id_guru = tb_sekola.id_kepsek');
		$query = $this->db->get();
		return $query->row();
	}

	public function update($data)
	{
		$this->db->where('id_sekolah', $data['id_sekolah']);
		$this->db->update('tb_sekola', $data);
	}
}