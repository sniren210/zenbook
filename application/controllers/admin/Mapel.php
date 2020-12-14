<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mapel extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('user')) {
			redirect(base_url('login'));
		}
	}

	public function index()
	{
		$data['row'] = $this->mapel_model->getAll();

		$this->layout->admin('admin/mapel/data',$data);
	}

	public function tambah()
	{
		$this->form_validation->set_rules('nama','Nama produk','required|is_unique[tb_mapel.nama]',
			array(	'required'		=> 'Nama mata pelajaran harus diisi',
					'is_unique' => 'Nama mata pelajaran sudah ada'));
		$this->form_validation->set_rules('kkm','Stok produk','required|integer',
			array(	'required'		=> 'kkm harus diisi',
					'integer'	=> 'kkm harus di isi angka'));

		if ($this->form_validation->run() == false) {
			$this->layout->admin('admin/mapel/tambah');
		}else{
			$data =  array(
					'id_mapel' => '',
					'nama' => $this->input->post('nama'),
					'semester' => $this->input->post('semester'),
					'kkm' => $this->input->post('kkm')
				);
			$this->session->set_flashdata('sukses','Data berhasil DiBuat');
			$this->db->insert('tb_mapel',$data);
			redirect(base_url('admin/mapel'));
		}
	}

	public function hapus($col)
	{
		$query = $this->mapel_model->delete($col);					
		if ($query){
				$this->session->set_flashdata('gagal','Data gagal didelete');
				redirect(base_url('admin/mapel/'));	
			}
		else{
				$this->session->set_flashdata('sukses','Data telah didelete');
				redirect(base_url('admin/mapel/'));	
		}
	}

	public function edit($col)
	{
		$data['row'] = $this->mapel_model->getOne($col);
		$this->form_validation->set_rules('nama','Nama produk','required',
			array(	'required'		=> 'Nama mata pelajaran harus diisi'));
		$this->form_validation->set_rules('kkm','Stok produk','required|integer',
			array(	'required'		=> 'kkm harus diisi',
					'integer'	=> 'kkm harus di isi angka'));

		if ($this->form_validation->run() == false) {
			$this->layout->admin('admin/mapel/edit',$data);
		}else{
			$data =  array(
					'id_mapel' => $col,
					'nama' => $this->input->post('nama'),
					'semester' => $this->input->post('semester'),
					'kkm' => $this->input->post('kkm')
				);
			$this->session->set_flashdata('sukses','Data berhasil DiBuat');
			$this->mapel_model->update($data);
			redirect(base_url('admin/mapel'));
		}
	}
}