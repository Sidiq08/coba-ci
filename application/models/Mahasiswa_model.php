<?php

class Mahasiswa_model extends CI_Model{

    public function getAllMahasiswa(){
        return $this->db->get('mahasiswa')->result_array();
    }

    public function tambahDataMahasiswa(){
        
        $data= [
            'nama' => $this->input->post('nama'),
            'nrp' => $this->input->post('nrp'),
            'email' => $this->input->post('email'),
            'jurusan' => $this->input->post('jurusan')
        ];

        $this->db->insert('mahasiswa',$data);
        redirect('mahasiswa/index');
        $this->load->library('form_validation');
        $this->load->model('Mahasiswa_model');
        
    }
}
