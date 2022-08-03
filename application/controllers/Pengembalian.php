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
		$this->form_validation->set_rules('kode_peminjaman', 'Kode Peminjaman', 'required', [
			'required' => 'Kode Peminjaman Pengembalian Wajib di isi'
		]);
		$this->form_validation->set_rules('id_buku', 'Id Buku', 'required', [
			'required' => 'Id Buku Pengembalian Wajib di isi'
		]);
		$this->form_validation->set_rules('id_anggota', 'Id Anggota', 'required', [
			'required' => 'Id Anggota Pengembalian Wajib di isi'
		]);
		$this->form_validation->set_rules('tanggal_pengembalian', 'Tanggal Pengembalian', 'required', [
			'required' => 'Tanggal Pengembalian Wajib di isi'
		]);
		$this->form_validation->set_rules('denda', 'Denda', 'required', [
			'required' => 'Denda Pengembalian Wajib di isi'
		]);
		if ($this->form_validation->run() == false) {
			$this->load->view("layout/header", $data);
			$this->load->view("pengembalian/vw_form_pengembalian", $data);
			$this->load->view("layout/footer");
		} else {
			$data = [
				'kode_peminjaman' => $this->input->post('kode_peminjaman'),
				'id_buku' => $this->input->post('id_buku'),
				'id_anggota' => $this->input->post('id_anggota'),
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
        $data['judul'] = "Halaman Edit Pengembalian";
		$data['pengembalian'] = $this->Pengembalian_model->getById($id);
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->form_validation->set_rules('kode_peminjaman', 'Kode Peminjaman', 'required', [
			'required' => 'Kode Peminjaman Pengembalian Wajib di isi'
		]);
		$this->form_validation->set_rules('id_buku', 'Id Buku', 'required', [
			'required' => 'Id Buku Pengembalian Wajib di isi'
		]);
		$this->form_validation->set_rules('id_anggota', 'Id Anggota', 'required', [
			'required' => 'Id Anggota Pengembalian Wajib di isi'
		]);
		$this->form_validation->set_rules('tanggal_pengembalian', 'Tanggal Pengembalian', 'required', [
			'required' => 'Tanggal Pengembalian Wajib di isi'
		]);
		$this->form_validation->set_rules('denda', 'Denda', 'required', [
			'required' => 'Denda Pengembalian Wajib di isi'
		]);
		if ($this->form_validation->run() == false) {
			$this->load->view("layout/header", $data);
			$this->load->view("pengembalian/vw_ubah_pengembalian", $data);
			$this->load->view("layout/footer");
		} else {
			$data = [
				'kode_peminjaman' => $this->input->post('kode_peminjaman'),
				'id_buku' => $this->input->post('id_buku'),
				'id_anggota' => $this->input->post('id_anggota'),
				'tanggal_pengembalian' => $this->input->post('tanggal_pengembalian'),
				'denda' => $this->input->post('denda'),
			];
			$id = $this->input->post('id');
            $this->Pengembalian_model->update(['id' => $id], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Pengembalian Berhasil Ubah!</div>');
            redirect('Pengembalian');
		}
	}
	public function detail($id)
	{
		$data['judul'] = "Halaman Detail Pengembalian";
		$data['pengembalian'] = $this->Pengembalian_model->getById($id);
		$this->load->view("Layout/header", $data);
		$this->load->view("pengembalian/vw_detail_pengembalian", $data);
		$this->load->view("Layout/footer");
	}
	public function hapus($id)
	{
        $this->Pengembalian_model->delete($id);
        $error = $this->db->error();
        if ($error['code'] != 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="icon fas fa-info-circle"></i>Data Pengembalian tidak dapat dihapus!</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i class="icon fas fa-check-circle"></i>Data Pengembalian Berhasil Dihapus!</div>');
        }
        redirect('Pengembalian');
    }
}