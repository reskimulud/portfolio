<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Files_model extends CI_Model

{
    
    public function uploadFile($allowed_types = null, $max_size = 2040, $upload_path = './assets/')
    {
        $config['allowed_types']    = $allowed_types;
        $config['max_size']         = $max_size;
        $config['upload_path']      = $upload_path;

        $this->load->library('upload', $config);

        $error = FALSE;

        if ($this->upload->do_upload('file')) {
            $file_name  = $this->upload->data('file_name');
        } else {
            $error = TRUE;
            $file_name =  $this->upload->display_errors();
        }

        return ['file_name' => $file_name, 'error' => $error];
    }

    public function downloadFile($source_path, $id, $is_null = NULL)
    {
        force_download($source_path . $id, $is_null);
    }

    public function uploadImage($max_size = 2040, $upload_path = './assets/')
    {
        $config['allowed_types']    = 'png|jpg|gif|bmp';
        $config['max_size']         = $max_size;
        $config['upload_path']      = $upload_path;

        $this->load->library('upload', $config);

        $error = FALSE;

        if ($this->upload->do_upload('file')) {
            $file_name  = $this->upload->data('file_name');
            $this->resizegaleri($file_name, $upload_path);
        } else {
            $error = TRUE;
            $file_name =  $this->upload->display_errors();
        }

        return ['file_name' => $file_name, 'error' => $error];
    }

    private function resizegaleri($filename, $path)
    {
        $source_path = FCPATH . $path . $filename;
        $target_path = FCPATH . $path;
        $config_manip = [
            [
                'image_library' => 'gd2',
                'source_image' => $source_path,
                'new_image' => $target_path,
                'maintain_ratio' => TRUE,
                'width' => 700,
            ]
        ];


        $this->load->library('image_lib', $config_manip[0]);
        foreach ($config_manip as $item) {
            $this->image_lib->initialize($item);
            if (!$this->image_lib->resize()) {
                $this->session->set_flashdata('error', $this->image_lib->display_errors(NULL, NULL));
            }
        }

        $this->image_lib->clear();
    }
    
}