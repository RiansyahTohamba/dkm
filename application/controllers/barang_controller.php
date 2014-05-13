<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of barang_controller
 *
 * @author muhriansyah
 */
class barang_controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('barang');
        $this->load->helper('form');
    }

    public function index() {
        $this->daftar_barang();
    }

    public function daftar_barang() {
        $data = array(
            'daftar' => $this->barang->daftar_barang(),
        );
        if(isset($_POST[''])){
            
        }
        show('beranda', $data);
    }

    private function validasi_form() {
        $this->load->library('form_validation');
        $config = array(
            array(
                'field' => 'nama',
                'label' => 'Nama',
                'rules' => 'required|min_length[5]|max_length[12]',
            ),
            array(
                'name' => 'harga',
                'label' => 'Harga',                
                'rules' => 'required|max_length[12]',
            ),
            array(
                'name' => 'tgl',
                'label' => 'Tanggal Pengadaan',              
                'rules' => 'required',
            ),
            array(
                'name' => 'keterangan',
                'label' => 'Keterangan',                
                'rules' => 'max_length[300]',
            ),
        );
        $this->form_validation->set_rules($config);
        return $this->form_validation->run() ? TRUE : FALSE;
    }

    public function tambah_barang() {

        $data = array(
            //'daftar' => $this->barang->daftar_barang(),                        
            'fields' => array(
                array(
                    'name' => 'nama',
                    'label' => 'Nama',
                    'type' => 'text',
                    'default' => '',
                ),
                array(
                    'name' => 'harga',
                    'label' => 'Harga',
                    'type' => 'text',
                    'default' => '',
                ),
                array(
                    'name' => 'tgl',
                    'label' => 'Tanggal Pengadaan',
                    'type' => 'date',
                    'default' => '',
                ),
                array(
                    'name' => 'keterangan',
                    'label' => 'Keterangan',
                    'type' => 'text',
                    'default' => '',
                ),
            ),
        );
        if ($this->validasi_form() == FALSE) {
            show('tambah_barang', $data);
        } else {
            $isian = array(
                'nama' => $_POST['nama'],
                'harga' => $_POST['harga'],
                'tgl' => $_POST['tgl'],
                'keterangan' => $_POST['keterangan'],                
            );
            $status = $this->barang->tambah_barang($isian);
            if ($status == TRUE) {
                $link = 'beranda';
                $notif = 'berhasil';
            } else {
                $link = 'tambah';
                $notif = 'gagal';
            }
            //menampilkan pop-up
            echo "<body onload='notifikasi()'>
                <script type='text/javascript'>
                    function notifikasi(){
                        alert('penyimpanan $notif')
                        location.href = '" . base_url() . "/index.php/$link';
                }</script></body>";
        }
    }

    public function ubah_barang() {
        
    }

}
