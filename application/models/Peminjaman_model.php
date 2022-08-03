<?php
defined('BASEPATH') or exit('No direct script access
allowed');
class Peminjaman_model extends CI_Model
{
    public $table = 'peminjaman';
    public $id = 'peminjaman.kode_peminjaman';
    public function __construct()
    {
        parent::__construct();
    }
    public function get()
    {
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query->result_array();
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
    public function update($where, $data)
    {
        $this->db->update($this->table, $data, $where);
        return $this->db->affected_rows();
    }
    public function insert($data)
    {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }
    public function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
        return $this->db->affected_rows();
    }
    public function total(){
        $this->db->from($this->table);
        $query=$this->db->get();
        return $query->num_rows();
    }
    public function getPop(){
        $this->db->select('count(p.id_buku) as id_buku,b.judul as judul,b.pengarang as pengarang,b.cover as cover');
        $this->db->from('peminjaman p');
        $this->db->join('buku b','p.id_buku=b.id_buku');
        $this->db->group_by('p.id_buku');
        $this->db->order_by('id_buku',"DESC");
        $this->db->limit(3);
        $query = $this->db->get();
        return $query->result_array();
    }
}
