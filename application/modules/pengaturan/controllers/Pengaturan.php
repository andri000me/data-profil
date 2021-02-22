<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pengaturan extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->model('M_pengaturan');
    }

    public function index()
    {
        redirect("../");
    }

    public function data()
    {
        if ($this->session->userdata("id_akun") == "") {
            redirect("../");
        }

        $model = $this->M_pengaturan;

        $data = array(
            "data" => $model->get_all_data(),
        );

        $this->template("dashboard_data", $data);
    }


    // CRUD
    public function tambahData()
    {
        if ($this->session->userdata("id_akun") == "") {
            redirect("../");
        }

        $model = $this->M_pengaturan;
        $post = $this->input->post();

        $hasil = $model->save($post);

        if ($hasil['res']) {
            $this->session->set_flashdata('sukses', $hasil['msg']);
        } else {
            $this->session->set_flashdata('gagal', $hasil['msg']);
        }

        redirect("../pengaturan/data");
    }

    public function ubahData($id_data)
    {
        if ($this->session->userdata("id_akun") == "") {
            redirect("../");
        }

        $model = $this->M_pengaturan;
        $post = $this->input->post();

        $hasil = $model->edit($post, $id_data);

        if ($hasil['res']) {
            $this->session->set_flashdata('sukses', $hasil['msg']);
        } else {
            $this->session->set_flashdata('gagal', $hasil['msg']);
        }

        redirect("../pengaturan/data");
    }

    public function hapusData($id_data)
    {
        if ($this->session->userdata("id_akun") == "") {
            redirect("../");
        }

        $model = $this->M_pengaturan;

        $hasil = $model->hapus($id_data);

        if ($hasil['res']) {
            $this->session->set_flashdata('sukses', $hasil['msg']);
        } else {
            $this->session->set_flashdata('gagal', $hasil['msg']);
        }

        redirect("../pengaturan/data");
    }
}

/* End of file Pengaturan.php */
