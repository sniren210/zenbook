<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dasboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('user')) {
			redirect(base_url('login'));
		}
	}

	public function index()
	{
		$data['siswa'] = $this->db->count_all('tb_siswa');
		$data['guru'] = $this->db->count_all('tb_guru');
		$data['ruang'] = $this->db->count_all('tb_ruang');
		$data['jurusan'] = $this->db->count_all('tb_jurusan');

		$this->layout->admin('admin/dasboard',$data);
	}
}