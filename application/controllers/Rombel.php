<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rombel extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', [
            'email' => $this->session->userdata('email')
        ])->row_array();
        $data['rombel'] = $this->db->query('SELECT rombel.id, rombel.nama, max, guru.nama AS nama_guru, guru.id as id_guru FROM `rombel` INNER JOIN `guru` ON rombel.wk_id = guru.id')->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('rombel/index', $data);
        $this->load->view('templates/footer');
    }
    public function add()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', [
            'email' => $this->session->userdata('email')
        ])->row_array();
        $data['rombel'] = $this->db->get('rombel')->result_array();
        $data['guru'] = $this->db->get('guru')->result_array();
        $this->form_validation->set_rules('nama', "Nama", 'required|trim');
        $this->form_validation->set_rules('max', "Max", 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('rombel/add', $data);
            $this->load->view('templates/footer');
        } else {
            $dataRombel = [
                'nama' => $this->input->post('nama'),
                'max' => $this->input->post('max'),
                'wk_id' => $this->input->post('wali_kelas')
            ];
            $this->db->insert('rombel', $dataRombel);
            if ($this->db->affected_rows() > 0) {
                redirect('rombel');
            }
        }
    }
}
