<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Survey extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('survey_m');
    }

    public function index(){

        $data['count_surveys_completed'] = $this-survey_m->get_count_surveys_completed();
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
}

/* End of file survey.php */
/* Location: ./application/controllers/Survey.php */