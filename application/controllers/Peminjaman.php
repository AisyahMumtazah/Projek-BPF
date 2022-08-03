<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Peminjaman extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Peminjaman_model');
    }
    public function index()
    {
        $data['judul'] = "Halaman Peminjaman";
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['peminjaman'] = $this->Peminjaman_model->get();
        $this->load->view("Layout/header", $data);
        $this->load->view("peminjaman/vw_peminjaman", $data);
        $this->load->view("Layout/footer", $data);
    }
    public function tambah()
    {
        $data['judul'] = "Halaman Tambah Peminjaman";
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['peminjaman'] = $this->Peminjaman_model->get();
        $this->form_validation->set_rules('id_anggota', 'ID Anggota', 'required', [
            'required' => 'ID Anggota Wajib di isi'
        ]);
        $this->form_validation->set_rules('id_buku', 'ID Buku', 'required', [
            'required' => 'ID Buku Wajib di isi'
        ]);
        $this->form_validation->set_rules('tanggal_pinjam', 'Tanggal Pinjam', 'required', [
            'required' => 'Tanggal Pinjam  Wajib di isi'
        ]);
        $this->form_validation->set_rules('tanggal_kembali', 'Tanggal Kembali', 'required', [
            'required' => 'Tanggal Kembali Wajib di isi'
        ]);
        
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header");
            $this->load->view("peminjaman/vw_tambah_peminjaman",$data);
            $this->load->view("layout/footer");
        } else {
            $data = [
                'id_anggota' => $this->input->post('id_anggota'),
                'id_buku' => $this->input->post('id_buku'),
                'tanggal_pinjam' => $this->input->post('tanggal_pinjam'),
                'tanggal_kembali' => $this->input->post('tanggal_kembali'),
            ];

            $this->Peminjaman_model->insert($data);
				$this->session->set_flashdata('message', '<div class="alert alert-success"
		role="alert">Data Peminjaman Berhasil Ditambah!</div>');
				redirect('Peminjaman');
        }
    }
    public function edit($id)
    {
        $data['judul'] = "Halaman Edit Peminjaman";
		$data['peminjaman'] = $this->Peminjaman_model->getById($id);
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		$this->form_validation->set_rules('id_anggota', 'ID Anggota', 'required', [
            'required' => 'ID Anggota Wajib di isi'
        ]);
        $this->form_validation->set_rules('id_buku', 'ID Buku', 'required', [
            'required' => 'ID Buku Wajib di isi'
        ]);
        $this->form_validation->set_rules('tanggal_pinjam', 'Tanggal Pinjam', 'required', [
            'required' => 'Tanggal Pinjam  Wajib di isi'
        ]);
        $this->form_validation->set_rules('tanggal_kembali', 'Tanggal Kembali', 'required', [
            'required' => 'Tanggal Kembali Wajib di isi'
        ]);
		if ($this->form_validation->run() == false) {
			$this->load->view("layout/header", $data);
			$this->load->view("peminjaman/vw_ubah_peminjaman", $data);
			$this->load->view("layout/footer");
		} else {
			$data = [
				'id_anggota' => $this->input->post('id_anggota'),
                'id_buku' => $this->input->post('id_buku'),
                'tanggal_pinjam' => $this->input->post('tanggal_pinjam'),
                'tanggal_kembali' => $this->input->post('tanggal_kembali'),
			];

			$id = $this->input->post('kode_peminjaman');
            $this->Peminjaman_model->update(['kode_peminjaman' => $id],$data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Peminjaman Berhasil di Ubah!</div>');
            redirect('Peminjaman');
		}
    }


    public function detail($id)
    {
        $data['judul'] = "Halaman Detail Peminjaman";
		$data['peminjaman'] = $this->Peminjaman_model->getById($id);
		$this->load->view("Layout/header", $data);
		$this->load->view("peminjaman/vw_detail_peminjaman", $data);
		$this->load->view("Layout/footer");
    }
    public function hapus($id)
    {
        $this->Peminjaman_model->delete($id);
        $error = $this->db->error();
        if ($error['code'] != 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="icon fas fa-info-circle"></i>Data Peminjaman tidak dapat dihapus!</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i class="icon fas fa-check-circle"></i>Data Peminjaman Berhasil Dihapus!</div>');
        }
        redirect('Peminjaman');
    }
}
