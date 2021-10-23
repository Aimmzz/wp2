<?php

class Matakuliah extends CI_Controller{

    public function index(){
        $this->load->view('view-form-matakuliah');
    }

    public function cetak(){
        $this->form_validation->set_rules('kode','Kode Matakuliah','required|min_length[3]',[
            'required' => "kode mata kuliah harus di isi",
            'min_length'=>"kode terlalu pendek minimal 3 karakter"
        ]);
        $this->form_validation->set_rules('nama','nama Matakuliah','required|min_length[3]',[
            'required' => "nama mata kuliah harus di isi",
            'min_length'=>"nama terlalu pendek minimal 3 karakter"
        ]);
        if($this->form_validation->run() == FALSE){
            $this->load->view('view-form-matakuliah');
        }else{
            $kode = $this->input->post('kode',TRUE);
        $nama = $this->input->post('nama', TRUE);
        $sks = $this->input->post('sks',TRUE);


        $data = [
            'kode' => $kode,
            'nama' => $nama,
            'sks' => $sks
        ];
        $this->load->view('view-data-matakuliah', $data);

        }
    }
} 