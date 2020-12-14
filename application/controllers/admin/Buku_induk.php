<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku_induk extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('user')) {
			redirect(base_url('login'));
		}
	}

	public function index()
	{
		$data['row'] = $this->siswa_model->getAll();

		$this->layout->admin('admin/buku_induk/data',$data);
	}

	public function tambah()
	{
		// validasi gambar
		$config['upload_path'] 		= 'upload/siswa';
		$config['allowed_types'] 	= 'gif|jpg|png|svg';
		$config['max_size']			= '120000'; // KB	
		//$config['encrypt_name'] = TRUE;//enkripsi nama file
		$nmfile = "file_".time(); 
		$config['file_name'] = $nmfile; 
		$this->load->library('upload',$config);

		// validasi form
		$this->form_validation->set_rules('nama','Nama produk','required|is_unique[tb_siswa.nama]',
			array(	'required'		=> 'Nama siswa harus diisi',
					'is_unique' => 'Nama kelas sudah ada'));
		$this->form_validation->set_rules('nisn','Stok produk','required|integer',
			array(	'required'		=> 'nisn harus diisi',
					'integer'	=> 'nisn harus di isi angka'));
		$this->form_validation->set_rules('nis','Stok produk','required|integer',
			array(	'required'		=> 'nis harus diisi',
					'integer'	=> 'nis harus di isi angka'));
		$this->form_validation->set_rules('nama_ayah','Stok produk','required',
			array(	'required'		=> 'nama ayah harus diisi'));
		$this->form_validation->set_rules('nama_ibu','Stok produk','required',
			array(	'required'		=> 'nama ibu harus diisi'));
		$this->form_validation->set_rules('anakKe','Stok produk','required|integer',
			array(	'required'		=> ' harus diisi',
					'integer'	=> ' harus di isi angka'));
		$this->form_validation->set_rules('tmp_lahir','tmp_lahir produk','required',
			array(	'required'		=> 'tempat lahir siswa harus diisi'));
		$this->form_validation->set_rules('alamat','alamat produk','required',
			array(	'required'		=> 'alamat siswa harus diisi'));

		if ($this->form_validation->run() == false) {
			$this->layout->admin('admin/buku_induk/tambah');
		}else{
			if (!$this->upload->do_upload('gambar')) {
				// echo $this->upload->display_errors();
				$this->layout->admin('admin/buku_induk/tambah');
				$this->session->set_flashdata('gagal','gagal mengupload gambar');
			}else{
				$upload_data				= array('uploads' =>$this->upload->data());
				// Image Editor
				$config['image_library']	= 'gd2';
				$config['source_image'] 	= 'upload/'.$upload_data['uploads']['file_name']; 
				$config['new_image'] 		= 'upload/siswa/';
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
						'id_siswa' => '',
						'nisn' => $this->input->post('nisn'),
						'nis' => $this->input->post('nis'),
						'nama_siswa' => $this->input->post('nama'),
						'jk' => $this->input->post('jk'),
						'tmp_lahir' => $this->input->post('tmp_lahir'),
						'tgl_lahir' => $this->input->post('tgl_lahir'),
						'agama' => $this->input->post('agama'),
						'anak_ke' => $this->input->post('anakKe'),
						'foto' => $upload_data['uploads']['file_name'],
						'alamat' => $this->input->post('alamat'),
						'nama_ayah' => $this->input->post('nama_ayah'),
						'nama_ibu' => $this->input->post('nama_ibu'),
						'status' => $this->input->post('status')
					);
				$this->db->insert('tb_siswa',$data);
				$this->session->set_flashdata('sukses','Data berhasil DiBuat');
				redirect(base_url('admin/buku_induk'));
			}
		}
	}

	public function detail($col)
	{
		$data['row'] = $this->siswa_model->getOne($col);

		$this->layout->admin('admin/buku_induk/detail',$data);
	}

	public function hapus($col)
	{
		$data['id_siswa'] = $col;
		$this->db->select('foto');
		$this->db->where('id_siswa',$col);
		$query = $this->db->get('tb_siswa');
		$row = $query->row();


		unlink("upload/siswa/$row->foto");
		$que = $this->siswa_model->delete($data);
		if ($que) {		
			$this->session->set_flashdata('gagal','Data telah gagal didelete');
			redirect(base_url('admin/buku_induk/'));
		}else{
			$this->session->set_flashdata('sukses','Data telah sukses didelete');
			redirect(base_url('admin/buku_induk/'));
		}
	}

	public function edit($col)
	{
		// validasi gambar
		$config['upload_path'] 		= 'upload/siswa';
		$config['allowed_types'] 	= 'gif|jpg|png|svg';
		$config['max_size']			= '120000'; // KB	
		//$config['encrypt_name'] = TRUE;//enkripsi nama file
		$nmfile = "file_".time(); 
		$config['file_name'] = $nmfile; 
		$this->load->library('upload',$config);

		// validasi form
		$this->form_validation->set_rules('nama','Nama produk','required',
			array(	'required'		=> 'Nama siswa harus diisi'));
		$this->form_validation->set_rules('nisn','Stok produk','required|integer',
			array(	'required'		=> 'nisn harus diisi',
					'integer'	=> 'nisn harus di isi angka'));
		$this->form_validation->set_rules('nis','Stok produk','required|integer',
			array(	'required'		=> 'nis harus diisi',
					'integer'	=> 'nis harus di isi angka'));
		$this->form_validation->set_rules('nama_ayah','Stok produk','required',
			array(	'required'		=> 'nama ayah harus diisi'));
		$this->form_validation->set_rules('nama_ibu','Stok produk','required',
			array(	'required'		=> 'nama ibu harus diisi'));
		$this->form_validation->set_rules('anakKe','Stok produk','required|integer',
			array(	'required'		=> ' harus diisi',
					'integer'	=> ' harus di isi angka'));
		$this->form_validation->set_rules('tmp_lahir','tmp_lahir produk','required',
			array(	'required'		=> 'tempat lahir siswa harus diisi'));
		$this->form_validation->set_rules('alamat','alamat produk','required',
			array(	'required'		=> 'alamat siswa harus diisi'));

		// data model
		$data['row'] = $this->siswa_model->getOne($col);

		if ($this->form_validation->run() == false) {
			$this->layout->admin('admin/buku_induk/edit',$data);
		}else{
			if (!empty($_FILES['gambar']['name'])) {

				if (!$this->upload->do_upload('gambar')) {
					// echo $this->upload->display_errors();
					$this->layout->admin('admin/buku_induk/edit',$data);
					$this->session->set_flashdata('gagal','gagal mengupload gambar');
				}else{
					$upload_data				= array('uploads' =>$this->upload->data());
					// Image Editor
					$config['image_library']	= 'gd2';
					$config['source_image'] 	= 'upload/'.$upload_data['uploads']['file_name']; 
					$config['new_image'] 		= 'upload/siswa/';
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
							'id_siswa' => $col,
							'nisn' => $this->input->post('nisn'),
							'nis' => $this->input->post('nis'),
							'nama_siswa' => $this->input->post('nama'),
							'jk' => $this->input->post('jk'),
							'tmp_lahir' => $this->input->post('tmp_lahir'),
							'tgl_lahir' => $this->input->post('tgl_lahir'),
							'agama' => $this->input->post('agama'),
							'anak_ke' => $this->input->post('anakKe'),
							'foto' => $upload_data['uploads']['file_name'],
							'alamat' => $this->input->post('alamat'),
							'nama_ayah' => $this->input->post('nama_ayah'),
							'nama_ibu' => $this->input->post('nama_ibu'),
							'status' => $this->input->post('status')
						);
					$this->siswa_model->update($data);
					$this->session->set_flashdata('sukses','Data berhasil DiBuat');
					redirect(base_url('admin/buku_induk'));
				}
			}else{
				$data =  array(
						'id_siswa' => $col,
						'nisn' => $this->input->post('nisn'),
						'nis' => $this->input->post('nis'),
						'nama_siswa' => $this->input->post('nama'),
						'jk' => $this->input->post('jk'),
						'tmp_lahir' => $this->input->post('tmp_lahir'),
						'tgl_lahir' => $this->input->post('tgl_lahir'),
						'agama' => $this->input->post('agama'),
						'anak_ke' => $this->input->post('anakKe'),
						'alamat' => $this->input->post('alamat'),
						'nama_ayah' => $this->input->post('nama_ayah'),
						'nama_ibu' => $this->input->post('nama_ibu'),
						'status' => $this->input->post('status')
					);
				$this->siswa_model->update($data);
				$this->session->set_flashdata('sukses','Data berhasil DiBuat');
				redirect(base_url('admin/buku_induk'));
			}
		}
	}

	public function export()
	{
		$data = $this->siswa_model->getAll();

		$options = array(
	        'filename' => '', //nama file penyimpanan, kosongkan jika output ke browser
	        'destinationfile' => '', //I=inline browser (default), F=local file, D=download
	        'paper_size'=>'F4', //paper size: F4, A3, A4, A5, Letter, Legal
	        'orientation'=>'P' //orientation: P=portrait, L=landscape
	    );

		// var_dump($data);
		// die;
		$tabel = new siswa_export($data,$options);
		$tabel->printPDF();
	}
}