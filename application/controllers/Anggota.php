<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Anggota extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Anggota_model');
	}

	public function index()
	{
		$data['judul'] = "Halaman Anggota";
		$data['anggota'] = $this->Anggota_model->get();
		//$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view("layout/header", $data);
		$this->load->view("jurusan/vw_jurusan", $data);
		$this->load->view("layout/footer");
	}

	public function hapus($id)
	{
		$this->Anggota_model->delete($id);
		$error = $this->db->error();
		if ($error['code'] != 0) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="icon fas fa-info-circle"></i>Data Anggiota tidak dapat dihapus (sudah berelasi)!</div>');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i class="icon fas fa-check-circle"></i>Data Anggota Berhasil Dihapus!</div>');
		}
		redirect('Anggota');
	}

	function edit($id)
	{
		$data['judul'] = "Halaman Edit Anggota";
		$data['anggota'] = $this->Jurusan_model->getById($id);
		//$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->form_validation->set_rules('nama', 'Nama Jurusan', 'required', [
			'required' => 'Nama Jurusan Wajib di isi'
		]);
		$this->form_validation->set_rules('singkatan', 'Singkatan', 'required', [
			'required' => 'Singkatan Wajib di isi'
		]);
		$this->form_validation->set_rules('kajur',  'Kajur', 'required', [
			'required' => 'Kajur Wajib di isi'
		]);
		if ($this->form_validation->run() == false) {
			$this->load->view("layout/header", $data);
			$this->load->view("jurusan/vw_ubah_jurusan", $data);
			$this->load->view("layout/footer");
		} else {
			$data = [
				'nama' => $this->input->post('nama'),
				'singkatan' => $this->input->post('singkatan'),
				'kajur' => $this->input->post('kajur'),
			];
			$id = $this->input->post('id');
			$this->Jurusan_model->update(['id' => $id], $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Dosen Berhasil Diubah!</div>');
			redirect('Jurusan');
		}
	}
}
