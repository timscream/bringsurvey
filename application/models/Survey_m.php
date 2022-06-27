<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Survey_m extends CI_Model {

    public function get_count_surveys_completed(){

        return $this->db->count_all('surveys_completed');
    }

    public function get_question($question_id){

        $this->db->where('question_id', $question_id);
        return $this->db->get('users')->row();
    }
}

/* End of file Survey_m.php */
/* Location: ./application/models/Survey_m.php */