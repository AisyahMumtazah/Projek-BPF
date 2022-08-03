<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Auth extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('User_model');
        $this->load->model('Anggota_model');
    }
    function index(){
        $this->load->view("layout/auth_header");
        $this->load->view("auth/login");
        $this->load->view("layout/auth_footer");
    }
    function registrasi(){
        $data['title'] = 'Registration';
        $this->load->view('layout/auth_header', $data);
        $this->load->view('auth/registrasi');
        $this->load->view('layout/auth_footer');
    }
    function cek_regis(){
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
                if($user['role'=='admin']){
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