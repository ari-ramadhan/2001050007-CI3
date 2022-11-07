<?php

class KelasModel extends CI_Model{

    private $table = "tabel_2001050007";

    public function getAll () {
        return $this->db->get($this->table)->result();
    }

}

?>