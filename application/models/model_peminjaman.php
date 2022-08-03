<?php
defined('BASEPATH') or exit('No direct script access
allowed');
class model_peminjaman extends CI_Model
{
    public $table = 'peminjaman';
    public $id = 'peminjaman.kode_peminjaman';
    public function __construct()
    {
        parent::__construct();
    }
    public function getById($id)
    {  
        $this->db->select('*');
        $this->db->from('peminjaman m');
        $this->db->join('anggota p', 'm.id_anggota = p.id_anggota');
        $this->db->join('buku b', 'm.id_buku = b.id_buku');
        $this->db->where('m.kode_peminjaman', $id);
        $query = $this->db->get();
        return $query->row_array();
    }
    public function get($id)
    {
        $this->db->select('*');
        $this->db->from('peminjaman m');
        $this->db->join('anggota p', 'm.id_anggota = p.id_anggota');
        $this->db->join('buku b', 'm.id_buku = b.id_buku');
        $this->db->where('m.id_anggota', $id);
        $query = $this->db->get();
        return $query->row_array();
    }
}