<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jurusan extends CI_Controller{


	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('user')) {
			redirect(base_url('login'));
		}
	}

	public function index()
	{
		$data['row'] = $this->jurusan_model->data();
		
		$this->layout->admin('admin/jurusan/data',$data);
	}

	public function Tambah()
	{	
		$data['guru'] = $this->guru_model->getAll();
		// validasi form
		$this->form_validation->set_rules('nama','Nama produk','required|valid_url',
			array(	'required'		=> 'Nama Jurusan harus diisi',
					'valid_url'		=> 'tidak boleh ada spasi'));
		$this->form_validation->set_rules('kapasitas','Stok produk','required|integer',
			array(	'required'		=> 'Kapasitas harus diisi',
					'integer'	=> 'Kapasitas harus di isi angka'));

		if ($this->form_validation->run() == false) {
			$this->layout->admin('admin/jurusan/tambah',$data);
		}else{
			$data =  array(
					'id_jurusan' => '',
					'nama' => $this->input->post('nama'),
					'kapasitas' => $this->input->post('kapasitas'),
					'id_waliKelas' => $this->input->post('wali_kelas'),
					'kelas' => $this->input->post('kelas')
				);
			$this->session->set_flashdata('sukses','Data berhasil DiBuat');
			$this->db->insert('tb_jurusan',$data);
			redirect(base_url('admin/jurusan'));
		}
	}

	public function hapus($col)
	{

		$query = $this->jurusan_model->delete($col);					
		if ($query){
				$this->session->set_flashdata('gagal','Data gagal didelete');
				redirect(base_url('admin/jurusan/'));	
			}
		else{
				$this->session->set_flashdata('sukses','Data telah didelete');
				redirect(base_url('admin/jurusan/'));	
		}	

	}

	public function edit($col)
	{
		$data['row'] = $this->jurusan_model->getOne($col);
		$data['guru'] = $this->guru_model->getAll();

		$this->form_validation->set_rules('nama','Nama produk','required|valid_url',
			array(	'required'		=> 'Nama Jurusan harus diisi',
					'valid_url'		=> 'tidak boleh ada spasi'));
		$this->form_validation->set_rules('kapasitas','Stok produk','required|integer',
			array(	'required'		=> 'Kapasitas harus diisi',
					'integer'	=> 'Kapasitas harus di isi angka'));

		if ($this->form_validation->run() == false) {
			$this->layout->admin('admin/jurusan/edit',$data);
		}else{
			$data['edit'] =  array(
					'id_jurusan' => $col,
					'nama' => $this->input->post('nama'),
					'kapasitas' => $this->input->post('kapasitas'),
					'id_waliKelas' => $this->input->post('wali_kelas'),
					'kelas' => $this->input->post('kelas')
				);
			$this->session->set_flashdata('sukses','Data berhasil DiBuat');
			$this->jurusan_model->update($data['edit']);
			redirect(base_url('admin/jurusan'));
		}
	}
}