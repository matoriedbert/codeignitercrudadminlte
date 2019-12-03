<?php 
class Navigasi extends CI_Controller{
	function __construct(){
		parent::__construct();		
		$this->load->model('m_navigasi');
		$this->load->helper('url');
		$this->load->library('form_validation');
	}

	function index(){
		$data['judul']= "Tampil";
		$data['navigasimenu'] = $this->m_navigasi->query_tampil()->result();
		$data['navigasi'] = $this->m_navigasi->query_tampil()->result();
		$this->load->view('navigasi/v_tampil', $data);
	}

	function tambah(){
		$data['judul']= "Tambah";
		$data['navigasimenu'] = $this->m_navigasi->query_tampil()->result();
		$data['navigasi'] = $this->m_navigasi->query_tampil()->result();
		$this->load->view('navigasi/v_tambah', $data);
	}

	function prosestambah(){
		$data['judul']= "Tambah";
		$data['navigasimenu'] = $this->m_navigasi->query_tampil()->result();
		$nama_navigasi = $this->input->post('nama_navigasi');
		$url_navigasi = $this->input->post('url_navigasi');
		$gambar_navigasi = $this->input->post('gambar_navigasi');

        $this->form_validation->set_rules('nama_navigasi', 'Nama', 'required');
        $this->form_validation->set_rules('url_navigasi', 'URL', 'required');
        // $this->form_validation->set_rules('url_navigasi', 'URL', 'required|valid_email');
        // $this->form_validation->set_message('valid_email', 'penulisan email salah');
        $this->form_validation->set_message('required', 'wajib diisi');

        if ($this->form_validation->run() == FALSE){
        	$this->session->set_flashdata('url_navigasi', form_error('url_navigasi'));
        	$this->session->set_flashdata('nama_navigasi', form_error('nama_navigasi'));
           	$this->tambah();
        }else{
        	$data = array(
			'nama_navigasi' => $nama_navigasi,
			'url_navigasi' => $url_navigasi,
			'gambar_navigasi' => $gambar_navigasi
			);
			$this->m_navigasi->query_prosestambah($data,'navigasi');
			$this->session->set_flashdata('tambah', '<b>'.$nama_navigasi.'</b>'.' Berhasil ditambahkan');
			redirect('navigasi/index');
        }

	}

	function hapus($id){
		$data['judul']= "Hapus";
		$where = array('id_navigasi' => $id);
		$data['navigasimenu'] = $this->m_navigasi->query_tampil()->result();
		$data['navigasi'] = $this->m_navigasi->query_hapus($where,'navigasi')->result();
		$this->load->view('navigasi/v_hapus', $data);
	}

	function proseshapus($id){
		$data['judul']= "Hapus";
		$where = array('id_navigasi' => $id);
		$nama_navigasi = $this->input->post('nama_navigasi');
		$this->m_navigasi->query_proseshapus($where,'navigasi');
		$this->session->set_flashdata('hapus', '<b>'.$nama_navigasi.'</b>'.' Berhasil dihapus');
		redirect('navigasi/index');
	}

	function edit($id){
		$data['judul']= "Edit";
		$where = array('id_navigasi' => $id);
		$data['navigasimenu'] = $this->m_navigasi->query_tampil()->result();
		$data['navigasi'] = $this->m_navigasi->query_edit($where,'navigasi')->result();
		$this->load->view('navigasi/v_edit', $data);
	}

function edit_validasi($id){
		$data['judul']= "Edit";
		$where = array('id_navigasi' => $id);
		$data['navigasimenu'] = $this->m_navigasi->query_tampil()->result();
		$data['navigasi'] = $this->m_navigasi->query_edit($where,'navigasi')->result();
		$this->load->view('navigasi/v_edit_validation', $data);
	}

	function prosesedit(){
		$data['judul']= "Edit";
		$data['navigasimenu'] = $this->m_navigasi->query_tampil()->result();
		$url = $this->input->post('id_navigasi');
		$this->form_validation->set_rules('nama_navigasi', 'Nama', 'required');
        $this->form_validation->set_rules('url_navigasi', 'URL', 'required');

        $id = $this->input->post('id_navigasi');
		$nama_navigasi = $this->input->post('nama_navigasi');
		$nama_navigasi_hidden = $this->input->post('nama_navigasi_hidden');
		$url_navigasi = $this->input->post('url_navigasi');
		$gambar_navigasi = $this->input->post('gambar_navigasi');

		if ($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('url_navigasi', form_error('url_navigasi'));
        	$this->session->set_flashdata('nama_navigasi', form_error('nama_navigasi'));
			$this->edit_validasi($id);
        }else{
		$data = array(
			'nama_navigasi' => $nama_navigasi,
			'url_navigasi' => $url_navigasi,
			'gambar_navigasi' => $gambar_navigasi
			);
		$where = array(
			'id_navigasi' => $id
		);
		$this->m_navigasi->query_prosesedit($where,$data,'navigasi');
		$this->session->set_flashdata('edit', '<b>'.$nama_navigasi_hidden.'</b>'.' Berhasil di ubah menjadi '.'<b>'.$nama_navigasi.'</b>');
		redirect('navigasi/index');	
        }
	}

}