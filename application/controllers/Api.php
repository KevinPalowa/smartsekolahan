<?php
defined('BASEPATH') or exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Api extends RestController
{

    function __construct()
    {
        // Construct the parent class
        parent::__construct();
        $this->load->model('Siswa_model', 'siswa');
    }

    public function index_get()
    {
        // Users from a data store e.g. database

        echo $id = $this->get('id');

        if ($id === null) {
            // Check if the users data store contains users

            // Set the response and exit
            $users = $this->siswa->siswa();
            $this->response($users, 200);
        } else {
            $users = $this->siswa->siswa();
            if (array_key_exists($id, $users)) {
                $this->response($users[$id], 200);
            } else {
                $this->response([
                    'status' => false,
                    'message' => 'No such user found'
                ], 404);
            }
        }
    }
}
