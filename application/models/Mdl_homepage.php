<?php

class Mdl_homepage extends CI_Model
{

    public function lastestpost()
    {
        $this->db->order_by("tanggal", "DESC");
        $this->db->limit(5);
        return $this->db->get("kebudayaan")->result_array();
    }

    public function kategori_kebudayaan($jenis_budaya)
    {
        if ($jenis_budaya == 1) {
            return "Budaya Jawa Tengah";
        } else if ($jenis_budaya == 2) {
            return "Budaya Jawa Barat";
        } else if ($jenis_budaya == 3) {
            return "Budaya Jawa Timur";
        }
    }

    function data_budaya($number, $offset)
    {
        return $this->db->get('kebudayaan', $number, $offset)->result();
    }

    public function jumlah_budaya()
    {
        return $this->db->get('kebudayaan')->num_rows();
    }
}
