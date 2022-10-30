<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Organizational extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('menu_model');
        $this->load->model('team_model');
    }

    public function index()
    {
        $data['country_lists'] = $this->menu_model->get_country();
        $this->load->view('about/organizational', $data);
    }
}
