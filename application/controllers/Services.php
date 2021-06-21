<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Services extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title']      = 'Services';
        $data['user']       = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['services']   = $this->db->get('services')->result_array();

        $this->form_validation->set_rules('name', 'Nama', 'required');
        $this->form_validation->set_rules('description', 'Deskripsi', 'required');
        $this->form_validation->set_rules('icon', 'Ikon', 'required');

        if ($this->form_validation->run() == FALSE) {

            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('template/topbar', $data);
            $this->load->view('backend/services/index', $data);
            $this->load->view('template/footer');

        } else {

            $name           = $this->input->POST('name');
            $description    = $this->input->POST('description');
            $icon           = $this->input->POST('icon');

            $data   = [
                'name'          => $name,
                'description'   => $description,
                'icon'          => $icon
            ];

            $result = $this->database->save($data, 'services');

            if ($result) {
                $this->session->set_flashdata(
                    'message',
                    'Data ditambahkan'
                );
                redirect('services');
            } else {
                $this->session->set_flashdata(
                    'error',
                    'Data gagal ditambahkan'
                );
                redirect('services');
            }

        }
    }

    public function editservice()
    {
        $this->form_validation->set_rules('name', 'Nama', 'required');
        $this->form_validation->set_rules('description', 'Deskripsi', 'required');
        $this->form_validation->set_rules('icon', 'Ikon', 'required');

        if ($this->form_validation->run() == FALSE) {

            $this->session->set_flashdata(
                'error',
                'Data tidak diubah'
            );
            redirect('services');

        } else {

            $name           = $this->input->POST('name');
            $description    = $this->input->POST('description');
            $icon           = $this->input->POST('icon');
            $id             = $this->input->POST('id');

            $db = $this->db->get_where('services', ['id' => $id]);

            if (!is_null($db)) {

                $data   = [
                    'name'          => $name,
                    'description'   => $description,
                    'icon'          => $icon
                ];
    
                $result = $this->database->update($data, $id, 'services');
    
                if ($result) {
                    $this->session->set_flashdata(
                        'message',
                        'Data diubah'
                    );
                    redirect('services');
                } else {
                    $this->session->set_flashdata(
                        'error',
                        'Data gagal diubah'
                    );
                    redirect('services');
                }

            } else {

                $this->session->set_flashdata(
                    'error',
                    'Data tidak ditemukan'
                );
                redirect('services');

            }


        }
    }

    public function deleteservice($id)
    {

        if ($id == '') {

            $this->session->set_flashdata(
                'error',
                'Data tidak ditemukan'
            );
            redirect('services');

        }

        $db = $this->db->get_where('services', ['id' => $id]);

            if (!is_null($db)) {

                $result = $this->database->delete($id, 'services');
    
                if ($result) {
                    $this->session->set_flashdata(
                        'message',
                        'Data dihapus'
                    );
                    redirect('services');
                } else {
                    $this->session->set_flashdata(
                        'error',
                        'Data gagal dihapus'
                    );
                    redirect('services');
                }

            } else {

                $this->session->set_flashdata(
                    'error',
                    'Data tidak ditemukan'
                );
                redirect('services');

            }
    }

}