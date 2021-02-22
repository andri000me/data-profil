<?php


defined('BASEPATH') or exit('No direct script access allowed');

class M_login extends CI_Model
{

    public function auth($akun, $sandi)
    {
        $data = $this->db->get_where("tb_akun", ["akun" => $akun, "sandi" => $sandi])->row();

        return $data;
    }
}

/* End of file M_login.php */
