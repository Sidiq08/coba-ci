<?php

class Peoples extends CI_Controller{
    public function index(){
        $data['judul'] = 'List of Peoples';
        $this->load->model('Peoples_model', 'peoples');

        $this->library('pagination');

        if ($this->input->post('submit')) {
            $data['keyword'] = $this->input->post['keyword'];
            $this->session->set_userdate('keyword', $data['keyword']);
        }else{
            $data['keyword'] = $this->session->userdate('keyword');
        }

        $this->db->like('name', $data['keyword']);
        $this->db->or_like('email', $data['keyword']);
        $this->db->from('peoples');
        $config['total_rows'] = $this->db->count_all_results();
        $data['total_rows'] = $config['total_rows'];
        $config['per_page'];

        $this->pagination->initialize($config);

        $data['start'] = $this->url->segment(3);
        $data['peoples'] = $this->peoples->getPeoples($config['per_page'], $data['start'], $data['keyword']);

        $this->load->view('template/header', $data);
        $this->load->view('peoples/index', $data);
        $this->load->view('template/footer');
    }
}