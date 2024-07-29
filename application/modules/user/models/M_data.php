<?php
defined('BASEPATH') or exit('No dirext script access allowed');

class M_data extends CI_Model
{

    function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    function get_data($table)
    {
        return $this->db->get($table);
    }

    function insert_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    function delete_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    function show_user()
    {
        $result = $this->db->query("SELECT a.*,b.`nama_role`
        FROM tbl_user AS a
        LEFT JOIN ROLE AS b ON a.`role_id`=b.id_role;");
        return $result;
    }
    function show_anggota() {
        $this->db->select('*');
        $this->db->from('anggota');
        // Jika Anda ingin tetap menampilkan anggota yang tidak aktif
        // Anda bisa menghilangkan filter status_anggota di sini
        // $this->db->where('status_anggota', '1'); // Hapus atau sesuaikan jika ingin menampilkan semua anggota
        $query = $this->db->get();
        return $query;
    }
    function show_anggota_verifikasi()
    {
        $result = $this->db->query("SELECT*FROM anggota where status_anggota='2' and jns_anggota='1' ");
        return $result;
    }

    function show_anggota_prodi()
    {
        $result = $this->db->query("SELECT*FROM anggota where status_anggota='1' and jns_anggota='2'");
        return $result;
    }

    function show_anggota_prodi_verifikasi()
    {
        $result = $this->db->query("SELECT*FROM anggota where status_anggota='2' and jns_anggota='2'");
        return $result;
    }

    function show_prodi()
    {
        $result = $this->db->query("SELECT a.*, b.nama_user
        FROM prodi AS a
        LEFT JOIN tbl_user AS b ON a.id_user=b.id_user ");
        return $result;
    }

    function show_artikel()
    {
        // Query untuk memilih artikel dengan status_artikel = 1
        $result = $this->db->query("SELECT a.*, b.nama_kategori, c.nama_user
            FROM artikel AS a
            LEFT JOIN tbl_kategori AS b ON a.id_kategori = b.id_kategori 
            LEFT JOIN tbl_user AS c ON a.id_user = c.id_user
           
        ");
        return $result;
    }
    
    
}