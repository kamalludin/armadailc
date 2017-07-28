<?php
class Armada extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('model_armada');

        if($this->session->userdata('status') != "login"){
            redirect(base_url("login"));
        }
    }

    public function index(){
        $this->load->view('view_sub_menu/header');
        $this->load->view('view_sub_menu/footer');
        $this->load->view('view_menu/data_armada');
    }

    public function list_kota(){
        $query = 'SELECT kode_kota, nama_kota from kota';
        $data['armada'] = $this->model_armada->list_armada($query)->result();
        $data_json = json_encode($data['armada']);
        $this->output->set_output($data_json);
    }

    public function list_armada_global(){
        $query = 'SELECT k.nama_kota, c.nama_cabang, a.no_polisi, kn.merk_kendaraan, kn.type_kendaraan, w.warna
            FROM armada a
            LEFT JOIN kota k ON k.kode_kota = a.kode_kota
            LEFT JOIN cabang c ON c.kode_cabang = a.kode_cabang
            LEFT JOIN kendaraan kn ON kn.kode_kendaraan = a.kode_kendaraan
            LEFT JOIN warna w ON w.kode_warna = a.kode_warna';
        $data['armada'] = $this->model_armada->list_armada($query)->result();
        $data_json = json_encode($data['armada']);
        $this->output->set_output($data_json);
    }

    public function list_armada_kota(){
        $kode_kota = $this->input->post('kode_kota');
        //$kode_cabang = 'ADK';
        $query = 'SELECT k.nama_kota, c.nama_cabang, a.no_polisi, kn.merk_kendaraan, kn.type_kendaraan, w.warna
            FROM armada a
            LEFT JOIN kota k ON k.kode_kota = a.kode_kota
            LEFT JOIN cabang c ON c.kode_cabang = a.kode_cabang
            LEFT JOIN kendaraan kn ON kn.kode_kendaraan = a.kode_kendaraan
            LEFT JOIN warna w ON w.kode_warna = a.kode_warna
            WHERE a.kode_kota = "'.$kode_kota.'"';
        $data['armada'] = $this->model_armada->list_armada($query)->result();
        $data_json = json_encode($data['armada']);
        $this->output->set_output($data_json);
    }

    public function list_armada_detail(){
        $nopol = $this->input->post('no_polisi');
        //$nopol = 'B9035TCG';
        $query = 'SELECT k.nama_kota, c.nama_cabang, p.nama_pemilik, a.no_polisi, kn.merk_kendaraan, kn.type_kendaraan, a.tgl_pajak, a.tgl_perpanjang_stnk, a.tgl_kir, a.no_mesin, a.no_rangka, w.warna, a.thn_produksi, l.nama_leasing, a.ang_selesai, a.total_ang
            FROM armada a
            LEFT JOIN kota k ON k.kode_kota = a.kode_kota
            LEFT JOIN cabang c ON c.kode_cabang = a.kode_cabang
            LEFT JOIN pemilik p ON p.kode_pemilik = a.kode_pemilik
            LEFT JOIN kendaraan kn ON kn.kode_kendaraan = a.kode_kendaraan
            LEFT JOIN warna w ON w.kode_warna = a.kode_warna
            LEFT JOIN leasing l ON l.kode_leasing = a.kode_leasing
            WHERE a.no_polisi = "'.$nopol.'"';
        $data['armada'] = $this->model_armada->list_armada($query)->result();
        $data_json = json_encode($data['armada']);
        $this->output->set_output($data_json);
    }
    
}
