<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct(){
		parent::__construct();		
		$this->load->model('m_user');
		$this->load->helper('url');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['user'] = $this->m_user->query_tampil()->result();
		$this->load->view('v_index',$data);
	}

	public function tambah()
	{
		//$data['user'] = $this->m_user->query_tampil()->result();
		$this->load->view('v_tambah',$data);
	}
}
