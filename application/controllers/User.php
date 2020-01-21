<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        is_logged_in();
    }
    public function index()
    {
        $data = [
            'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
            'foto' => $this->db->get_where('drivedata', ['email' => $this->session->userdata('email')])->result_array()
        ];
        $user = $this->session->userdata('email');
        $data['title'] = 'My Drive';
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('user/index', array('error' => ''));
        $this->load->view('template/footer');
    }

    public function upload()
    {
        $config['upload_path'] = './asset/foto/';
        $config['allowed_types'] = 'gif|jpg|jpeg|php|png|pdf|doc|docx';
        $config['max_size'] = 0;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('image')) {
            $data = [
                'user' => $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(),
                'error' => $this->upload->display_errors(),
                'foto' => $this->db->get_where('drivedata', ['email' => $this->session->userdata('email')])->result_array()
            ];
            $user = $this->session->userdata('email');
            $data['title'] = 'My Drive';
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('user/index', $data);

            $this->load->view('template/footer');
        } else {
            $upload_data = $this->upload->data();
            $data = [
                'email' => $this->session->userdata('email'),
                'name_file' => password_hash($_FILES['image']['name'], PASSWORD_DEFAULT),
                'file' => $upload_data['file_name'],
                'date_created' => date('Y-m-d')
            ];
            $this->User_model->uploadData($data);
            redirect('User');
        }
    }

    public function download($id_drive)
    {
        if (!empty($id_drive)) {
            //load download helper
            $this->load->helper('download');

            //get file info from database
            $fileInfo = $this->User_model->getRows(array('id_drive' => $id_drive));

            //file path
            $file = './asset/foto/' . $fileInfo['file'];

            //download file 
            force_download($file, NULL);
        }
    }

    public function delete($id)
    {
        $this->User_model->hapusData($id);
        redirect('User');
    }
}
