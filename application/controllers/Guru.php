<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Guru extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Guru_model', 'guru');
    }

    public function index()
    {
        $data['title'] = 'My profile';
        $data['user'] = $this->db->get_where('user', [
            'email' => $this->session->userdata('email')
        ])->row_array();
        $data['guru'] = $this->db->get('guru')->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('guru/index', $data);
        $this->load->view('templates/footer');
    }
    public function add()
    {
        $data['title'] = 'My profile';
        $data['user'] = $this->db->get_where('user', [
            'email' => $this->session->userdata('email')
        ])->row_array();

        $this->form_validation->set_rules('nama', "Nama", 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('guru/add', $data);
            $this->load->view('templates/footer');
        } else {
            $guru['nip'] = $this->input->post('nip');
            $guru['nik'] = $this->input->post('nik');
            $guru['nuptk'] = $this->input->post('nuptk');
            $guru['nama'] = $this->input->post('nama');
            $guru['tempat_lahir'] = $this->input->post('tempat_lahir');
            $guru['tanggal_lahir'] = $this->input->post('tanggal_lahir');
            $guru['jk'] = $this->input->post('jk');
            $guru['agama'] = $this->input->post('agama');
            $guru['status_kepegawaian'] = $this->input->post('status_kepegawaian');
            $guru['alamat'] = $this->input->post('alamat');
            $guru['jenis_ptk'] = $this->input->post('jenis_ptk');
            $guru['telepon'] = $this->input->post('telepon');
            $guru['no_handphone'] = $this->input->post('hp');
            $guru['email'] = $this->input->post('email');
            $guru['tanggal_masuk'] = $this->input->post('tanggal_masuk');
            $this->db->insert('guru', $guru);
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('message', 'New guru added');
                redirect('guru');
            }
        }
    }

    public function delete()
    {
        $guruId = $this->uri->segment(3);
        $result = $this->guru->guru('delete',  $guruId);
        if ($result) {
            $this->session->set_flashdata('message', 'Guru deleted!');
            redirect('guru');
        }
    }
}
