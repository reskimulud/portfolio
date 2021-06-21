<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Distract extends CI_Controller 

{
    private $accessCode = 'Give me access';

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->form_validation->set_rules('search', 'Cari', 'required');

        if ($this->form_validation->run() == FALSE) {
            redirect('auth');
        } else {
            $access = $this->input->POST('search');

            if ($access === $this->accessCode) {
                $this->session->set_userdata(['access' => 'granted']);

                $this->session->set_flashdata(
                    'message',
                    '<div class="alert alert-success notification" role="alert">
                        Access granted!
                    </div>'
                );
                redirect('auth');
            } else {
                redirect('auth');
            }
        }
    }

}