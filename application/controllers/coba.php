<?php
defined('BASEPATH') or exit('No direct script access allowed');

class coba extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User');
        is_logged_in();
    }
    public function index()
    {
        $data['user'] = $this->User->getAllUser();
        $this->load->view('template/header');
        $this->load->view('user/data', $data);
    }

    public function ubah($id)
    {
        $data['title'] = 'Halaman Update';
        $data['user'] = $this->User->getData($id);
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header');
            $this->load->view('user/update', $data);
        } else {
            $this->User->updateUser($id);
            redirect('coba');
        }
    }

    public function tambah()
    {
        $this->load->view('template/header');
        $this->load->view('user/tambah');
    }

    public function tambahU()
    {
        $this->User->dataUser();
        redirect('coba/index');
    }

    public function hapus($id)
    {
        $this->User->hapusData($id);
        redirect('coba/index');
    }
}
