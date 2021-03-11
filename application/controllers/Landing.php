<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Landing extends CI_Controller

{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['about']      = $this->db->get('about')->row_array();
        $data['skills']     = $this->db->get('about_skills')->result_array();

        $this->load->view('frontend/index', $data);
    }
}