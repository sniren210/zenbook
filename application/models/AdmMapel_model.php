<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AdmMapel_model extends CI_Model {

	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function guru()
	{
		$this->db->select('tb_mapelguru.*,tb_guru.nama');
		$this->db->from('tb_mapelguru');
		$this->db->join('tb_guru','tb_guru.id_guru = tb_mapelguru.id_guru');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function jurusan()
	{
		$this->db->select('*');
		$this->db->from('tb_mapeljurusan');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function ruang()
	{
		$this->db->select('*');
		$this->db->from('tb_mapelruang');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function getOne($data)
	{
		$this->db->select('*');
		$this->db->where('id_jurusan',$data);
		$this->db->from('tb_jurusan');
		$query = $this->db->get();
		return $query->row();
	}

	public function update($data)
	{
		$this->db->where('id_jurusan',$data['id_jurusan']);
		$this->db->update('tb_jurusan',$data);
	}

	public function delete($data)
	{
		$this->db->where('id_jurusan',$data);
		$this->db->delete('tb_jurusan');
	}

	public function profil()
	{
		$this->db->select('id_jurusan,nama');
		$this->db->from('tb_jurusan');
		$query = $this->db->get();
		return $query->result_array();
	}
}