<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['title']  = 'About';
        $data['user']   = $this->database->getUser();
        $data['about']  = $this->db->get('about')->row_array();
        $data['skills'] = $this->db->get('about_skills')->result_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('backend/about/index', $data);
        $this->load->view('template/footer');
    }

    public function aboutPic()
    {
        $data = $this->input->post('image');
        list($type, $data) = explode(';', $data);
        list(, $data)      = explode(',', $data);
        $data = base64_decode($data);
        $imageName = 'about-pic.png';
        file_put_contents('assets/img/' . $imageName, $data);

        $this->session->set_flashdata(
            'message',
            'Your profile has been updated!'
        );
    }

    public function about()
    {
        $this->form_validation->set_rules('name', 'Nama', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {

            $name       = $this->input->POST('name');
            $email       = $this->input->POST('email');
            $description       = $this->input->POST('description');
            $address       = $this->input->POST('address');
            $gmaps       = $this->input->POST('gmaps');
            $telp       = $this->input->POST('telp');
            $github       = $this->input->POST('github');
            $facebook       = $this->input->POST('facebook');
            $instagram       = $this->input->POST('instagram');
            $twitter       = $this->input->POST('twitter');
            $pinterest       = $this->input->POST('pinterest');
            $linkedin       = $this->input->POST('linkedin');

            $data = [
                'name'  => $name,
                'email'  => $email,
                'description'  => $description,
                'address'  => $address,
                'gmaps'  => $gmaps,
                'telp'  => $telp,
                'github'  => $github,
                'facebook'  => $facebook,
                'instagram'  => $instagram,
                'twitter'  => $twitter,
                'pinterest'  => $pinterest,
                'linkedin'  => $linkedin,
            ];

            $about = $this->db->get_where('about', ['id' => 1])->row_array();

            if ($about) {
                $this->database->update($data, 1, 'about');

                redirect('about');
            } else {
                $this->db->truncate('about');
                $this->db->insert('about', $data);

                redirect('about');
            }

        }
    }

    public function skill()
    {
        $this->form_validation->set_rules('skill', 'Skill', 'required');
        $this->form_validation->set_rules('percentage', 'Persentase', 'required');
        
        if ($this->form_validation->run() == false) {
            $this->index();
        } else {
            $skill = $this->input->POST('skill');
            $percentage = $this->input->POST('percentage');

            $data = [
                'skill' => $skill,
                'percentage' => $percentage
            ];

            $result = $this->db->insert('about_skills', $data);

            if ($result) {
                $this->session->set_flashdata('message', 'Data berhasil ditambahkan');

                redirect('about');
            } else {
                $this->session->set_flashdata('error', 'Data fafal ditambahkan');
                redirect('about');
            }
        }
    }
}