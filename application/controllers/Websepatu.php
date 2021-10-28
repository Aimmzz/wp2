<?php
defined('BASEPATH') or exit('no direct script access allowed');

class Websepatu extends CI_Controller{
    public function index(){
        $this->load->view('ViewForm_sepatu');
    }

    public function tampil(){
        $this->form_validation->set_rules(
            'nama',
            'Nama Pembeli',
            'required',
            [
                'required' => 'Maaf Nama Harus Di isi'
            ]
        );
        $this->form_validation->set_rules(
            'nomor',
            'No.Telp',
            'required',
            [
                'required' => 'Maaf No.Telp Harus Di isi'
            ]
        );

        if($this->form_validation->run() == FALSE){
            $this->load->view("ViewForm_sepatu");
        }
        else
        {
            $this->load->model("Model_websepatu");
            $nama = $this->input->post('nama' , TRUE);
            $nomor = $this->input->post('nomor' , TRUE);
            $merksepatu = $this->input->post('merksepatu' , TRUE);
            $ukuransepatu = $this->input->post('ukuransepatu' , TRUE);
            $harga = $this->Model_websepatu->getmerk($this->input->post('merksepatu'));
            

            $data = [
                'nama' => $nama,
                'nomor' => $nomor,
                'merksepatu' => $merksepatu,
                'ukuransepatu' => $ukuransepatu,
                'harga' => $harga
                
            ];
            $this->load->view("ViewData_sepatu" , $data);
        }
    }
}