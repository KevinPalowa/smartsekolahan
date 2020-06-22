<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'My profile';
        $data['user'] = $this->db->get_where('user', [
            'email' => $this->session->userdata('email')
        ])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/footer');
    }
    public function edit()
    {
        $data['title'] = 'Edit profile';
        $data['user'] = $this->db->get_where('user', [
            'email' => $this->session->userdata('email')
        ])->row_array();

        $this->form_validation->set_rules('name', 'Full Name', 'required|trim');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $name = $this->input->post('name');
            $email = $this->input->post('email');

            $this->db->set('name', $name);

            // cek ada gambar
            $upload_image = $_FILES['image']['name'];

            if ($upload_image) {
                $config['upload_path']          = './assets/img/profile/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 2048;
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('image')) {
                    $oldImg = $data['user']['image'];
                    if ($oldImg != 'default.png') {
                        unlink(FCPATH . "assets/img/profile/" . $oldImg);
                    }
                    $newImg = $this->upload->data('file_name');
                    $this->db->set('image', $newImg);
                } else {
                    echo $this->upload->display_errors();
                    die();
                }
            }

            $this->db->where('email', $email);
            $this->db->update('user');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Your profile has been updated
            </div>');
            redirect('user');
        }
    }
    public function changepassword()
    {
        $data['title'] = 'Change Password';
        $data['user'] = $this->db->get_where('user', [
            'email' => $this->session->userdata('email')
        ])->row_array();
        $this->form_validation->set_rules('currentpassword', 'Current password', 'required|trim');
        $this->form_validation->set_rules('newpassword1', 'New password', 'required|trim|min_length[3]|matches[newpassword2]');
        $this->form_validation->set_rules('newpassword2', 'Repeat password', 'required|trim|min_length[3]|matches[newpassword1]');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/changepassword', $data);
            $this->load->view('templates/footer');
        } else {
            $currentPassword = $this->input->post('currentpassword');
            $newPw = $this->input->post('newpassword1');
            if (!password_verify($currentPassword, $data['user']['password'])) {
                $this->session->set_flashdata('message', 'Wrong current password');
                redirect('user/changepassword');
            } else {
                if ($currentPassword == $newPw) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    New password cannot be the same as old password
                    </div>');
                    redirect('user/changepassword');
                } else {
                    $password_hash = password_hash($newPw, PASSWORD_DEFAULT);
                    $this->db->set('password', $password_hash);
                    $this->db->where('email', $this->session->userdata('email'));
                    $this->db->update('user');
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    Password changed!
                    </div>');
                    redirect('user/changepassword');
                }
            }
        }
    }
}
