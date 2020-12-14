<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Layout {
	
	// SET SUPER GLOBAL
	var $CI = NULL;
	public function __construct() {
		$this->CI = get_instance();
	}

	public function umum($tampil=null,$data = null)
	{
		$this->CI->load->view('template/head');
		$this->CI->load->view('global/template/nav');
		$this->CI->load->view($tampil,$data);
		$this->CI->load->view('global/template/footer');
		$this->CI->load->view('template/foot');
	}

	public function admin($tampil=null,$data=null)
	{
		$this->CI->load->view('template/head');
		$this->CI->load->view('admin/template/nav');
		$this->CI->load->view($tampil,$data);
		$this->CI->load->view('admin/template/footer');
		$this->CI->load->view('template/foot');
	}
}