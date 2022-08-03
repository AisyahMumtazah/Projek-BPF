<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Buku_model');
        $this->load->model('User_model','userrole');
	}
	public function index()
	{
		$data['judul'] = "Halaman Buku";
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		$data['buku']=$this->Buku_model->getDes();
		$this->load->view("Layout/header_user", $data);
		$this->load->view("admin/vw_dashboard", $data);
		$this->load->view("Layout/footer", $data);
	}
    public function riwayat()
	{
		$data['judul'] = "Halaman Riwayat Peminjaman";
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		$data['peminjaman'] = $this->model_peminjaman->get($this->session->userdata('id'));
		$this->load->view("Layout/header_user", $data);
		$this->load->view("user/vw_riwayat_peminjaman", $data);
		$this->load->view("Layout/footer", $data);
	}
    function logout(){
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('role');
        $this->session->set_flashdata('message','<div class="alert alert-success" 
        role="alert">Berhasil Logout!</div>');
        redirect('Auth');
    }
}
