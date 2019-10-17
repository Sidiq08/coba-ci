<?php

class Mahasiswa extends CI_Controller{

    public function index(){
        $this->load->model('Mahasiswa_model','mhs');
        $data['mahasiswa'] = $this->mhs->getAllMahasiswa();
        $this->load->view('mahasiswa/index', $data);
    }
}