<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of barang
 *
 * @author muhriansyah
 */
class barang extends CI_Model {

    private $output;

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function daftar_barang() {
        $this->output = '';
        $query = $this->db->query('SELECT * FROM barang');
        $this->output .= '<form name="form1">';
        $this->output .= '<table border="0" class="table bordered">';
        $this->output .= ''
                . '<th><input name="msg[]" type="checkbox" '
                . 'onclick="tandaSemua(this)"/> '
                . '</th><th> Nama </th> <th> Harga </th> '
                . '<th> Tanggal pengadaan</th> ';

        foreach ($query->result() as $row) {
            $this->output .= ""
                    . "<tr>"
                    . "<td> <input type='checkbox' value='$row->id' name='msg[]'/></td>"
                    . "<td> $row->nama </td>"
                    . "<td> $row->harga </td>"
                    . "<td> $row->tgl_pengadaan</td></tr>";
        }
        $this->output .= '</table></form>';
        return $this->output;
    }

    public function tambah_barang($isian = array()) {
        $data = array(
            'id' => '',
            'nama' => $isian['nama'],
            'harga' => $isian['harga'],
            'tgl_pengadaan' => $isian['tgl'],
            'keterangan' => $isian['keterangan'],
        );
        $query = $this->db->insert('barang', $data);
        if ($query) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function ubah_barang() {
        
    }

}
