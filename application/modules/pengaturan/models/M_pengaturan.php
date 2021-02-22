<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_pengaturan extends CI_Model
{

    public function get_all_data()
    {
        $data = $this->db->get("tb_data")->result();

        return $data;
    }

    public function get_all_aktifitas()
    {
        $this->db->order_by("created_at", "DESC");
        $data = $this->db->get("tb_aktifitas")->result();

        return $data;
    }

    // CRUD
    public function save($post)
    {
        if ($post["nama_data"] == "") {
            return array("res" => 0, "msg" => "Nama Data harus diisi.");
        }

        if ($post["alias"] == "") {
            return array("res" => 0, "msg" => "Nama Alias harus diisi.");
        }

        $data = array(
            "nama_data" => $post["nama_data"],
            "alias" => $post["alias"],
        );

        $hsl = $this->db->insert("tb_data", $data);
        if ($hsl) {
            return array("res" => 1, "msg" => "Data Berhasil Disimpan.");
        } else {
            return array("res" => 1, "msg" => "Data Gagal Disimpan.");
        }
    }

    public function edit($post, $id_data)
    {
        if ($post["nama_data"] == "") {
            return array("res" => 0, "msg" => "Nama Data harus diisi.");
        }

        if ($post["alias"] == "") {
            return array("res" => 0, "msg" => "Nama Alias harus diisi.");
        }

        $where = array(
            "id_data" => $id_data
        );

        $data = array(
            "nama_data" => $post["nama_data"],
            "alias" => $post["alias"],
        );

        $hsl = $this->db->update("tb_data", $data, $where);
        if ($hsl) {
            return array("res" => 1, "msg" => "Data Berhasil Disimpan.");
        } else {
            return array("res" => 1, "msg" => "Data Gagal Disimpan.");
        }
    }

    public function hapus($id_data)
    {
        $where = array(
            "id_data" => $id_data
        );

        $hsl = $this->db->delete("tb_data", $where);
        if ($hsl) {
            return array("res" => 1, "msg" => "Data Berhasil Dihapus.");
        } else {
            return array("res" => 1, "msg" => "Data Gagal Dihapus.");
        }
    }
}

/* End of file M_pengaturan.php */
