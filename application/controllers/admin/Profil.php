<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('user')) {
			redirect(base_url('login'));
		}
	}

	public function index()
	{

		$data['row'] = $this->profil_model->getAll();
		$data['jurusan'] = $this->jurusan_model->profil();

		$this->layout->admin('admin/profil/data',$data);
	}

	public function edit($col = null)
	{
		$data['row'] = $this->profil_model->getAll();
		$data['jurusan'] = $this->jurusan_model->profil();
		$data['guru'] = $this->guru_model->getAll();
		
		
		$this->form_validation->set_rules('nss','Stok produk','required|integer',
			array(	'required'		=> ' harus diisi',
					'integer'	=> ' harus di isi angka'));
		$this->form_validation->set_rules('nis','Stok produk','required|integer',
			array(	'required'		=> ' harus diisi',
					'integer'	=> ' harus di isi angka'));
		$this->form_validation->set_rules('npsn','Stok produk','required|integer',
			array(	'required'		=> ' harus diisi',
					'integer'	=> ' harus di isi angka'));
		$this->form_validation->set_rules('akreditas','Nama produk','required',
			array(	'required'		=> 'harus diisi'));
		$this->form_validation->set_rules('prov','Nama produk','required',
			array(	'required'		=> 'harus diisi'));
		$this->form_validation->set_rules('kab','Nama produk','required',
			array(	'required'		=> 'harus diisi'));
		$this->form_validation->set_rules('kec','Nama produk','required',
			array(	'required'		=> 'harus diisi'));
		$this->form_validation->set_rules('desa','Nama produk','required',
			array(	'required'		=> 'harus diisi'));
		$this->form_validation->set_rules('jln','Nama produk','required',
			array(	'required'		=> 'harus diisi'));
		$this->form_validation->set_rules('kd_pos','Nama produk','required',
			array(	'required'		=> 'harus diisi'));
		$this->form_validation->set_rules('prodi','Nama produk','required',
			array(	'required'		=> 'harus diisi'));
		$this->form_validation->set_rules('jml_guru','Stok produk','required|integer',
			array(	'required'		=> ' harus diisi',
					'integer'	=> ' harus di isi angka'));

		if ($this->form_validation->run() == false) {
			$this->layout->admin('admin/profil/edit',$data);
		}else{
			$data['edit'] =  array(
					'id_sekolah' => 1,
					'nss' => $this->input->post('nss'),
					'nis' => $this->input->post('nis'),
					'npsn' => $this->input->post('npsn'),
					'prov' => $this->input->post('prov'),
					'kab' => $this->input->post('kab'),
					'kec' => $this->input->post('kec'),
					'desa' => $this->input->post('desa'),
					'jln' => $this->input->post('jln'),
					'kd_pos' => $this->input->post('kd_pos'),
					'akreditas' => $this->input->post('akreditas'),
					'jml_guru' => $this->input->post('jml_guru'),
					'prodi' => $this->input->post('prodi'),
					'id_kepsek' => $this->input->post('kepsek')
				);
			$this->session->set_flashdata('sukses','Data berhasil DiBuat');
			$this->profil_model->update($data['edit']);
			redirect(base_url('admin/profil'));
		}
		
	}
}