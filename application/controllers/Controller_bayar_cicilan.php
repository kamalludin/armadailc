<?php
class Controller_bayar_cicilan extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('model_armada');
    }

    public function index(){
        $this->load->view('view_sub_menu/header');
        $this->load->view('view_sub_menu/footer');
        $this->load->view('view_menu/view_bayar_cicilan');
    }

}
