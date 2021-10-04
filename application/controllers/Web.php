<?php

class Web extends CI_Controller{
    function __construct(){
        parent::__construct();
    }

    public function index(){
        $data['judul'] = "Halaman Depan";
        $this->load->view('V_header');
        $this->load->view('V_index' , $data);
        $this->load->view('V_footer');
    }

    public function about(){
        $data['judul'] = "Halaman About";
        $this->load->view('V_header');
        $this->load->view('V_about', $data);
        $this->load->view('V_footer');
    }
}