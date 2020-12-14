<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku_induk extends CI_Controller {

	public function index()
	{
		$data['row'] = $this->siswa_model->getAll();

		$this->layout->umum('global/buku_induk',$data);
	}

	public function detail($col)
	{
		$data['row'] = $this->siswa_model->getOne($col);

		$this->layout->umum('global/detail_buku_induk',$data);
	}
}