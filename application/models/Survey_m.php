<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Survey_m extends CI_Model {

    public function get_count_surveys_completed(){

        return $this->db->count_all('surveys_completed');
    }

    public function get_avg_social_network($question_id){

        $this->db->select('AVG(avg_fb) avg_fb, AVG(avg_wa) avg_wa, AVG(avg_tw) avg_tw, AVG(avg_ig) avg_ig, AVG(avg_tt) avg_tt');
        return $this->db->get('surveys_completed')->row();
    }
}

/* End of file Survey_m.php */
/* Location: ./application/models/Survey_m.php */