<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Jurusan_model extends CI_Model {

	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function getAll()
	{
		$this->db->select('*');
		$this->db->from('tb_jurusan');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function data()
	{
		$this->db->select('tb_jurusan.*,tb_guru.nama nama_guru,tb_guru.id_guru');
		$this->db->from('tb_jurusan');
		$this->db->join('tb_guru','tb_guru.id_guru = tb_jurusan.id_waliKelas');
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