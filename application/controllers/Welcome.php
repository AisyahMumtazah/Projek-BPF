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
	public function index()
	{
		$this->load->view('layout/header.php');
		$this->load->view('blank.php');
		$this->load->view('layout/footer.php');
	}
	public function login()
	{
		$this->load->view('layout/auth_header.php');
		$this->load->view('auth/login.php');
		$this->load->view('layout/auth_footer.php');
	}
	public function registrasi()
	{
		$this->load->view('layout/auth_header.php');
		$this->load->view('auth/registrasi.php');
		$this->load->view('layout/auth_footer.php');
	}
	public function dashboard()
	{
		$this->load->view('layout/header.php');
		$this->load->view('admin/vw_dashboard.php');
		$this->load->view('layout/footer.php');
	}
	public function anggota()
	{
		$this->load->view('layout/header.php');
		$this->load->view('admin/vw_anggota.php');
		$this->load->view('layout/footer.php');
	}
	public function buku()
	{
		$this->load->view('layout/header.php');
		$this->load->view('admin/vw_buku.php');
		$this->load->view('layout/footer.php');
	}
	public function peminjaman()
	{
		$this->load->view('layout/header.php');
		$this->load->view('admin/vw_peminjaman.php');
		$this->load->view('layout/footer.php');
	}
	public function daftarpengembalian()
	{
		$this->load->view('layout/header.php');
		$this->load->view('admin/vw_daftar_pengembalian.php');
		$this->load->view('layout/footer.php');
	}
	public function formpengembalian()
	{
		$this->load->view('layout/header.php');
		$this->load->view('admin/vw_form_pengembalian.php');
		$this->load->view('layout/footer.php');
	}
	public function tambahBuku()
	{
		$this->load->view('layout/header.php');
		$this->load->view('admin/vw_tambah_buku.php');
		$this->load->view('layout/footer.php');
	}
	public function tambahPeminjaman()
	{
		$this->load->view('layout/header.php');
		$this->load->view('admin/vw_tambah_peminjaman.php');
		$this->load->view('layout/footer.php');
	}
	public function listbukuUser()
	{
		$this->load->view('layout/header_user.php');
		$this->load->view('user/vw_list_buku.php');
		$this->load->view('layout/footer.php');
	}
	public function riwayatpeminjaman()
	{
		$this->load->view('layout/header_user.php');
		$this->load->view('user/vw_riwayat_peminjaman.php');
		$this->load->view('layout/footer.php');
	}
}
