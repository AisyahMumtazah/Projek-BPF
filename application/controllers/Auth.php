<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Auth extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('User_model','userrole');
        $this->load->model('Anggota_model');
    }
    function index(){
        if($this->session->userdata('username')){
            if($this->session->userdata('role') =='admin'){
                redirect('Welcome');
            }else{
                redirect('User');
            }
        }
        $this->form_validation->set_rules('username', 'Username', 
            'trim|required', [
            'required' => 'Username Wajib di isi'
            ]);
        $this->form_validation->set_rules('password', 'Password', 
            'trim|required', [
            'required' => 'Password Wajib di isi'
            ]);
        if($this->form_validation->run()==false){
            $this->load->view("layout/auth_header");
            $this->load->view("auth/login");
            $this->load->view("layout/auth_footer");
        }else{
            $this->cek_login();
        }
    }
    function registrasi(){
        if ($this->session->userdata('username')) {
            if($this->session->userdata('role') =='admin'){
                redirect('Welcome');
            }else{
                redirect('User');
            }
        }
        $this->form_validation->set_rules('nama_anggota', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email_anggota', 'Email', 
            'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'Email ini sudah terdaftar!',
            'valid_email' => 'Email Harus Valid',
            'required' => 'Email Wajib di isi'
            ]);
        $this->form_validation->set_rules('username', 'Username', 
            'required|trim|valid_username|is_unique[user.username]', [
            'is_unique' => 'Username ini sudah terdaftar!',
            'valid_username' => 'Username Harus Valid',
            'required' => 'Username Wajib di isi'
            ]);
        $this->form_validation->set_rules('no_telp_anggota', 'No Telp', 'required|trim');
        $this->form_validation->set_rules(
            'password','Password',
            'required|trim|min_length[5]|matches[password2]',
            [
            'matches' => 'Password Tidak Sama',
            'min_length' => 'Password Terlalu Pendek',
            'required' => 'Password harus diisi'
            ]
            );
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');
        if($this->form_validation->run()==false){
            $this->load->view('layout/auth_header');
            $this->load->view('auth/registrasi');
            $this->load->view('layout/auth_footer');
        }else{
            $tbl_user = [
                'username' => htmlspecialchars($this->input->post('username', true)),
                'email' => htmlspecialchars($this->input->post('email_anggota', true)),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT)
            ];
            $tbl_anggota=[
                'nama_anggota' => htmlspecialchars($this->input->post('nama_anggota', true)),
                'email_anggota' => htmlspecialchars($this->input->post('email_anggota', true)),
                'no_telp_anggota' => htmlspecialchars($this->input->post('no_telp_anggota',true))
            ];
            $this->User_model->insert($tbl_user);
            $this->Anggota_model->insert($tbl_anggota);
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
                    'id'=>$user['uid']
                ];
                $this->session->set_userdata($data);
                if($user['role'] =='admin'){
                    redirect('Welcome');
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
            alert-danger" role="alert">Username Belum Terdaftar!</div>');
                redirect('Auth');
        }
    }
    
}