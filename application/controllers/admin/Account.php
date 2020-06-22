<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Account extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Account';
        $data['user'] = $this->db->get_where('user', [
            'email' => $this->session->userdata('email')
        ])->row_array();
        $data['users'] = $this->db->query('SELECT user.id, name, email, role_id, role FROM user INNER JOIN user_role ON user.role_id = user_role.id')->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/account/index', $data);
        $this->load->view('templates/footer');
    }

    public function edit()
    {
        $data['title'] = 'Account';
        $data['user'] = $this->db->get_where('user', [
            'email' => $this->session->userdata('email')
        ])->row_array();
        $data['users'] = $this->db->get_where('user', [
            'id' => $this->uri->segment(4)
        ])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/account/edit', $data);
        $this->load->view('templates/footer');
    }
    public function delete()
    {
        $accountId = $this->uri->segment(4);
        $result = $this->db->delete('user', ['id' => $accountId]);
        if ($result) {
            $this->session->set_flashdata('message', 'Account deleted!');
            redirect('admin/account');
        }
    }
    public function reset()
    {
        $accountId = $this->uri->segment(4);
        $result = $this->db->get_where('user', ['id' => $accountId])->row_array();
        $newPw = password_hash($result['email'], PASSWORD_DEFAULT);
        $this->db->where('id', $accountId);
        $this->db->update('user', [
            'password' => $newPw
        ]);
        $this->session->set_flashdata('message', 'Password succesfully reset, new password same with email');
        redirect('admin/account');
    }
}
