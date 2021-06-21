<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Landing extends CI_Controller

{
    public function index()
    {
        $data['about']      = $this->db->get('about')->row_array();
        $data['skills']     = $this->db->get('about_skills')->result_array();

        $this->db->order_by('position', 'ASC');
        $data['categories'] = $this->db->get('about_skills_category')->result_array();

        $this->db->order_by('start', 'DESC');
        $data['educations'] = $this->db->get('about_education')->result_array();

        $this->db->order_by('start', 'DESC');
        $data['experiences'] = $this->db->get('about_experience')->result_array();

        $this->load->view('frontend/index', $data);
    }
}