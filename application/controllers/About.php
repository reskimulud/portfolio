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
        $data['title']      = 'About';
        $data['user']       = $this->database->getUser();
        $data['about']      = $this->db->get('about')->row_array();
        $data['skills']     = $this->db->get('about_skills')->result_array();
        $data['months']     = $this->db->get('month')->result_array();

        $this->db->order_by('start', 'DESC');
        $data['educations'] = $this->db->get('about_education')->result_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('backend/about/index', $data);
        $this->load->view('template/footer', $data);
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
            'Data About telah diperbaharui'
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

                $this->session->set_flashdata(
                    'message',
                    'Datadiperbarui'
                );
                redirect('about');
            } else {
                $this->db->truncate('about');
                $this->db->insert('about', $data);

                 $this->session->set_flashdata(
                    'message',
                    'Datadiperbarui'
                );
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
                $this->session->set_flashdata('error', 'Data gagal ditambahkan');
                redirect('about');
            }
        }
    }

    public function editskill()
    {
        $this->form_validation->set_rules('id', 'ID', 'required');
        $this->form_validation->set_rules('skill', 'Skill', 'required');
        $this->form_validation->set_rules('percentage', 'Persentase', 'required');
        
        if ($this->form_validation->run() == false) {
            $this->index();
        } else {

            $skill = $this->input->POST('skill');
            $percentage = $this->input->POST('percentage');
            $id = $this->input->POST('id');

            $db = $this->db->get_where('about_skills', ['id' => $id])->row_array();

            if (is_array($db) && !empty($db)) {
                $data = [
                    'skill' => $skill,
                    'percentage' => $percentage
                ];

                $result = $this->database->update($data, $id, 'about_skills');

                if ($result) {
                    $this->session->set_flashdata(
                        'message',
                        'Data diperbarui'
                    );
                    redirect('about');
                } else {
                    $this->session->set_flashfata(
                        'error',
                        'Data gagal diperbarui'
                    );
                    redirect('about');
                }
            } else {
                $this->session->set_flashdata(
                    'error',
                    'Data tidak ditemuhkan'
                );
                redirect('about');
            }

        }
    }

    public function deleteskill($id)
    {
        if ($id == "") {
            $this->session->set_flashdata(
                'error',
                'Data tidak ditemukan'
            );
            redirect('about');
        } else {
            $db = $this->db->get_where('about_skills', ['id' => $id])->row_array();

            if (is_array($db) && !empty($db)) {
                $this->db->where('id', $id);
                $result = $this->db->delete('about_skills');

                if ($result) {
                    $this->session->set_flashdata(
                        'message',
                        'Data berhasil dihapus'
                    );
                    redirect('about');
                } else {
                    $this->session->set_flashdata(
                        'error',
                        'Data gafal dihapus'
                    );
                    redirect('about');
                }
            }
        }
    }

    public function education()
    {
        $this->form_validation->set_rules('degree', 'Jurusan', 'required');
        $this->form_validation->set_rules('school', 'Sekolah', 'required');
        $this->form_validation->set_rules('start-month', 'Sejak mulai studi', 'required');
        $this->form_validation->set_rules('start-year', 'Sejak mulai studi', 'required');
        $this->form_validation->set_rules('is_graduated', 'Lulus?', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->about();
        } else {
            if ($_POST['is_graduated'] <= 1) {
                $degree = $this->input->POST('degree');
                $school = $this->input->POST('school');
                $start = strtotime($_POST['start-year'] . '-' . $_POST['start-month'] . '-01');
                $until = strtotime($_POST['until-year'] . '-' . $_POST['until-month'] . '-01');
                $is_graduated = $this->input->POST('is_graduated');

                if ($is_graduated == 0) {
                    $until = 0;
                }

                $description = $this->input->POST('description');

                $data = [
                    'degree' => $degree,
                    'school' => $school,
                    'start' => $start,
                    'until' => $until,
                    'is_graduated' => $is_graduated,
                    'description' => $description
                ];

                $result = $this->db->insert('about_education', $data);

                if ($result) {
                    $this->session->set_flashdata(
                        'message',
                        'Data berhasil ditambahkan'
                    );
                    redirect('about');
                } else {
                    $this->session->set_flashdata(
                        'error',
                        'Data gagal ditambahkan'
                    );
                    redirect('about');
                }
            }
        }
    }

    public function editeducation()
    {
        $this->form_validation->set_rules('id', 'ID', 'required');
        $this->form_validation->set_rules('degree', 'Jurusan', 'required');
        $this->form_validation->set_rules('school', 'Sekolah', 'required');
        $this->form_validation->set_rules('start-month', 'Sejak mulai studi', 'required');
        $this->form_validation->set_rules('start-year', 'Sejak mulai studi', 'required');
        $this->form_validation->set_rules('is_graduated', 'Lulus?', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->about();
        } else {

            if ($_POST['id'] == '') {
                $this->session->set_flashdata(
                    'error',
                    'Data tidak ditemukan'
                );
                redirect('about');
            } else {
                $db = $this->db->get_where('about_education', ['id' => $_POST['id']])->row_array();

                if (is_array($db) && !empty($db)) {

                    $id = $this->input->POST('id');
                    $degree = $this->input->POST('degree');
                    $school = $this->input->POST('school');
                    $start = strtotime($_POST['start-year'] . '-' . $_POST['start-month'] . '-01');
                    $until = strtotime($_POST['until-year'] . '-' . $_POST['until-month'] . '-01');
                    $is_graduated = $this->input->POST('is_graduated');

                    if ($is_graduated == 0) {
                        $until = 0;
                    }

                    $description = $this->input->POST('description');

                    $data = [
                        'degree' => $degree,
                        'school' => $school,
                        'start' => $start,
                        'until' => $until,
                        'is_graduated' => $is_graduated,
                        'description' => $description
                    ];

                    $this->db->where('id', $id);
                    $result = $this->db->update('about_education', $data);

                    if ($result) {
                        $this->session->set_flashdata(
                            'message',
                            'Data berhasil diperbarui'
                        );
                        redirect('about');
                    } else {
                        $this->session->set_flashdata(
                            'error',
                            'Data gagal diperbarui'
                        );
                        redirect('about');
                    }

                } else {
                    $this->session->set_flashdata(
                        'error',
                        'Data tidak ditemukan'
                    );
                    redirect('about');
                }
            }

        }
    }
}