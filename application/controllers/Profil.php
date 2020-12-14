<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

  public function index()
  {
    $data['row'] = $this->profil_model->getAll();
	$data['jurusan'] = $this->jurusan_model->profil();

	$this->layout->umum('global/profil',$data);
  }
}