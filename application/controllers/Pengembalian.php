<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Pengembalian extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Pengembalian_model');
	}
	public function index()
	{
		$data['judul'] = "Halaman Pengembalian";
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['pengembalian'] = $this->Pengembalian_model->get();
		$this->load->view("Layout/header", $data);
		$this->load->view("pengembalian/vw_pengembalian", $data);
		$this->load->view("Layout/footer", $data);
	}
	public function tambah()
	{
        //
	}
	public function edit($id)
	{
        //
	}
	public function detail($id)
	{
		//
	}
	public function Simpan($id)
	{
        //
    }
}