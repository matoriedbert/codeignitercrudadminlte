<?php 
class Navigasi extends CI_Controller{
	function __construct(){
		parent::__construct();		
		$this->load->model('m_navigasi');
		$this->load->model('m_departemen');
		$this->load->helper('url');
		$this->load->library('form_validation');
	}

	function index(){
		$data['navigasimenu'] = $this->m_navigasi->query_tampil()->result();
		$data['navigasi'] = $this->m_navigasi->query_tampil()->result();
		$this->load->view('v_navigasi_tampil', $data);
	}

	function tambah(){
		$data['navigasimenu'] = $this->m_navigasi->query_tampil()->result();
		$data['navigasi'] = $this->m_navigasi->query_tampil()->result();
		$this->load->view('v_navigasi_tambah', $data);
	}

	function prosestambah(){
		$nama_navigasi = $this->input->post('nama_navigasi');
		$url_navigasi = $this->input->post('url_navigasi');
		$gambar_navigasi = $this->input->post('gambar_navigasi');

		$data = array(
			'nama_navigasi' => $nama_navigasi,
			'url_navigasi' => $url_navigasi,
			'gambar_navigasi' => $gambar_navigasi
			);

        $this->form_validation->set_rules('nama_navigasi', 'Nama', 'required');
        $this->form_validation->set_rules('url_navigasi', 'URL', 'required');

        if ($this->form_validation->run() == FALSE){
           	$this->load->view('v_navigasi_tambah');
        }else{
			$this->m_navigasi->query_prosestambah($data,'navigasi');
			$this->session->set_flashdata('tambah', '<b>'.$nama_navigasi.'</b>'.' Berhasil ditambahkan');
			redirect('navigasi/index');
        }

	}

	function hapus($id){
		$where = array('id_navigasi' => $id);
		$data['navigasimenu'] = $this->m_navigasi->query_tampil()->result();
		$data['navigasi'] = $this->m_navigasi->query_hapus($where,'navigasi')->result();
		$this->load->view('v_navigasi_hapus',$data);
	}

	function proseshapus($id){
		$where = array('id_navigasi' => $id);
		$nama_navigasi = $this->input->post('nama_navigasi');
		$this->m_navigasi->query_proseshapus($where,'navigasi');
		$this->session->set_flashdata('hapus', '<b>'.$nama_navigasi.'</b>'.' Berhasil dihapus');
		redirect('navigasi/index');
	}

	function edit($id){
		$where = array('id_navigasi' => $id);
		$data['navigasimenu'] = $this->m_navigasi->query_tampil()->result();
		$data['navigasi2'] = $this->m_navigasi->query_edit($where,'navigasi')->result();
		$this->load->view('v_navigasi_edit', $data);
	}

	function prosesedit(){
		$id = $this->input->post('id_navigasi');
		$nama_navigasi = $this->input->post('nama_navigasi');
		$nama_navigasi_hidden = $this->input->post('nama_navigasi_hidden');
		$url_navigasi = $this->input->post('url_navigasi');
		$gambar_navigasi = $this->input->post('gambar_navigasi');

		$data = array(
			'nama_navigasi' => $nama_navigasi,
			'url_navigasi' => $url_navigasi,
			'gambar_navigasi' => $gambar_navigasi
			);

		$where = array(
			'id_navigasi' => $id
		);

		$this->m_navigasi->query_prosesedit($where,$data,'navigasi');
		$this->session->set_flashdata('edit', '<b>'.$nama_navigasi_hidden.'</b>'.' Berhasil di ubah menjadi'.$nama_navigasi.'');
		redirect('navigasi/index');
	}

}