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
    function pengguna_dashbord()
    {
        $id_admin = $this->session->userdata('idadmin');
        $hsl = $this->db->query("SELECT * FROM tbl_pengguna WHERE pengguna_id='$id_admin'");
        return $hsl;
    }
    function hapus_slider($kode)
    {
        $hsl = $this->db->query("DELETE FROM tbl_slider where id_slider='$kode'");
        return $hsl;
    }

    function get_slider()
    {
        $hsl = $this->db->query("SELECT * FROM tbl_slider");
        return $hsl;
    }
    function hapus_image_berita($kode)
    {
        $hsl = $this->db->query("DELETE FROM tbl_post where post_id='$kode'");
        return $hsl;
    }
    function hapus_image_event($kode)
    {
        $hsl = $this->db->query("DELETE FROM tbl_post_agenda where post_id='$kode'");
        return $hsl;
    }

    function get_data_berita()
    {
        $this->db->select('tbl_post.*, tbl_category.*,tbl_pengguna.*');
        $this->db->from('tbl_post');
        $this->db->join('tbl_pengguna', 'post_user_id=pengguna_id', 'left');
        $this->db->join('tbl_category', 'post_category_id=category_id', 'left');
        $this->db->order_by('post_id', 'DESC');
        $query = $this->db->get();
        return $query;
    }
    function get_post_by_id($post_id)
    {
        $result = $this->db->query("SELECT * FROM tbl_post WHERE post_id='$post_id'");
        return $result;
    }
    function get_data_event()
    {
        $this->db->select('tbl_post_agenda.*,tbl_pengguna.*');
        $this->db->from('tbl_post_agenda');
        $this->db->join('tbl_pengguna', 'post_user_id=pengguna_id', 'left');
        $this->db->order_by('post_id', 'DESC');
        $query = $this->db->get();
        return $query;
    }

    function get_event_by_id($post_id)
    {
        $result = $this->db->query("SELECT * FROM tbl_post_agenda WHERE post_id='$post_id'");
        return $result;
    }


    function get_data_video()
    {
        $this->db->select('tbl_post_video.*, tbl_category_video.*,tbl_pengguna.*');
        $this->db->from('tbl_post_video');
        $this->db->join('tbl_pengguna', 'post_user_id=pengguna_id', 'left');
        $this->db->join('tbl_category_video', 'post_category_id=category_id', 'left');
        $this->db->order_by('post_id', 'DESC');
        $query = $this->db->get();
        return $query;
    }


    function get_video_by_id($post_id)
    {
        $result = $this->db->query("SELECT * FROM tbl_post_video WHERE post_id='$post_id'");
        return $result;
    }



    function get_data_live()
    {
        $this->db->select('tbl_post_live.*,tbl_pengguna.*');
        $this->db->from('tbl_post_live');
        $this->db->join('tbl_pengguna', 'post_user_id=pengguna_id', 'left');
        $this->db->order_by('post_id', 'DESC');
        $query = $this->db->get();
        return $query;
    }

}