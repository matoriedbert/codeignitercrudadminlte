<?php 


class User extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_user');
		$this->load->helper('url');
		$this->load->library('form_validation');
	}

	function index(){
		$data['user'] = $this->m_user->query_tampil()->result();
		$this->load->view('v_user_tampil',$data);
	}

	function tambah(){
		$this->load->view('v_user_tambah');
	}

	function prosestambah(){
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$pekerjaan = $this->input->post('pekerjaan');

		$data = array(
			'nama' => $nama,
			'alamat' => $alamat,
			'pekerjaan' => $pekerjaan
			);

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required');

        if ($this->form_validation->run() == FALSE){
           	$this->load->view('v_user_tambah');
        }else{
			$this->m_user->query_prosestambah($data,'user');
			$this->session->set_flashdata('tambah', '<b>'.$nama.'</b>'.' Berhasil ditambahkan');
			redirect('user/index');
        }

	}

	function proseshapus($id){
		$where = array('id' => $id);
		$nama = $this->input->post('nama');
		$this->m_user->query_proseshapus($where,'user');
		$this->session->set_flashdata('hapus', '<b>'.$nama.'</b>'.' Berhasil dihapus');
		redirect('user/index');
	}

	function hapus($id){
		$where = array('id' => $id);
		$data['user'] = $this->m_user->query_hapus($where,'user')->result();
		$this->load->view('v_user_hapus',$data);
	}

	function edit($id){
		$where = array('id' => $id);
		$data['user'] = $this->m_user->query_edit($where,'user')->result();
		$this->load->view('v_user_edit',$data);
	}

	function prosesedit(){
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$nama_hidden = $this->input->post('nama_hidden');
		$alamat = $this->input->post('alamat');
		$pekerjaan = $this->input->post('pekerjaan');

		$data = array(
			'nama' => $nama,
			'alamat' => $alamat,
			'pekerjaan' => $pekerjaan
		);

		$where = array(
			'id' => $id
		);

		$this->m_user->query_prosesedit($where,$data,'user');
		$this->session->set_flashdata('edit', '<b>'.$nama_hidden.'</b>'.' Berhasil di ubah menjadi'.$nama.'');
		redirect('user/index');
	}

}