<?php
class Controller_input_armada extends CI_Controller{
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
        $this->load->view('view_menu/view_input_armada');
    }

    public function list_kota(){
        $query = 'SELECT kode_kota, nama_kota from kota';
        $data['armada'] = $this->model_armada->list_armada($query)->result();
        $data_json = json_encode($data['armada']);
        $this->output->set_output($data_json);
    }
    
    public function list_cabang(){
        $kode_kota = $this->input->post('kode_kota');
        $query = 'SELECT kode_cabang, nama_cabang from cabang where kode_kota="'.$kode_kota.'"';
        $data['armada'] = $this->model_armada->list_armada($query)->result();
        $data_json = json_encode($data['armada']);
        $this->output->set_output($data_json);
    }

    public function list_pemilik(){
        $query = 'SELECT kode_pemilik, nama_pemilik from pemilik';
        $data['armada'] = $this->model_armada->list_armada($query)->result();
        $data_json = json_encode($data['armada']);
        $this->output->set_output($data_json);
    }

    public function list_merk(){
        $query = 'SELECT merk_kendaraan from kendaraan group by merk_kendaraan';
        $data['armada'] = $this->model_armada->list_armada($query)->result();
        $data_json = json_encode($data['armada']);
        $this->output->set_output($data_json);
    }

    public function list_type(){
        $merk = $this->input->post('merk_kendaraan');
        $query = 'SELECT kode_kendaraan, merk_kendaraan, type_kendaraan from kendaraan where merk_kendaraan ="'.$merk.'"';
        $data['armada'] = $this->model_armada->list_armada($query)->result();
        $data_json = json_encode($data['armada']);
        $this->output->set_output($data_json);
    }

    public function list_warna(){
        $query = 'SELECT kode_warna, warna from warna';
        $data['armada'] = $this->model_armada->list_armada($query)->result();
        $data_json = json_encode($data['armada']);
        $this->output->set_output($data_json);
    }

    public function list_leasing(){
        $query = 'SELECT kode_leasing, nama_leasing from leasing';
        $data['armada'] = $this->model_armada->list_armada($query)->result();
        $data_json = json_encode($data['armada']);
        $this->output->set_output($data_json);
    }

    public function input_armada(){
        $kode_kota      = $this->input->post('kode_kota');
        $kode_cabang    = $this->input->post('kode_cabang');
        $kode_pemilik   = $this->input->post('kode_pemilik');
        $kode_kendaraan = $this->input->post('kode_kendaraan');
        $no_polisi      = $this->input->post('no_polisi');
        $tgl_pajak      = $this->input->post('tgl_pajak');
        $tgl_perpanjang = $this->input->post('tgl_perpanjang');
        $tgl_kir        = $this->input->post('tgl_kir');
        $no_mesin       = $this->input->post('no_mesin');
        $no_rangka      = $this->input->post('no_rangka');
        $kode_warna     = $this->input->post('kode_warna');
        $thn_produksi   = $this->input->post('thn_produksi');
        $kode_leasing   = $this->input->post('kode_leasing');
        $ang_selesai    = $this->input->post('ang_selesai');
        $total_ang      = $this->input->post('total_ang');

        $dataarmada = array(
            "kode_kota"             =>  $kode_kota,
            "kode_cabang"           =>  $kode_cabang,
            "kode_pemilik"          =>  $kode_pemilik,
            "kode_kendaraan"        =>  $kode_kendaraan,
            "no_polisi"             =>  $no_polisi,
            "tgl_pajak"             =>  $tgl_pajak,
            "tgl_perpanjang_stnk"   =>  $tgl_perpanjang,
            "tgl_kir"               =>  $tgl_kir,
            "no_mesin"              =>  $no_mesin,
            "no_rangka"             =>  $no_rangka,
            "kode_warna"            =>  $kode_warna,
            "thn_produksi"          =>  $thn_produksi,
            "kode_leasing"          =>  $kode_leasing,
            "ang_selesai"           =>  $ang_selesai,
            "total_ang"             =>  $total_ang
        );
        /*var_dump($dataarmada);
        exit();*/
        $result = $this->db->insert('armada', $dataarmada);
        $this->output->set_output($result);
    }
}
