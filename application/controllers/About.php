<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title']      = 'About';
        $data['user']       = $this->database->getUser();
        $data['about']      = $this->db->get('about')->row_array();

        $query              = "SELECT `about_skills`.*, `about_skills_category`.`category_name`
                                 FROM `about_skills` JOIN `about_skills_category`
                                   ON `about_skills`.`category_id` = `about_skills_category`.`id`";

        $data['skills']     = $this->db->query($query)->result_array();

        $this->db->order_by('position', 'ASC');
        $data['categories'] = $this->db->get('about_skills_category')->result_array();
        $data['months']     = $this->db->get('month')->result_array();

        $this->db->order_by('start', 'DESC');
        $data['educations'] = $this->db->get('about_education')->result_array();
        $this->db->order_by('start', 'DESC');
        $data['experiences'] = $this->db->get('about_experience')->result_array();

        $this->db->select_max('position');
        $max_position = $this->db->get('about_skills_category')->result_array();
        $max_position = $max_position[0]['position'];

        if (is_null($max_position)) {
            $max_position = 0;
        }
        $data['max_position'] = $max_position;

        $data['type']   = [
            "Full-Time",
            "Part-Time",
            "Internship",
            "Freelance",
            "Contract"
        ];

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
            $category_id = $this->input->POST('category_id');

            $data = [
                'skill' => $skill,
                'percentage' => $percentage,
                'category_id' => $category_id
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
            $category_id = $this->input->POST('category_id');
            $id = $this->input->POST('id');

            $db = $this->db->get_where('about_skills', ['id' => $id])->row_array();

            if (is_array($db) && !empty($db)) {
                $data = [
                    'skill' => $skill,
                    'percentage' => $percentage,
                    'category_id' => $category_id
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
                        'Data gagal dihapus'
                    );
                    redirect('about');
                }
            }
        }
    }

    public function categoryskill()
    {
        $this->form_validation->set_rules('category_name', 'Nama Kategori', 'required');
        
        $this->db->select_max('position');
        $max_position = $this->db->get('about_skills_category')->result_array();
        $max_position = $max_position[0]['position'];

        if (is_null($max_position)) {
            $max_position = 0;
        }
        
        if ($this->form_validation->run() == false) {
            $this->index();
        } else {
            $category_name = $this->input->POST('category_name');

            $data = [
                'category_name' => $category_name,
                'position' => $max_position + 1
            ];

            $result = $this->db->insert('about_skills_category', $data);

            if ($result) {
                $this->session->set_flashdata('message', 'Data berhasil ditambahkan');

                redirect('about');
            } else {
                $this->session->set_flashdata('error', 'Data gagal ditambahkan');
                redirect('about');
            }
        }
    }

    public function editcategoryskill()
    {
        $this->form_validation->set_rules('id', 'ID', 'required');
        $this->form_validation->set_rules('category_name', 'Nama Kategori', 'required');
        
        if ($this->form_validation->run() == false) {
            $this->index();
        } else {

            $category_name = $this->input->POST('category_name');
            $id = $this->input->POST('id');

            $db = $this->db->get_where('about_skills_category', ['id' => $id])->row_array();

            if (is_array($db) && !empty($db)) {
                $data = [
                    'category_name' => $category_name,
                ];

                $result = $this->database->update($data, $id, 'about_skills_category');

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

    public function editpositioncategoryskill()
    {
        $this->form_validation->set_rules('id', 'ID', 'required');
        $this->form_validation->set_rules('position', 'Posisi Kategori', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {

            $this->db->select_max('position');
            $max_position = $this->db->get('about_skills_category')->result_array();
            $max_position = $max_position[0]['position'];

            if (is_null($max_position)) {
                $max_position = 0;
            }

            $chng_position = $this->input->POST('position');
            $id = $this->input->POST('id');

            $db = $this->db->get_where('about_skills_category', ['id' => $id])->row_array();

            if (is_array($db) && !empty($db)) {

                $positions = $this->db->get('about_skills_category')->result_array();
                $temp = $this->db->get_where('about_skills_category', ['id' => $id])->result_array();
                $temp = $temp[0]['position'];
                
                if ($chng_position != $temp) {
                    foreach ($positions as $position) {
                        if ($position['position'] >= $chng_position && $position['position'] <= $temp) {
                            if ($position['id'] == $id) {
                                $position['position'] = $chng_position;
                            
                                $this->db->where('id', $position['id']);
                                $this->db->update('about_skills_category', ['position' => $position['position']]);
                            } else {
                                $position['position'] = $position['position'] + 1;
                            
                                $this->db->where('id', $position['id']);
                                $this->db->update('about_skills_category', ['position' => $position['position']]);
                            }
                        } elseif ($position['position'] <= $chng_position && $position['position'] >= $temp) {
                            if ($position['id'] == $id) {
                                $temp = $position['position'];
                                $position['position'] = $chng_position;
                            
                                $this->db->where('id', $position['id']);
                                $this->db->update('about_skills_category', ['position' => $position['position']]);
                            } else {
                                $position['position'] = $position['position'] - 1;
                            
                                $this->db->where('id', $position['id']);
                                $this->db->update('about_skills_category', ['position' => $position['position']]);
                            }
                        }
                    }

                    $result = $this->db->affected_rows();

                    if ($result) {
                        $this->session->set_flashdata(
                            'message',
                            'Data diperbarui'
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
                        'Data gagal diperbarui, posisi masih sama'
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

    public function deletecategoryskill($id)
    {
        if ($id == "") {
            $this->session->set_flashdata(
                'error',
                'Data tidak ditemukan'
            );
            redirect('about');
        } else {
            $db = $this->db->get_where('about_skills_category', ['id' => $id])->row_array();

            
            if (is_array($db) && !empty($db)) {
                $positions = $this->db->get('about_skills_category')->result_array();
                $temp = $this->db->get_where('about_skills_category', ['id' => $id])->result_array();
                $temp = $temp[0]['position'];

                $this->db->select_max('position');
                $max_position = $this->db->get('about_skills_category')->result_array();
                $max_position = $max_position[0]['position'];

                if (is_null($max_position)) {
                    $max_position = 0;
                }

                $this->db->where('id', $id);
                $result = $this->db->delete('about_skills_category');

                foreach ($positions as $position)  {
                    if ($position['position'] > $temp && $position['position'] <= $max_position) {
                        $position['position'] = $position['position'] - 1;
                        $this->db->where('id', $position['id']);
                        $this->db->update('about_skills_category', ['position' => $position['position']]);
                    }
                }

                if ($result) {
                    $this->session->set_flashdata(
                        'message',
                        'Data berhasil dihapus'
                    );
                    redirect('about');
                } else {
                    $this->session->set_flashdata(
                        'error',
                        'Data gagal dihapus'
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
                    'degree'        => $degree,
                    'school'        => $school,
                    'start'         => $start,
                    'until'         => $until,
                    'is_graduated'  => $is_graduated,
                    'description'   => $description
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

    public function deleteeducation($id)
    {
        if ($id == '') {
            $this->session->set_flashdata(
                'error',
                'Data tidak ditemukan'
            );
            redirect('about');
        } else {

            $db = $this->db->get_where('about_education', ['id' => $id])->row_array();

            if (is_array($db) && !empty($db)) {
                $this->db->where('id', $id);
                $result = $this->db->delete('about_education');

                if ($result) {
                    $this->session->set_flashdata(
                        'message',
                        'Data berhasil dihapus'
                    );
                    redirect('about');
                } else {
                    $this->session->set_flashdata(
                        'error',
                        'Data gagal dihapus'
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

    public function experience()
    {
        $this->form_validation->set_rules('job_title', 'Nama Pekerjaan', 'required');
        $this->form_validation->set_rules('company_name', 'Nama Perusahaan', 'required');
        $this->form_validation->set_rules('start-month', 'Sejak mulai studi', 'required');
        $this->form_validation->set_rules('start-year', 'Sejak mulai studi', 'required');
        $this->form_validation->set_rules('is_resigned', 'Tidak bekerja disini?', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->about();
        } else {
            if ($this->input->POST('is_resigned') <= 1) {
                $job_title      = $this->input->POST('job_title');
                $company_name   = $this->input->POST('company_name');
                $type           = $this->input->POST('type');
                $start          = strtotime($_POST['start-year'] . '-' . $_POST['start-month'] . '-01');
                $until          = strtotime($_POST['until-year'] . '-' . $_POST['until-month'] . '-01');
                $is_resigned    = $this->input->POST('is_resigned');
                $description    = $this->input->POST('description');

                if ($is_resigned == 0) {
                    $until = 0;
                }

                $data = [
                    'job_title'     => $job_title,
                    'company_name'  => $company_name,
                    'type'          => $type,
                    'start'         => $start,
                    'until'         => $until,
                    'is_resigned'   => $is_resigned,
                    'description'   => $description
                ];

                $result = $this->db->insert('about_experience', $data);

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
            } else {
                $this->seession->set_flashdata(
                    'error',
                    'Data gagal ditambahkan'
                );
                redirect('about');
            }
        }

    }

    public function editexperience()
    {
        $this->form_validation->set_rules('job_title', 'Nama Pekerjaan', 'required');
        $this->form_validation->set_rules('company_name', 'Nama Perusahaan', 'required');
        $this->form_validation->set_rules('start-month', 'Sejak mulai studi', 'required');
        $this->form_validation->set_rules('start-year', 'Sejak mulai studi', 'required');
        $this->form_validation->set_rules('is_resigned', 'Tidak bekerja disini?', 'required');

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
                $db = $this->db->get_where('about_experience', ['id' => $_POST['id']])->result_array();

                if (is_array($db) && !empty($db)) {
                    $id             = $this->input->POST('id');
                    $job_title      = $this->input->POST('job_title');
                    $company_name   = $this->input->POST('company_name');
                    $type           = $this->input->POST('type');
                    $start          = strtotime($_POST['start-year'] . '-' . $_POST['start-month'] . '-01');
                    $until          = strtotime($_POST['until-year'] . '-' . $_POST['until-month'] . '-01');
                    $is_resigned    = $this->input->POST('is_resigned');
                    $description    = $this->input->POST('description');

                    if ($is_resigned == 0) {
                        $until = 0;
                    }

                    $data = [
                        'job_title'     => $job_title,
                        'company_name'  => $company_name,
                        'type'          => $type,
                        'start'         => $start,
                        'until'         => $until,
                        'is_resigned'   => $is_resigned,
                        'description'   => $description
                    ];

                    $this->db->where('id', $id);
                    $result = $this->db->update('about_experience', $data);

                    if ($result) {
                        $this->session->set_flashdata(
                            'message',
                            'Data berhasil diubah'
                        );
                        redirect('about');
                    } else {
                        $this->session->set_flashdata(
                            'error',
                            'Data gagal diubah'
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

    public function deleteexperience($id)
    {
        if ($id == '') {
            $this->session->set_flashdata(
                'error',
                'Data tidak ditemukan'
            );
            redirect('about');
        } else {

            $db = $this->db->get_where('about_experience', ['id' => $id])->row_array();

            if (is_array($db) && !empty($db)) {
                $this->db->where('id', $id);
                $result = $this->db->delete('about_experience');

                if ($result) {
                    $this->session->set_flashdata(
                        'message',
                        'Data berhasil dihapus'
                    );
                    redirect('about');
                } else {
                    $this->session->set_flashdata(
                        'error',
                        'Data gagal dihapus'
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