<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Siswa_model extends CI_Model {

	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function getAll()
	{
		$this->db->select('*');
		$this->db->from('tb_siswa');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function getOne($data)
	{
		$this->db->select('*');
		$this->db->from('tb_siswa');
		$this->db->where('id_siswa',$data);
		$query = $this->db->get();
		return $query->row();	
	}

	public function perkelas($data)
	{
		$this->db->select('tb_siswa.*,tb_jurusan.*');
		$this->db->from('tb_siswa');
		$this->db->join('tb_jurusan','tb_siswa.id_jurusan = tb_jurusan.id_jurusan');
		$this->db->where('tb_jurusan.kelas',$data['kelas']);
		if ($data['jurusan'] != null) {
			$this->db->where('tb_jurusan.nama',$data['jurusan']);
		}
		$query = $this->db->get();
		return $query->result_array();
	}

	public function perjurusan($data)
	{
		$this->db->select('tb_siswa.*');
		$this->db->from('tb_siswa');	
		$this->db->where('tb_siswa.id_jurusan',$data);
		$query = $this->db->get();
		return $query->result_array();
	}

	public function globKelas($data)
	{
		$this->db->select('*');
		$this->db->from('tb_jurusan');	
		$this->db->where('tb_jurusan.id_jurusan',$data);
		$query = $this->db->get();
		return $query->row();
	}

	public function alumni()
	{
		$this->db->select('*');
		$this->db->from('tb_siswa');
		$this->db->where('status','lulus');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function lulus()
	{
		$this->db->select('tb_siswa.*,tb_jurusan.kelas,tb_jurusan.nama');
		$this->db->from('tb_siswa');
		$this->db->join('tb_jurusan','tb_siswa.id_jurusan = tb_jurusan.id_jurusan');
		$this->db->where('kelas','XII');
		$this->db->where('status','aktif');
		$query = $this->db->get();
		return $query->result_array();	
	}

	public function naik()
	{
		$this->db->select('tb_siswa.*,tb_jurusan.kelas,tb_jurusan.nama');
		$this->db->from('tb_siswa');
		$this->db->join('tb_jurusan','tb_siswa.id_jurusan = tb_jurusan.id_jurusan');
		$this->db->where('status','aktif');
		$this->db->where_not_in('kelas','XII');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function delete($data)
	{
		$this->db->where('id_siswa',$data['id_siswa']);
		$this->db->delete('tb_siswa');
	}

	public function update($data)
	{
		$this->db->where('id_siswa', $data['id_siswa']);
		$this->db->update('tb_siswa', $data);
	}
}