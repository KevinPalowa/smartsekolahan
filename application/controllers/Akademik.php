<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Akademik extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Guru_model', 'guru');
        $this->load->model('Rombel_model', 'rombel');
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', [
            'email' => $this->session->userdata('email')
        ])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('jadwal/index', $data);
        $this->load->view('templates/footer');
    }
    public function add()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', [
            'email' => $this->session->userdata('email')
        ])->row_array();
        $data['mapel'] = $this->db->get('mapel')->result_array();
        $data['kelas'] = $this->rombel->getall();
        $data['guru'] = $this->guru->guru();
        $this->form_validation->set_rules('hari', "Hari", 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('jadwal/add', $data);
            $this->load->view('templates/footer');
        } else {
            $dataRombel = [
                'hari' => $this->input->post('hari'),
                'kelas_id' => $this->input->post('kelas'),
                'guru_id' => $this->input->post('guru'),
                'mapel_id' => $this->input->post('mapel')
            ];
            $this->db->insert('jadwal', $dataRombel);
            if ($this->db->affected_rows() > 0) {
                redirect('akademik');
            }
        }
    }
}
