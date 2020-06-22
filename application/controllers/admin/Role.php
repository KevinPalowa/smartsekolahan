<?php
class Role extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Role';
        $data['user'] = $this->db->get_where('user', [
            'email' => $this->session->userdata('email')
        ])->row_array();
        $this->form_validation->set_rules('role', "Role", 'required|trim');
        if ($this->form_validation->run() == FALSE) {
            $data['role'] = $this->db->get('user_role')->result_array();
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/role/index', $data);
            $this->load->view('templates/footer');
        } else {
            $role = $this->input->post('role');
            $data = [
                'role' => $role
            ];
            $result = $this->db->insert('user_role', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
           Role added!
          </div>');
            redirect('admin/role');
        }
    }
    public function access($role_id)
    {
        $data['title'] = 'Role';
        $data['user'] = $this->db->get_where('user', [
            'email' => $this->session->userdata('email')
        ])->row_array();
        $data['role'] = $this->db->get_where('user_role', [
            'id' => $role_id
        ])->row_array();
        $this->db->where('id != ', 1);
        $data['menu'] = $this->db->get('user_menu')->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/role/role-access', $data);
        $this->load->view('templates/footer');
    }

    public function changeaccess()
    {
        $menu_id = $this->input->post('menuId');
        $role_id = $this->input->post('roleId');
        $data = [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ];

        $result = $this->db->get_where('user_access_menu', $data);

        if ($result->num_rows() < 1) {
            $this->db->insert('user_access_menu', $data);
        } else {
            $this->db->delete('user_access_menu', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Access Change!
          </div>');
        }
    }

    public function delete()
    {
        $roleId = $this->uri->segment(4);
        $result = $this->db->delete('user_role', ['id' => $roleId]);
        if ($result) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Role deleted!
          </div>');
            redirect('admin/role');
        }
    }
    public function edit()
    {
        $data['title'] = 'Role';
        $data['user'] = $this->db->get_where('user', [
            'email' => $this->session->userdata('email')
        ])->row_array();
        $data['roledit'] = $this->db->get_where('user_role', ['id' => $this->uri->segment(4)])->row_array();
        $this->form_validation->set_rules('role', "Role", 'required|trim');
        if ($this->form_validation->run() == FALSE) {
            $data['role'] = $this->db->get('user_role')->result_array();
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/role/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $role = $this->input->post('role');
            $roleId = $this->input->post('id');
            $this->db->where('id', $roleId);
            $this->db->update('user_role', [
                'role' => $role
            ]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
           Role edited!
          </div>');
            redirect('admin/role');
        }
    }
}
