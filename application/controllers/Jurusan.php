<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jurusan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Jurusan';
        $data['user'] = $this->db->get_where('user', [
            'email' => $this->session->userdata('email')
        ])->row_array();
        $data['jurusan'] = $this->db->get('jurusan')->result_array();

        $this->form_validation->set_rules('jurusan', "Jurusan", 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('jurusan/index', $data);
            $this->load->view('templates/footer');
        } else {
            $jurusan = $this->input->post('jurusan');

            $this->db->insert('jurusan', ['jurusan' => $jurusan]);
            $this->session->set_flashdata('message', 'New jurusan added');
            redirect('jurusan');
        }
    }



    public function edit()
    {
        $data['title'] = 'Edit';
        $data['user'] = $this->db->get_where('user', [
            'email' => $this->session->userdata('email')
        ])->row_array();
        $siswaId = $this->uri->segment(3);
        $data['siswa'] = $this->db->get_where('siswa', [
            'id' => $siswaId
        ])->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('siswa/edit', $data);
        $this->load->view('templates/footer');
    }


    public function delete()
    {
        $jurusanId = $this->uri->segment(3);
        $result = $this->db->delete('jurusan', ['id' => $jurusanId]);
        if ($result) {
            $this->session->set_flashdata('message', 'Jurusan deleted!');
            redirect('Jurusan');
        }
    }
}
