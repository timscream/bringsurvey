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

    public function get_most_used_social_network_by_age_range(){

        $this->db->select('sn.name_social_network, `favorite_social_network`, COUNT(`favorite_social_network`) as total, age');
        $this->db->from('social_network sn, surveys_completed');
        $this->db->where('favorite_social_network=sn.internalid');
        $this->db->group_by('favorite_social_network, age');
        $this->db->order_by('favorite_social_network, total', 'DESC');

        $filter_result = $this->filter_most_used_social_network_by_age_range( $this->db->get()->result() );

        return $filter_result;
    }

    protected function filter_most_used_social_network_by_age_range($array_result){

        static $filter_social_network = new stdClass();

        foreach ($array_result as $key => $value) {

            if (!property_exists($filter_social_network, $value->favorite_social_network)) {
                
                $filter_social_network->{$value->favorite_social_network} = array(
                    'name_social_network' => $value->name_social_network,
                    'age_range' => $value->age,
                    'total' => $value->total
                );
            }
        }

        return $filter_social_network;
    }
}

/* End of file survey_m.php */
/* Location: ./application/models/Survey_m.php */