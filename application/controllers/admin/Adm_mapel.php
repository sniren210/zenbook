<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adm_mapel extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('user')) {
			redirect(base_url('login'));
		}
	}

	public function index()
	{
		$data['guru'] = $this->admMapel_model->guru();
		$data['jurusan'] = $this->admMapel_model->jurusan();
		$data['ruang'] = $this->admMapel_model->ruang();


		$this->layout->admin('admin/adm_mapel/all',$data);
	}
}