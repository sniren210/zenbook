<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas extends CI_Controller{

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

	public function pindah($siswa = null,$jurusan = null)
	{	
		$data['jurusan'] =$this->jurusan_model->getAll();
		$data['row'] = $this->siswa_model->getAll();

		if ($siswa != null && $jurusan != null) {
			$data['query'] = array(
				'id_jurusan' => $jurusan
			);
	
			$this->db->where('id_siswa', $siswa);
			$query = $this->db->update('tb_siswa', $data['query']);
			if ($query == true) {
				redirect(base_url('admin/kelas/pindah'));
			}else{
				$this->layout->admin('admin/kelas/pindah',$data);	
			}
			
		}else if($this->input->get('pilihan') || $this->input->get('pilihan') == '0'){
			$pilih = $this->input->get('pilihan');
			$data['row'] =  $this->siswa_model->perjurusan($pilih);
			$this->layout->admin('admin/kelas/pindah',$data);
		}else{
			$this->layout->admin('admin/kelas/pindah',$data);
		}
	}


	public function lulus($id = null)
	{
		$data['jurusan'] =$this->jurusan_model->getAll();
		$data['row'] = $this->siswa_model->lulus();

		if ($id != null) {
			$que = array(
				'id_siswa' => $id,
				'status' => 'lulus');

			$query = $this->siswa_model->update($que);
			if ($query == true) {
				redirect(base_url('admin/kelas/lulus'));
			}else{
				redirect(base_url('admin/kelas/lulus'));	
			}
		}else{
			$this->layout->admin('admin/kelas/lulus',$data);
		}
	}

	public function naik($id = null,$kelas = null)
	{
		$data['jurusan'] =$this->jurusan_model->getAll();
		$data['row'] = $this->siswa_model->naik();


		if ($id != null) {
			
		}else{
			$this->layout->admin('admin/kelas/naik',$data);
		}
	}
}