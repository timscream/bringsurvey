<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Survey_m extends CI_Model {

    public function get_count_surveys_completed(){

        return $this->db->count_all('surveys_completed');
    }

    public function get_avg_social_network(){

        $this->db->select('AVG(avg_fb) avg_fb, AVG(avg_wa) avg_wa, AVG(avg_tw) avg_tw, AVG(avg_ig) avg_ig, AVG(avg_tt) avg_tt');
        return $this->db->get('surveys_completed')->row();
    }

    public function get_favorite_social_network(){

        $this->db->select('`favorite_social_network`, count(favorite_social_network) as total');
        $this->db->from('surveys_completed');
        $this->db->group_by('favorite_social_network');
        $this->db->order_by('total', 'DESC');
        $this->db->limit(1);
        return $this->db->get()->row();
    }

    public function get_less_dear_social_network(){

        $this->db->select('`favorite_social_network` as less_dear_social_network, count(favorite_social_network) as total');
        $this->db->from('surveys_completed');
        $this->db->group_by('favorite_social_network');
        $this->db->order_by('total', 'ASC');
        $this->db->limit(1);
        return $this->db->get()->row();
    }
}

/* End of file survey_m.php */
/* Location: ./application/models/Survey_m.php */