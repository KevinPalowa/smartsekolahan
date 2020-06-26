<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Guru_model extends CI_Model
{
    public function guru($aksi = false, $id = false)
    {
        if ($aksi == 'detail') {
            return $this->db->get_where('guru', ['id' => $id])->row_array();
        } elseif ($aksi == 'delete') {
            return $this->db->delete('guru', ['id' => $id]);
        } elseif ($aksi == 'insert') {
            return $this->db->insert('guru', $id);
        }
        return $this->db->get('guru')->result_array();
    }
    public function count()
    {
        return $this->db->count_all('guru');
    }
}
