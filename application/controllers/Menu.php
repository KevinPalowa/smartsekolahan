<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Menu Management';
        $data['user'] = $this->db->get_where('user', [
            'email' => $this->session->userdata('email')
        ])->row_array();
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->form_validation->set_rules('menu', "Menu", 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('menu/index', $data);
            $this->load->view('templates/footer');
        } else {
            $this->db->insert('user_menu', ['menu' => $this->input->post('menu')]);
            $this->session->set_flashdata('message', 'New menu added');
            redirect('menu');
        }
    }
    public function menuedit()
    {
        $data['title'] = 'Menu management';
        $data['user'] = $this->db->get_where('user', [
            'email' => $this->session->userdata('email')
        ])->row_array();
        $data['menuEdit'] = $this->db->get_where('user_menu', ['id' => $this->uri->segment(3)])->row_array();
        $this->form_validation->set_rules('menu', "Menu", 'required|trim');
        if ($this->form_validation->run() == FALSE) {
            $data['role'] = $this->db->get('user_role')->result_array();
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('menu/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $menu = $this->input->post('menu');
            $menuId = $this->input->post('id');
            $this->db->where('id', $menuId);
            $this->db->update('user_menu', [
                'menu' => $menu
            ]);
            $this->session->set_flashdata('message', 'Menu edited!');
            redirect('menu');
        }
    }

    public function menudelete()
    {
        $menuId = $this->uri->segment(3);
        $result = $this->db->delete('user_menu', ['id' => $menuId]);
        if ($result) {
            $this->session->set_flashdata('message', 'Menu deleted!');
            redirect('menu');
        }
    }

    public function submenu()
    {
        $data['title'] = 'Submenu Management';
        $data['user'] = $this->db->get_where('user', [
            'email' => $this->session->userdata('email')
        ])->row_array();
        $this->load->model('menu_model', 'menu');
        $data['subMenu'] = $this->menu->getSubMenu();
        $data['menu'] = $this->db->get('user_menu')->result_array();


        $this->form_validation->set_rules('title', "Title", 'required');
        $this->form_validation->set_rules('menu_id', "Menu", 'required');
        $this->form_validation->set_rules('url', "Url", 'required');
        $this->form_validation->set_rules('icon', "Icon", 'required');

        if ($this->form_validation->run() == FALSE) {
            # code...
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('menu/submenu', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'title' => $this->input->post('title'),
                'menu_id' => $this->input->post('menu_id'),
                'url' => $this->input->post('url'),
                'icon' => $this->input->post('icon'),
                'is_active' => $this->input->post('is_active')
            ];
            $this->db->insert('user_sub_menu', $data);
            $this->session->set_flashdata('message', 'New Sub menu added');
            redirect('menu/submenu');
        }
    }

    public function submenuedit()
    {
        $data['title'] = 'Menu management';
        $data['user'] = $this->db->get_where('user', [
            'email' => $this->session->userdata('email')
        ])->row_array();
        $data['subMenuEdit'] = $this->db->get_where('user_sub_menu', ['id' => $this->uri->segment(3)])->row_array();
        $this->form_validation->set_rules('submenu', "Sub menu", 'required|trim');
        if ($this->form_validation->run() == FALSE) {
            $data['role'] = $this->db->get('user_role')->result_array();
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('menu/subedit', $data);
            $this->load->view('templates/footer');
        } else {
            $subMenu = $this->input->post('submenu');
            $subMenuId = $this->input->post('id');
            $url = $this->input->post('url');
            $isactive = $this->input->post('is_active');
            $icon = $this->input->post('icon');
            $this->db->where('id', $subMenuId);
            $this->db->update('user_sub_menu', [
                'title' => $subMenu,
                'url' => $url,
                'icon' => $icon,
                'is_active' => $isactive
            ]);
            $this->session->set_flashdata('message', 'Sub menu edited!');
            redirect('menu/submenu');
        }
    }

    public function submenudelete()
    {
        $subMenuId = $this->uri->segment(3);
        $result = $this->db->delete('user_sub_menu', ['id' => $subMenuId]);
        if ($result) {
            $this->session->set_flashdata('message', 'Sub menu deleted!');
            redirect('menu/submenu');
        }
    }
}
