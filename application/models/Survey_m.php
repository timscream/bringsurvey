<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Survey_m extends CI_Model {

    public $rules = array(
        'input_email_respondent' => array(
            'field' => 'input_email_respondent',
            'label' => 'Correo del participante',
            'rules' => 'trim|required'
        ),
        'select_age_respondent' => array(
            'field' => 'select_age_respondent',
            'label' => 'Edad',
            'rules' => 'trim|required'
        ),
        'select_genere_respondent' => array(
            'field' => 'select_genere_respondent',
            'label' => 'Sexo',
            'rules' => 'trim|required'
        ),
        'select_social_network_respondent' => array(
            'field' => 'select_social_network_respondent',
            'label' => 'Red Social favorita',
            'rules' => 'trim|required'
        ),
        'input_avg_fb' => array(
            'field' => 'input_avg_fb',
            'label' => 'Facebook',
            'rules' => 'trim|required'
        ),
        'input_avg_wa' => array(
            'field' => 'input_avg_wa',
            'label' => 'WhatsApp',
            'rules' => 'trim|required'
        ),
        'input_avg_tw' => array(
            'field' => 'input_avg_tw',
            'label' => 'Twitter',
            'rules' => 'trim|required'
        ),
        'input_avg_ig' => array(
            'field' => 'input_avg_ig',
            'label' => 'Instagram',
            'rules' => 'trim|required'
        ),
        'input_avg_tt' => array(
            'field' => 'input_avg_tt',
            'label' => 'Tiktok',
            'rules' => 'trim|required'
        )
    );

    public function get_count_surveys_completed(){

        return $this->db->count_all('surveys_completed');
    }

    public function get_avg_social_network(){

        $this->db->select('AVG(avg_fb) avg_fb, AVG(avg_wa) avg_wa, AVG(avg_tw) avg_tw, AVG(avg_ig) avg_ig, AVG(avg_tt) avg_tt');
        return $this->db->get('surveys_completed')->row();
    }

    public function get_favorite_social_network(){

        $this->db->select('sn.name_social_network, `favorite_social_network`, count(favorite_social_network) as total');
        $this->db->from('social_network sn, surveys_completed');
        $this->db->where('favorite_social_network=sn.internalid');
        $this->db->group_by('favorite_social_network');
        $this->db->order_by('total', 'DESC');
        $this->db->limit(1);
        return $this->db->get()->row();
    }

    public function get_less_dear_social_network(){

        $this->db->select('sn.name_social_network as less_dear_social_network, `favorite_social_network`, count(favorite_social_network) as total');
        $this->db->from('social_network sn, surveys_completed');
        $this->db->where('favorite_social_network=sn.internalid');
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

        $filter_social_network = new stdClass();

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

    public function save_survey($data){

        $result = $this->db->insert('surveys_completed',$data);

        return $result ? TRUE : FALSE;
    }

    public function get_social_networks(){

        return $this->db->get('social_network')->result();
    }
}

/* End of file survey_m.php */
/* Location: ./application/models/Survey_m.php */