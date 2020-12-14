<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas extends CI_Controller{

	public function index($pilih)
	{
		$data['row'] =  $this->siswa_model->perjurusan($pilih);
		$data['kelas'] = $this->siswa_model->globKelas($pilih);
		
		$this->layout->umum('global/kelas',$data);
	}
}