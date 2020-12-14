<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guru extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('user')) {
			redirect(base_url('login'));
		}
	}

	public function index()
	{
		$data['row'] = $this->guru_model->getAll();

		$this->layout->admin('admin/guru/data',$data);
	}

	public function tambah()
	{
		// validasi gambar
		$config['upload_path'] 		= 'upload/guru';
		$config['allowed_types'] 	= 'gif|jpg|png|svg';
		$config['max_size']			= '120000'; // KB	
		//$config['encrypt_name'] = TRUE;//enkripsi nama file
		$nmfile = "file_".time(); 
		$config['file_name'] = $nmfile; 
		$this->load->library('upload',$config);

		// validasi form
		$this->form_validation->set_rules('nama','Nama produk','required|is_unique[tb_guru.nama]',
			array(	'required'		=> 'Nama guru harus diisi',
					'is_unique' => 'Nama kelas sudah ada'));
		$this->form_validation->set_rules('nip','Stok produk','required|integer',
			array(	'required'		=> 'nip harus diisi',
					'integer'	=> 'nip harus di isi angka'));
		$this->form_validation->set_rules('nuptk','Stok produk','required|integer',
			array(	'required'		=> 'nuptk harus diisi',
					'integer'	=> 'nuptk harus di isi angka'));
		$this->form_validation->set_rules('nrg','Stok produk','required|integer',
			array(	'required'		=> 'nrg harus diisi',
					'integer'	=> 'nrg harus di isi angka'));
		$this->form_validation->set_rules('npwp','Stok produk','required|integer',
			array(	'required'		=> 'npwp harus diisi',
					'integer'	=> 'npwp harus di isi angka'));
		$this->form_validation->set_rules('tmp_lahir','tmp_lahir produk','required',
			array(	'required'		=> 'tempat lahir guru harus diisi'));
		$this->form_validation->set_rules('alamat','alamat produk','required',
			array(	'required'		=> 'alamat guru harus diisi'));

		if ($this->form_validation->run() == false) {
			$this->layout->admin('admin/guru/tambah');
		}else{
			if (!$this->upload->do_upload('gambar')) {
				// echo $this->upload->display_errors();
				$this->layout->admin('admin/guru/tambah');
				$this->session->set_flashdata('gagal','gagal mengupload gambar');
			}else{
				$upload_data				= array('uploads' =>$this->upload->data());
				// Image Editor
				$config['image_library']	= 'gd2';
				$config['source_image'] 	= 'upload/'.$upload_data['uploads']['file_name']; 
				$config['new_image'] 		= 'upload/guru/';
				$config['create_thumb'] 	= TRUE;
				$config['quality'] 			= "100%";
				$config['maintain_ratio'] 	= TRUE;
				$config['width'] 			= 256; // Pixel
				$config['height'] 			= 256; // Pixel
				$config['x_axis'] 			= 0;
				$config['y_axis'] 			= 0;
				$config['thumb_marker'] 	= '';
				$this->load->library('image_lib', $config);
				$this->image_lib->resize();

				$data =  array(
						'id_guru' => '',
						'nip' => $this->input->post('nip'),
						'nuptk' => $this->input->post('nuptk'),
						'nrg' => $this->input->post('nrg'),
						'npwp' => $this->input->post('npwp'),
						'tmp_lahir' => $this->input->post('tmp_lahir'),
						'nama' => $this->input->post('nama'),
						'tgl_lahir' => $this->input->post('tgl_lahir'),
						'jk' => $this->input->post('jk'),
						'agama' => $this->input->post('agama'),
						'alamat' => $this->input->post('alamat'),
						'foto' => $upload_data['uploads']['file_name'],
						'status' => ''
					);
				$this->db->insert('tb_guru',$data);
				$this->session->set_flashdata('sukses','Data berhasil DiBuat');
				redirect(base_url('admin/guru'));
			}
		}
	}

	public function hapus($col)
	{
		$data['id_guru'] = $col;
		$this->db->select('foto');
		$this->db->where('id_guru',$col);
		$query = $this->db->get('tb_guru');
		$row = $query->row();


		unlink("upload/guru/$row->foto");
		$que = $this->guru_model->delete($data);
		if ($que) {		
			$this->session->set_flashdata('gagal','Data telah gagal didelete');
			redirect(base_url('admin/guru/'));
		}else{
			$this->session->set_flashdata('sukses','Data telah sukses didelete');
			redirect(base_url('admin/guru/'));
		}
	}

	public function edit($col)
	{
		// validasi gambar
		$config['upload_path'] 		= 'upload/guru';
		$config['allowed_types'] 	= 'gif|jpg|png|svg';
		$config['max_size']			= '120000'; // KB	
		//$config['encrypt_name'] = TRUE;//enkripsi nama file
		$nmfile = "file_".time(); 
		$config['file_name'] = $nmfile; 
		$this->load->library('upload',$config);

		// validasi form
		$this->form_validation->set_rules('nama','Nama produk','required',
			array(	'required'		=> 'Nama guru harus diisi'));
		$this->form_validation->set_rules('nip','Stok produk','required|integer',
			array(	'required'		=> 'nip harus diisi',
					'integer'	=> 'nip harus di isi angka'));
		$this->form_validation->set_rules('nuptk','Stok produk','required|integer',
			array(	'required'		=> 'nuptk harus diisi',
					'integer'	=> 'nuptk harus di isi angka'));
		$this->form_validation->set_rules('nrg','Stok produk','required|integer',
			array(	'required'		=> 'nrg harus diisi',
					'integer'	=> 'nrg harus di isi angka'));
		$this->form_validation->set_rules('npwp','Stok produk','required|integer',
			array(	'required'		=> 'npwp harus diisi',
					'integer'	=> 'npwp harus di isi angka'));
		$this->form_validation->set_rules('tmp_lahir','tmp_lahir produk','required',
			array(	'required'		=> 'tempat lahir guru harus diisi'));
		$this->form_validation->set_rules('alamat','alamat produk','required',
			array(	'required'		=> 'alamat guru harus diisi'));

		// data model
		$data['row'] = $this->guru_model->getOne($col);

		if ($this->form_validation->run() == false) {
			$this->layout->admin('admin/guru/edit',$data);
		}else{
			if (!empty($_FILES['gambar']['name'])) {

				if (!$this->upload->do_upload('gambar')) {
					// echo $this->upload->display_errors();
					$this->layout->admin('admin/guru/edit',$data);
					$this->session->set_flashdata('gagal','gagal mengupload gambar');
				}else{
					$upload_data				= array('uploads' =>$this->upload->data());
					// Image Editor
					$config['image_library']	= 'gd2';
					$config['source_image'] 	= 'upload/'.$upload_data['uploads']['file_name']; 
					$config['new_image'] 		= 'upload/guru/';
					$config['create_thumb'] 	= TRUE;
					$config['quality'] 			= "100%";
					$config['maintain_ratio'] 	= TRUE;
					$config['width'] 			= 256; // Pixel
					$config['height'] 			= 256; // Pixel
					$config['x_axis'] 			= 0;
					$config['y_axis'] 			= 0;
					$config['thumb_marker'] 	= '';
					$this->load->library('image_lib', $config);
					$this->image_lib->resize();
					$data =  array(
							'id_guru' => $col,
							'nip' => $this->input->post('nip'),
							'nuptk' => $this->input->post('nuptk'),
							'nrg' => $this->input->post('nrg'),
							'npwp' => $this->input->post('npwp'),
							'tmp_lahir' => $this->input->post('tmp_lahir'),
							'nama' => $this->input->post('nama'),
							'tgl_lahir' => $this->input->post('tgl_lahir'),
							'jk' => $this->input->post('jk'),
							'agama' => $this->input->post('agama'),
							'alamat' => $this->input->post('alamat'),
							'foto' => $upload_data['uploads']['file_name'],
							'status' => ''
						);
					$this->guru_model->update($data);
					$this->session->set_flashdata('sukses','Data berhasil DiBuat');
					redirect(base_url('admin/guru'));
				}
			}else{
				$data =  array(
						'id_guru' => $col,
						'nip' => $this->input->post('nip'),
						'nuptk' => $this->input->post('nuptk'),
						'nrg' => $this->input->post('nrg'),
						'npwp' => $this->input->post('npwp'),
						'tmp_lahir' => $this->input->post('tmp_lahir'),
						'nama' => $this->input->post('nama'),
						'tgl_lahir' => $this->input->post('tgl_lahir'),
						'jk' => $this->input->post('jk'),
						'agama' => $this->input->post('agama'),
						'alamat' => $this->input->post('alamat'),
						'status' => ''
					);
				$this->guru_model->update($data);
				$this->session->set_flashdata('sukses','Data berhasil DiBuat');
				redirect(base_url('admin/guru'));
			}
		}
	}

	public function detail($col)
	{
		$data['row'] = $this->guru_model->getOne($col);

		$this->layout->admin('admin/guru/detail',$data);
	}

	public function export()
	{
		$data = $this->guru_model->getAll();

		$options = array(
	        'filename' => '', //nama file penyimpanan, kosongkan jika output ke browser
	        'destinationfile' => '', //I=inline browser (default), F=local file, D=download
	        'paper_size'=>'F4', //paper size: F4, A3, A4, A5, Letter, Legal
	        'orientation'=>'P' //orientation: P=portrait, L=landscape
	    );

		// var_dump($data);
		// die;
		$tabel = new guru_export($data,$options);
		$tabel->printPDF();
	}
}