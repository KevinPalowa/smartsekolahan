<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Siswa';
        $data['user'] = $this->db->get_where('user', [
            'email' => $this->session->userdata('email')
        ])->row_array();
        $data['jurusan'] = $this->db->get('jurusan')->result_array();
        $data['menu'] = $this->db->query('SELECT siswa.id, `nama`,`nisn`,`alamat`,`jk`,`kelas_id`,`tempat_lahir`,`tanggal_lahir` FROM siswa')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('siswa/index', $data);
        $this->load->view('templates/footer');
        // $this->form_validation->set_rules('nama', "Nama", 'required');
        // $this->form_validation->set_rules('nis', "NIS", 'required');
        // $this->form_validation->set_rules('alamat', "Alamat", 'required');
        // $this->form_validation->set_rules('jk', "Jenis kelamin", 'required');
        // $this->form_validation->set_rules('kelas', "Kelas", 'required');
        // $this->form_validation->set_rules('jurusan', "Jurusan", 'required');
        // $this->form_validation->set_rules('tempat_lahir', "Tempat lahir", 'required');
        // $this->form_validation->set_rules('tanggal_lahir', "Tanggal lahir", 'required');
        // if ($this->form_validation->run() == FALSE) {
        // } else {
        //     $nama = $this->input->post('nama');
        //     $nis = $this->input->post('nis');
        //     $alamat = $this->input->post('alamat');
        //     $jk = $this->input->post('jk');
        //     $kelas = $this->input->post('kelas');
        //     $jurusan = $this->input->post('jurusan');
        //     $tanggalLahir = $this->input->post('tanggal_lahir');
        //     $tempatLahir = $this->input->post('tempat_lahir');
        //     $this->db->insert('siswa', ['nama' => $nama, 'nis' => $nis, 'alamat' => $alamat, 'jk' => $jk, 'kelas' => $kelas, 'jurusan_id' => $jurusan, 'tanggal_lahir' => $tanggalLahir, 'tempat_lahir' => $tempatLahir]);
        //     $this->session->set_flashdata('message', 'New siswa added');
        //     redirect('siswa');
        // }
    }

    public function add()
    {
        $data['title'] = 'Edit';
        $data['user'] = $this->db->get_where('user', [
            'email' => $this->session->userdata('email')
        ])->row_array();
        $siswaId = $this->uri->segment(3);
        $data['siswa'] = $this->db->get_where('siswa', [
            'id' => $siswaId
        ])->result_array();

        $this->form_validation->set_rules('nama', "Nama", 'required');
        // $this->form_validation->set_rules('nisn', "NIS", 'required');
        // $this->form_validation->set_rules('alamat', "Alamat", 'required');
        // $this->form_validation->set_rules('jk', "Jenis kelamin", 'required');
        // $this->form_validation->set_rules('kelas', "Kelas", 'required');
        // $this->form_validation->set_rules('tempat_lahir', "Tempat lahir", 'required');
        // $this->form_validation->set_rules('tanggal_lahir', "Tanggal lahir", 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('siswa/add', $data);
            $this->load->view('templates/footer');
        } else {

            $siswa['tanggal_daftar'] = $this->input->post('tanggal_daftar');
            $siswa['nik'] = $this->input->post('nik');
            $siswa['nisn'] = $this->input->post('nisn');
            $siswa['asal_sekolah'] = $this->input->post('asal_sekolah');
            $siswa['nama'] = $this->input->post('nama');
            $siswa['tempat_lahir'] = $this->input->post('tempat_lahir');
            $siswa['tanggal_lahir'] = $this->input->post('tanggal_lahir');
            $siswa['jk'] = $this->input->post('jk');
            $siswa['agama'] = $this->input->post('agama');
            $siswa['anak_ke'] = $this->input->post('anak_ke');
            $siswa['jumlah_saudara'] = $this->input->post('jumlah_saudara');
            $siswa['alamat'] = $this->input->post('alamat');
            $siswa['kecamatan'] = $this->input->post('kecamatan');
            $siswa['telpon'] = $this->input->post('telpon');
            $siswa['hp'] = $this->input->post('hp');
            $siswa['email'] = $this->input->post('email');
            $siswa['berat_badan'] = $this->input->post('berat_badan');
            $siswa['tinggi_badan'] = $this->input->post('tinggi_badan');
            $siswa['keterangan'] = $this->input->post('keterangan');
            $siswa['nama_ayah'] = $this->input->post('nama_ayah');
            $siswa['nama_ibu'] = $this->input->post('nama_ibu');
            $siswa['pendidikan_ayah'] = $this->input->post('pendidikan_ayah');
            $siswa['pendidikan_ibu'] = $this->input->post('pendidikan_ibu');
            $siswa['pekerjaan_ayah'] = $this->input->post('pekerjaan_ayah');
            $siswa['pekerjaan_ibu'] = $this->input->post('pekerjaan_ibu');
            $siswa['penghasilan_ayah'] = $this->input->post('penghasilan_ayah');
            $siswa['penghasilan_ibu'] = $this->input->post('penghasilan_ibu');

            $this->db->insert('siswa', $siswa);
            if ($this->db->affected_rows() > 0) {
                redirect('siswa');
            }
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

    public function faker()
    {
        $faker = Faker\Factory::create('id_ID');

        // generate data by accessing properties
        for ($i = 0; $i < 5000; $i++) {
            $nama =  $faker->name;
            $nis = $faker->randomNumber(8);
            $alamat = $faker->address;
            $jk = $faker->randomElement(['l', 'p']);
            $kelas = $faker->randomElement(['X', 'XI', 'XII']);
            $jurusan = $faker->numberBetween(2, 5);
            $tanggalLahir = $faker->date();
            $tempatLahir = $faker->city;

            $this->db->insert('siswa', ['nama' => $nama, 'nis' => $nis, 'alamat' => $alamat, 'jk' => $jk, 'kelas' => $kelas, 'jurusan_id' => $jurusan, 'tanggal_lahir' => $tanggalLahir, 'tempat_lahir' => $tempatLahir]);
        }
    }


    public function delete()
    {
        $siswaId = $this->uri->segment(3);
        $result = $this->db->delete('siswa', ['id' => $siswaId]);
        if ($result) {
            $this->session->set_flashdata('message', $result);
            redirect('siswa');
        }
    }
}
