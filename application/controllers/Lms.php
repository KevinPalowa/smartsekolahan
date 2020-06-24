<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lms extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Rombel_model', 'rombel');
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', [
            'email' => $this->session->userdata('email')
        ])->row_array();
        $data['lms'] = $this->db->get('lms')->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('lms/index', $data);
        $this->load->view('templates/footer');
    }
    public function add()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', [
            'email' => $this->session->userdata('email')
        ])->row_array();
        $data['rombel'] = $this->rombel->getall();
        $this->form_validation->set_rules('nama', "Nama", 'required|trim');


        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('lms/add', $data);
            $this->load->view('templates/footer');
        } else {
            $name = $this->input->post('nama');
            $rombel = $this->input->post('rombel');

            $this->db->set('nama', $name);
            $this->db->set('rombel_id', $rombel);

            // cek ada gambar
            $upload_image = $_FILES['file']['name'];

            if ($upload_image) {
                $config['upload_path']          = './assets/tugas';
                $config['allowed_types']        = 'jpg|png|doc|docx|ppt';
                $config['max_size']             = 2048;
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('file')) {
                    $file = $this->upload->data('file_name');
                    $this->db->set('file', $file);
                    $this->db->insert('lms');
                } else {
                    echo $this->upload->display_errors();
                    die();
                }
            }
        }
    }
}
