<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ruangan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('user')) {
			redirect(base_url('login'));
		}
	}

	public function index()
	{
		$data['row'] = $this->ruang_model->getAll();

		$this->layout->admin('admin/ruang/data',$data);
	}

	public function globe()
	{
		$data['row'] = $this->ruang_model->getAll();

		$this->layout->admin('admin/ruang/data',$data);
	}

	public function umum()
	{
		$data['row'] = $this->ruang_model->umum();

		$this->layout->admin('admin/ruang/data',$data);
	}

	public function bengkel()
	{
		$data['row'] = $this->ruang_model->bengkel();

		$this->layout->admin('admin/ruang/data',$data);
	}

	public function tambah()
	{
		$this->form_validation->set_rules('nama','Nama produk','required|is_unique[tb_ruang.nama]',
			array(	'required'		=> 'Nama Ruang harus diisi',
					'is_unique' => 'Nama ruang sudah ada'));
		if ($this->form_validation->run() == false) {
			$this->layout->admin('admin/ruang/tambah');
		}else{
			$data =  array(
					'id_ruang' => '',
					'nama' => $this->input->post('nama'),
					'jenis' => $this->input->post('jenis')
				);
			$this->session->set_flashdata('sukses','Data berhasil DiBuat');
			$this->db->insert('tb_ruang',$data);
			redirect(base_url('admin/ruangan'));
		}
	}

	public function hapus($col)
	{
		$query = $this->ruang_model->delete($col);					
		if ($query){
				$this->session->set_flashdata('gagal','Data gagal didelete');
				redirect(base_url('admin/ruangan/'));	
			}
		else{
				$this->session->set_flashdata('sukses','Data telah didelete');
				redirect(base_url('admin/ruangan/'));	
		}
	}

	public function edit($col = null)
	{
		$data['row'] = $this->ruang_model->getOne($col);

		$this->form_validation->set_rules('nama','Nama produk','required',
			array(	'required'		=> 'Nama Ruang harus diisi'));

		if ($this->form_validation->run() == false) {
			$this->layout->admin('admin/ruang/edit',$data);
		}else{
			$data['edit'] =  array(
				'id_ruang' => $col,
				'nama' => $this->input->post('nama'),
				'jenis' => $this->input->post('jenis'),
			);
			$this->session->set_flashdata('sukses','Data berhasil DiBuat');
			$this->ruang_model->update($data['edit']);
			redirect(base_url('admin/ruangan'));
		}
	}
}