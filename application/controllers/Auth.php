<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email', [
            'valid_email' => 'emai dont valid'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Welcome to DriveNatural';
            $this->load->view('auth/signin', $data);
        } else {
            //validasinya sukses
            $this->_login();
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        if ($user) {
            //usernya ada
            if ($user['is_active'] == 1) {
                //cek password
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                        'username' => $user['username']
                    ];
                    $this->session->set_userdata($data);
                    redirect('user');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger mt-2" role="alert" style="width: 280px; margin: auto;font-style: 11px">Wrong password !</div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger mt-2" role="alert" style="width: 280px; margin: auto;font-style: 11px">This email has not been activated !</div>');
                redirect('auth');   
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger mt-2" role="alert" style="width: 280px; margin: auto;font-style: 11px">Email is not registred !</div>');
            redirect('auth');
        }
    }

    public function signup()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'This email has already registred'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]|matches[confirm]', [
            'matches' => 'Password dont match !',
            'min_length' => 'Password too short'
        ]);
        $this->form_validation->set_rules('confirm', 'Confirm', 'required|trim|matches[password]');

        if ($this->form_validation->run() ==  false) {
            $data['title'] = 'Create Your Account';
            $this->load->view('auth/signup', $data);
        } else {
            $data = [
                'username' => htmlspecialchars($this->input->post('username', true)),
                'email' => $this->input->post('email', true),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'is_active' => 1,
                'date_created' => time()
            ];
            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success mt-2 mb-1" role="alert" style="width: 280px; margin: auto;font-style: 11px">Congratulation! your account has been created. Please Login</div>');
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('email');

        $this->session->set_flashdata('message', '<div class="alert alert-success mt-2 mb-1" role="alert" style="width: 280px; margin: auto;font-style: 11px">You have been logged out !</div>');
        redirect('auth');
    }
}
