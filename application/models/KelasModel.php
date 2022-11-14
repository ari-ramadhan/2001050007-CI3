<?php

class KelasModel extends CI_Model{

    private $table = "tabel_2001050007";

    public function getAll () {
        return $this->db->get($this->table)->result();
    }

    public function tambahData() {
        $data = [

            "fakultas" => $this->input->post('fakultas', true),
            "prodi" => $this->input->post('prodi', true),
            "kelas" => $this->input->post('kelas', true),
            "isi" => $this->input->post('isi', true)
        ];

        $this->db->insert('tabel_2001050007', $data);
        return $this->db->affected_rows();

    }

}

?>