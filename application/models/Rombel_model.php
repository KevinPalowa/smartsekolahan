<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rombel_model extends CI_Model
{
    public function getall()
    {
        return $this->db->get('rombel')->result_array();
    }
}
