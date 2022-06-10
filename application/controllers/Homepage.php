<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Homepage extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mdl_homepage');
        $this->load->library(array('form_validation', 'session', 'pagination', 'encryption'));
    }

    public function index()
    {
        $model = $this->Mdl_homepage;
        $data = array(
            "kebudayaans" => $model->lastestpost(),
            "model" => $model
        );
        $this->load->view('homepage', $data);
    }
}
