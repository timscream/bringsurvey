<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Survey extends CI_Controller {

    public function index(){

        $data['subview'] = 'index';
        $this->load->view('_survey_layout', $data);
    }
}

/* End of file survey.php */
/* Location: ./application/controllers/Survey.php */