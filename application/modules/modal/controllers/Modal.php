<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Modal extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->model('M_modal');
    }

    // Data
    public function tambahData()
    {
        if ($this->session->userdata('id_akun') == '') {
            redirect('../', 'refresh');
        }

        $this->load->view('tambahData');
    }

    public function ubahData($id_data)
    {
        if ($this->session->userdata('id_akun') == '') {
            redirect('../', 'refresh');
        }
        $model = $this->M_modal;
        $data = array(
            "data" => $model->get_data_by_id($id_data)
        );

        $this->load->view('ubahData', $data);
    }
}

/* End of file Modal.php */
