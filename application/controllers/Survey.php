<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Survey extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('survey_m');
    }

    public function index(){

        $data['subview'] = 'index';
        $this->load->view('_survey_layout', $data);
    }

    public function question(){

        $data['subview'] = 'question';
        $this->load->view('_survey_layout', $data);
    }

    public function final(){

        $data['subview'] = 'final';
        $this->load->view('_survey_layout', $data);
    }

    public function survey_results(){

        $data['count_surveys_completed'] = $this->survey_m->get_count_surveys_completed();
        $data['get_avg_social_network'] = $this->survey_m->get_avg_social_network();
        $data['get_favorite_social_network'] = $this->survey_m->get_favorite_social_network();
        $data['get_less_dear_social_network'] = $this->survey_m->get_less_dear_social_network();
        $data['get_most_used_social_network_by_age_range'] = $this->survey_m->get_most_used_social_network_by_age_range();
        $data['subview'] = 'survey_results';
        $this->load->view('_survey_layout', $data);
    }

    public function process(){

        $email_respondent = $this->input->post('input_email_respondent');
        $age_respondent = $this->select->post('select_age_respondent');
        $genere_respondent = $this->select->post('select_genere_respondent');
        $social_network_respondent = $this->select->post('select_favorite_social_network_respondent');
        $avg_time_fb = $this->input->post('input_avg_time_fb');
        $avg_time_wa = $this->input->post('input_avg_time_wa');
        $avg_time_tw = $this->input->post('input_avg_time_tw');
        $avg_time_tw = $this->input->post('input_avg_time_ig');
        $avg_time_tw = $this->input->post('input_avg_time_tt');
    }
}

/* End of file survey.php */
/* Location: ./application/controllers/Survey.php */