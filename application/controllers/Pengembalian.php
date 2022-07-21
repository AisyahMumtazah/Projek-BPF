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
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		$data['pengembalian'] = $this->Pengembalian_model->get();
		$this->load->view("Layout/header", $data);
		$this->load->view("pengembalian/vw_daftar_pengembalian", $data);
		$this->load->view("Layout/footer", $data);
	}
	public function tambah()
	{
        $data['judul'] = "Halaman Pengembalian";
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		$data['pengembalian'] = $this->Pengembalian_model->get();
		$this->form_validation->set_rules('judul', 'Judul Pengembalian', 'required', [
			'required' => 'Judul Pengembalian Wajib di isi'
		]);
		$this->form_validation->set_rules('tanggal_pinjamn', 'Tanggal Pinjamn', 'required', [
			'required' => 'Tanggal Pinjamn Pengembalian Wajib di isi'
		]);
		$this->form_validation->set_rules('tanggal_kembali', 'Tanggal Kembali', 'required', [
			'required' => 'Tanggal Kembali Pengembalian Wajib di isi'
		]);
		$this->form_validation->set_rules('tanggal_pengembalian', 'Tanggal Pengembalian', 'required', [
			'required' => 'Tanggal Pengembalian Wajib di isi'
		]);
		$this->form_validation->set_rules('denda', 'Denda', 'required', [
			'required' => 'Denda Pengembalian Wajib di isi'
		]);
		if ($this->form_validation->run() == false) {
			$this->load->view("layout/header", $data);
			$this->load->view("buku/vw_form_pengembalian", $data);
			$this->load->view("layout/footer");
		} else {
			$data = [
				'judul' => $this->input->post('judul'),
				'tanggal_pinjam' => $this->input->post('tanggal_pinjam'),
				'tanggal_kembali' => $this->input->post('tanggal_kembali'),
				'tanggal_pengembalian' => $this->input->post('tanggal_pengembalian'),
				'denda' => $this->input->post('denda'),
			];
			$this->Pengembalian_model->insert($data);
			$this->session->set_flashdata('message', '<div class="alert alert-success"
	role="alert">Data Pengembalian Berhasil Ditambah!</div>');
			redirect('Pengembalian');
		}
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