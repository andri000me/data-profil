<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_modal extends CI_Model
{

    public function get_data_by_id($id_data)
    {
        $data = $this->db->get_where("tb_data", ["id_data" => $id_data])->row();

        return $data;
    }
}

/* End of file M_modal.php */
