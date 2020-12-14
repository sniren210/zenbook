<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guru extends CI_Controller {


	public function index()
	{
		$data['row'] = $this->guru_model->getAll();

		$this->layout->umum('global/guru',$data);
	}


	public function detail($col)
	{
		$data['row'] = $this->guru_model->getOne($col);

		$this->layout->umum('global/detail_guru',$data);
	}
}