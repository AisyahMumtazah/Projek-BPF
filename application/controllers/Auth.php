<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Auth extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('User_model','userrole');
        $this->load->model('Anggota_model');
    }
    function index(){
        if ($this->session->userdata('username')) {
            redirect('Buku');
        }
        $this->form_validation->set_rules('username', 'Username', 
            'trim|required|valid_username', [
            'valid_username' => 'Username tidak terdaftar',
            'required' => 'Username Wajib di isi' ]);
        $this->form_validation->set_rules('password', 'Password', 
            'trim|required', ['required' => 'Password Wajib di isi']);
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/auth_header");
            $this->load->view("auth/login");
            $this->load->view("layout/auth_footer");
        } else {
            $this->cek_login();
        }
    }
    function registrasi(){
        if ($this->session->userdata('username')) {
            redirect('Buku');
        }
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 
            'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'Email ini sudah terdaftar!',
            'valid_email' => 'Email Harus Valid',
            'required' => 'Email Wajib di isi']);
        $this->form_validation->set_rules('username','Username',
            'required|trim|valid_username|is_unique[user.username]',[
            'is_unique' => 'Username ini sudah terdaftar!',
            'valid_email' => 'Username Harus Valid',
            'required' => 'Username Wajib di isi']);
        $this->form_validation->set_rules('no_telp','No_telp',
            'required|trim|valid_no_telp|is_unique[anggota.no_telp_anggota]',[
            'is_unique' => 'Username ini sudah terdaftar!',
            'valid_email' => 'Username Harus Valid',
            'required' => 'Username Wajib di isi']);
        $this->form_validation->set_rules('password1','Password',
            'required|trim|min_length[5]|matches[password2]',[
            'matches' => 'Password Tidak Sama',
            'min_length' => 'Password Terlalu Pendek',
            'required' => 'Password harus diisi']);
         $this->form_validation->set_rules('password2', 'Password', 
         'required|trim|matches[password1]');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Registration';
            $this->load->view('layout/auth_header', $data);
            $this->load->view('auth/registrasi');
            $this->load->view('layout/auth_footer');
        } else {
            $tbl_user = [
                'username' => htmlspecialchars($this->input->post('username', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT)
            ];
            $tbl_anggota=[
                'nama_anggota' => htmlspecialchars($this->input->post('nama', true)),
                'email_anggota' => htmlspecialchars($this->input->post('email', true)),
                'no_telp_anggota' => htmlspecialchars($this->input->post('no_telp',true))
            ];
        $this->userrole->insert($tbl_user);
        $this->Anggota_model->insert($tbl_anggota);
        $this->session->set_flashdata('message', '<div class="alert 
            alert-success" role="alert">Selamat! Akunmu telah berhasil 
            terdaftar, Silahkan Login! </div>');
            redirect('Auth');
        }
    }
    function cek_login(){
        $username=$this->input->post('username');
        $password=$this->input->post('password');
        $user=$this->db->get_where('user',['username'=>$username])->row_array();
        if($user){
            if(password_verify($password,$user['password'])){
                $data=[
                    'username'=>$user['username'],
                    'role'=>$user['role'],
                    'id'=>$user['id']
                ];
                $this->session->set_userdata($data);
                if($user['role'=='admin']){
                    redirect('Buku');
                }else{
                    redirect('User');
                }
            }else{
                $this->session->set_flashdata('message','<div class="alert 
                alert-danger" role="alert">Password Salah!</div>');
                redirect('Auth');
            }
        }else{
            $this->session->set_flashdata('message','<div class="alert 
            alert-danger" role="alert">Email Belum Terdaftar!</div>');
                redirect('Auth');
        }
    }
    function logout(){
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('role');
        $this->session->set_flashdata('message','<div class="alert alert-success" 
        role="alert">Berhasil Logout!</div>');
        redirect('Auth');
    }
}