<?php
defined('BASEPATH') or exit('No direct script access allowed');

class autentifikasi extends CI_Controller
{
    public function index()
    {
        $this->form_validation->set_rules(
            'email',
            'Alamat Email',
            'required|trim|valid_email',
            [
                'required' => 'Email Harus diisi!!',
                'valid_email' => 'Email Tidak Benar!!'
            ]
        );
        $this->form_validation->set_rules(
            'password',
            'Password',
            'required|trim',
            [
                'required' => 'Password Harus diisi'
            ]
        );
        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Login';
            $data['user'] = '';
            $this->load->view('templates/aute_header', $data);
            $this->load->view('autentifikasi/login');
            $this->load->view('templates/aute_footer');
        } else {
            $this->_login();
        }
    }
    private function _login()
    {
        $email = htmlspecialchars($this->input->post('email', true));
        $password = $this->input->post('password', true);
        $user = $this->Modeluser->cekData(['email' => $email])->row_array();

        if ($user) {
            if ($user['is_active'] == 1) {
                $md5pass = md5($password);
                if ($md5pass == $user['password']) {
                    $data = [
                        'email' => $user['email'],
                        'role_id' => $user['role_id']
                    ];
                    $this->session->set_userdata($data);
                    if ($user['role_id'] == 1) {
                        redirect('admin');
                    } else {
                        if ($user['image'] == 'default.jpg') {
                            $this->session->set_flashdata(
                                'pesan',
                                '<div class="alert alert-info alert-message" role="alert">Silahkan 
                                Ubah Profile Anda untuk Ubah Photo Profil</div>'
                            );
                        }
                        redirect('user');
                    }
                } else {
                    $this->session->set_flashdata('pesan', '<div 
                    class="alert alert-danger alert-message" role="alert">Password 
                    salah!!</div>');
                    redirect('autentifikasi');
                }
            } else {
                $this->session->set_flashdata('pesan', '<div 
                class="alert alert-danger alert-message" role="alert">User belum 
                diaktifasi!!</div>');
                redirect('autentifikasi');
            }
        } else {
            $this->session->set_flashdata('pesan', '<div 
            class="alert alert-danger alert-message" role="alert">Email tidak 
            terdaftar!!</div>');
            redirect('autentifikasi');
        }
    }
}