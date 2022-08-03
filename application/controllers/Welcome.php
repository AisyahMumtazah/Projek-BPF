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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Buku_model');
        $this->load->model('User_model','userrole');
	}
	public function index()
	{
		$data['buku']=$this->Buku_model->getDes();
		$this->load->view('layout/header.php');
		$this->load->view('admin/vw_dashboard.php',$data);
		$this->load->view('layout/footer.php');
	}
	public function user()
	{
		$this->load->view('layout/header_user.php');
		$this->load->view('user/vw_list_buku.php');
		$this->load->view('layout/footer.php');
	}
}
