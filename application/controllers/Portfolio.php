<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Portfolio extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();

        $this->load->model('Files_model', 'files');
    }

    public function index()
    {
        $data['title']      = 'Portfolio';
        $data['user']       = $this->database->getUser();

        $query  = "SELECT `portfolio`.*, `portfolio_category`.`name`
                     FROM `portfolio` JOIN `portfolio_category`
                       ON `portfolio`.`category_id` = `portfolio_category`.`id`";

        $data['portfolios'] = $this->db->query($query)->result_array();
        $data['categories'] = $this->db->get('portfolio_category')->result_array();
        $data['months']     = $this->db->get('month')->result_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('backend/portfolio/index', $data);
        $this->load->view('template/footer');
    }

    public function addportfolio()
    {
        $this->form_validation->set_rules('project_name', 'Nama Projek', 'required');
        $this->form_validation->set_rules('category_id', 'Kategori', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {

            $project_name       = $this->input->POST('project_name');
            $category_id        = $this->input->POST('category_id');
            $project_brief      = $this->input->POST('project_brief');
            $client             = $this->input->POST('client');
            $tools              = $this->input->POST('tools');
            $link               = $this->input->POST('link');

            $date               = strtotime($_POST['year'] . '-' . $_POST['month'] . '-01');
            
            $data = [
                'project_name'      => $project_name,
                'category_id'       => $category_id,
                'project_brief'     => $project_brief,
                'client'            => $client,
                'tools'             => $tools,
                'link'              => $link,
                'date'              => $date
            ];

            $result = $this->db->insert('portfolio', $data);

            if ($result) {

                $this->session->set_flashdata(
                    'message',
                    'Data berhasil ditambahkan'
                );
                redirect('portfolio');

            } else {
                $this->session->set_flashdata(
                    'error',
                    'Data gagal ditambahkan'
                );
                redirect('portfolio');
            }

        }
    }

    public function editportfolio()
    {
        $this->form_validation->set_rules('project_name', 'Nama Projek', 'required');
        $this->form_validation->set_rules('category_id', 'Kategori', 'required');
        $this->form_validation->set_rules('id', 'ID', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {

            $id                 = $this->input->POST('id');
            $project_name       = $this->input->POST('project_name');
            $category_id        = $this->input->POST('category_id');
            $project_brief      = $this->input->POST('project_brief');
            $client             = $this->input->POST('client');
            $tools              = $this->input->POST('tools');
            $link               = $this->input->POST('link');
            $date               = strtotime($_POST['year'] . '-' . $_POST['month'] . '-01');

            $db = $this->db->get_where('portfolio', ['id' => $id])->result_array();

            if (is_null($db)) {
                $this->session->set_flashdata(
                    'error',
                    'Data tidak ditemukan'
                );
                redirect('portfplio');
            } else {

                $data = [
                    'project_name'      => $project_name,
                    'category_id'       => $category_id,
                    'project_brief'     => $project_brief,
                    'client'            => $client,
                    'tools'             => $tools,
                    'link'              => $link,
                    'date'              => $date
                ];
    
                $result = $this->database->update($data, $id, 'portfolio');
    
                if ($result) {
    
                    $this->session->set_flashdata(
                        'message',
                        'Data berhasil diubah'
                    );
                    redirect('portfolio');
    
                } else {
                    $this->session->set_flashdata(
                        'error',
                        'Data gagal diubah'
                    );
                    redirect('portfolio');
                }

            }


        }
    }

    public function deleteportfolio($id)
    {
        if ($id == '') {
            $this->session->set_flashdata(
                'error',
                'Data tidak ditemukan'
            );
            redirect('portfolio');
        } else {

            $db = $this->db->get_where('portfolio', ['id' => $id])->row_array();

            if (is_null($db)) {
                $this->session->set_flashdata(
                    'error',
                    'Data tidak ditemukan'
                );
                redirect('portfolio');
            } else {

                $result = $this->database->delete($id, 'portfolio');

                if ($result) {
                    $this->session->set_flashdata(
                        'message',
                        'Data berhasil dihapus'
                    );
                    redirect('portfolio');
                } else {
                    $this->session->set_flashdata(
                        'error',
                        'Data gagal dihapus'
                    );
                    redirect('portfolio');
                }

            }

        }
    }

}