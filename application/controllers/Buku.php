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
	public function tambah()
	{
		$data['judul'] = "Halaman Tambah Buku";
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		$data['buku'] = $this->Buku_model->get();
		$this->form_validation->set_rules('judul', 'Judul Buku', 'required', [
			'required' => 'Judul Buku Wajib di isi'
		]);
		$this->form_validation->set_rules('pengarang', 'Pengarang Buku', 'required', [
			'required' => 'Pengarang Buku Wajib di isi'
		]);
		$this->form_validation->set_rules('kategori', 'Kategori Buku', 'required', [
			'required' => 'Kategori Buku Wajib di isi'
		]);
		$this->form_validation->set_rules('nama_penerbit', 'Penerbit Buku', 'required', [
			'required' => 'Penerbit Buku Wajib di isi'
		]);
		$this->form_validation->set_rules('tahun_terbit', 'Tahun Terbit', 'required', [
			'required' => 'Tahun Terbit Buku Wajib di isi'
		]);
		$this->form_validation->set_rules('id_buku', 'Nomor ISBN', 'required', [
			'required' => 'Nomor ISBN Wajib di isi'
		]);
		$this->form_validation->set_rules('tgl_pengadaan', 'Pengarang Buku', 'required', [
			'required' => 'Tanggal Pengadaan Buku Wajib di isi'
		]);
		if($this->form_validation->run()==false){
			$this->load->view("layout/header");
			$this->load->view("buku/vw_tambah_buku");
			$this->load->view("layout/footer");
		}else{
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
	}
	public function edit($id)
	{
		$data['judul'] = "Halaman Tambah Buku";
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		$data['buku'] = $this->Buku_model->getById($id);
		$this->form_validation->set_rules('judul', 'Judul Buku', 'required', [
			'required' => 'Judul Buku Wajib di isi'
		]);
		$this->form_validation->set_rules('pengarang', 'Pengarang Buku', 'required', [
			'required' => 'Pengarang Buku Wajib di isi'
		]);
		$this->form_validation->set_rules('kategori', 'Kategori Buku', 'required', [
			'required' => 'Kategori Buku Wajib di isi'
		]);
		$this->form_validation->set_rules('nama_penerbit', 'Penerbit Buku', 'required', [
			'required' => 'Penerbit Buku Wajib di isi'
		]);
		$this->form_validation->set_rules('tahun_terbit', 'Tahun Terbit', 'required', [
			'required' => 'Tahun Terbit Buku Wajib di isi'
		]);
		$this->form_validation->set_rules('id_buku', 'Nomor ISBN', 'required', [
			'required' => 'Nomor ISBN Wajib di isi'
		]);
		$this->form_validation->set_rules('tgl_pengadaan', 'Pengarang Buku', 'required', [
			'required' => 'Tanggal Pengadaan Buku Wajib di isi'
		]);
		if($this->form_validation->run()==false){
			$this->load->view("layout/header");
			$this->load->view("buku/vw_ubah_buku",$data);
			$this->load->view("layout/footer");
		}else{
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
				if($this->upload->do_upload('gambar')){
                    $old_image=$data['prodi']['gambar'];
                    if($old_image!='default.jpg'){
                        unlink(FCPATH . 'assets/img/buku/' . $old_image);
                    }
                    $new_image=$this->upload->data('file_name');
                    $this->db->set('cover',$new_image);
                }else{
                    echo $this->upload->display_errors();
                }
			}
			$id = $this->input->post('id_buku');
            $this->Buku_model->update(['id_buku' => $id],$data, $upload_image);
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