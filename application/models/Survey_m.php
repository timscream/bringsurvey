<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Survey_m extends CI_Model {

    public function get_count_surveys(){

        return $this->db->count_all('surveys_completed');
    }
}

/* End of file Survey_m.php */
/* Location: ./application/models/Survey_m.php */