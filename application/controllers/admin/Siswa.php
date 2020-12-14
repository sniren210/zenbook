<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('user')) {
			redirect(base_url('login'));
		}
	}

	public function index()
	{
		redirect(base_url('admin'));
	}

	public function perkelas($kelas = null,$jurusan = null)
	{
		$que = array('kelas' => $kelas,
					'jurusan' => $jurusan ); 
		$data['row'] = $this->siswa_model->perkelas($que);
		$data['jurusan'] = $this->db->get_where('tb_jurusan',['kelas' => $kelas])->result_array();
		$data['point'] = $jurusan;

		$this->layout->admin('admin/siswa/perkelas',$data);
	}

	public function alumni()
	{
		$data['row'] = $this->siswa_model->alumni();

		$this->layout->admin('admin/siswa/alumni',$data);
	}
}