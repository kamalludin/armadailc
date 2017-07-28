<?php
class Controller_pindah_armada extends CI_Controller{
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
        $this->load->view('view_menu/view_pindah_armada');
    }

    public function list_nopol(){
        $cabang = $this->input->post('kode_cabang');
        $query = 'SELECT no_polisi from armada where kode_cabang="'.$cabang.'"';
        $data['armada'] = $this->model_armada->list_armada($query)->result();
        $data_json = json_encode($data['armada']);
        $this->output->set_output($data_json);
    }

    public function pindah_armada(){
        $kode_kota      = $this->input->post('kode_kota');
        $kode_cabang    = $this->input->post('kode_cabang');
        $no_polisi      = $this->input->post('no_polisi');
        $datapindah = array(
            'kode_kota'   =>  $kode_kota,
            'kode_cabang'   =>  $kode_cabang
        );
        $this->db->where('no_polisi', $no_polisi);
        $result = $this->db->update('armada', $datapindah);
        $this->output->set_output($result);
    }

}
