<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Buku extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Buku_model');
	}
	public function index()
	{
		$data['judul'] = "Halaman Buku";
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['buku'] = $this->Buku_model->get();
		$this->load->view("Layout/header", $data);
		$this->load->view("buku/vw_buku", $data);
		$this->load->view("Layout/footer", $data);
	}
	public function tampilTambah(){
		$this->load->view("layout/header");
		$this->load->view("buku/vw_tambah_buku");
		$this->load->view("layout/footer");
	}
	public function tambah()
	{
		//$data['judul'] = "Halaman Tambah Buku";
		//$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('email')])->row_array();
		//$data['buku'] = $this->Buku_model->get();
		$data = [
			'judul' => $this->input->post('judul'),
			'pengarang' => $this->input->post('pengarang'),
			'kategori' => $this->input->post('kategori'),
			'nama_penerbit' => $this->input->post('nama_penerbit'),
			'tahun_terbit' => $this->input->post('tahun_terbit'),
			'id_buku' => $this->input->post('id_buku'),
			'tgl_pengadaan' => $this->input->post('tgl_pengadaan')
		];
        $upload_image = $_FILES['cover']['name'];
        if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '2048';
            $config['upload_path'] = './assets/img/buku/';
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('cover')) {
                $new_image = $this->upload->data('file_name');
                $this->db->set('cover', $new_image);
            } else {
                echo $this->upload->display_errors();
            }
		}
			$this->Buku_model->insert($data);
			$this->session->set_flashdata('message', '<div class="alert alert-success"
	role="alert">Data Buku Berhasil Ditambah!</div>');
			redirect('Buku');
	}
	public function edit($id)
	{
		$data['judul'] = "Halaman Edit Buku";
		$data['buku'] = $this->Buku_model->getById($id);
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->form_validation->set_rules('nama', 'Nama Buku', 'required', [
			'required' => 'Nama Buku Wajib di isi'
		]);
		$this->form_validation->set_rules('stok', 'Stok', 'required', [
			'required' => 'Jumlah Stok Wajib di isi'
		]);
		$this->form_validation->set_rules('harga', 'Harga', 'required', [
			'required' => 'Harga Buku Wajib di isi'
		]);
		$this->form_validation->set_rules('ukuran', 'Ukuran', 'required', [
			'required' => 'Ukuran Buku Wajib di isi'
		]);
		$this->form_validation->set_rules('keterangan', 'Keterangan', 'required', [
			'required' => 'Keterangan Buku Wajib di isi'
		]);
		if ($this->form_validation->run() == false) {
			$this->load->view("layout/header", $data);
			$this->load->view("buku/vw_ubah_buku", $data);
			$this->load->view("layout/footer");
		} else {
			$data = [
				'nama' => $this->input->post('nama'),
				'stok' => $this->input->post('stok'),
				'harga' => $this->input->post('harga'),
				'ukuran' => $this->input->post('ukuran'),
				'keterangan' => $this->input->post('keterangan'),
			];
            $upload_image = $_FILES['gambar']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/img/buku/';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('gambar', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
			$id = $this->input->post('id');
            $this->Buku_model->update(['id' => $id],$data, $upload_image);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Buku Berhasil Ubah!</div>');
            redirect('Buku');
		}
	}
	public function detail($id)
	{
		$data['judul'] = "Halaman Detail Buku";
		$data['buku'] = $this->Buku_model->getById($id);
		$this->load->view("Layout/header", $data);
		$this->load->view("buku/vw_detail_buku", $data);
		$this->load->view("Layout/footer");
	}
	public function hapus($id)
	{
		$this->Buku_model->delete($id);
        $error = $this->db->error();
        if ($error['code'] != 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
			<i class="icon fas fa-info-circle"></i>Data Buku tidak dapat dihapus!</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			<i class="icon fas fa-check-circle"></i>Data Buku Berhasil Dihapus!</div>');
        }
        redirect('Buku');
    }
}