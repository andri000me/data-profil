<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Logout extends MY_Controller
{

    public function index()
    {
        if ($this->session->userdata("id_akun") != '') {
            $this->session->unset_userdata('id_akun');
            $this->session->unset_userdata('akun');
        }

        redirect("../");
    }
}

/* End of file Logout.php */
