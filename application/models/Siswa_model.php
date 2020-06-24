<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa_model extends CI_Model
{
    public function siswa($aksi = false, $id = false)
    {
        if ($aksi == 'detail') {
            return $this->db->get_where('siswa', ['id' => $id])->row_array();
        } elseif ($aksi == 'delete') {
            return $this->db->delete('siswa', ['id' => $id]);
        } elseif ($aksi == 'insert') {
            return $this->db->insert('siswa', $id);
        }
        return $this->db->get('siswa')->result_array();
    }

    public function withrombel()
    {
        return $this->db->query('SELECT siswa.id AS id_siswa,siswa.nama AS nama_siswa, rombel.nama AS nama_rombel,`nisn`,`alamat`,`jk`,`rombel_id`,`tempat_lahir`,`tanggal_lahir` FROM siswa INNER JOIN rombel ON rombel_id = rombel.id')->result_array();
    }
}
