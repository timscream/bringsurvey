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

        $data['social_networks'] = $this->survey_m->get_social_networks();
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

    public function add(){

        $rules = $this->survey_m->rules;
        $this->form_validation->set_rules($rules);

        if($this->form_validation->run() == TRUE){

            $survey_data_form = [
                'email_respondent' => $this->input->post('input_email_respondent'),
                'age' => $this->input->post('select_age_respondent'),
                'gender' => $this->input->post('select_genere_respondent'),
                'favorite_social_network' => $this->input->post('select_social_network_respondent'),
                'avg_fb' => $this->input->post('input_avg_fb'),
                'avg_wa' => $this->input->post('input_avg_wa'),
                'avg_tw' => $this->input->post('input_avg_tw'),
                'avg_ig' => $this->input->post('input_avg_ig'),
                'avg_tt' => $this->input->post('input_avg_tt')
            ];

            $this->survey_m->save_survey($survey_data_form);
            redirect('survey/final', 'refresh');
        }

        redirect('index.php', 'refresh');
    }
}

/* End of file survey.php */
/* Location: ./application/controllers/Survey.php */