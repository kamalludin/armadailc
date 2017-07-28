<?php
class Barang extends CI_Controller{
    function index(){
        $this->load->model('model_barang');
        
        //untuk pengecekan data dari database
//        $barang = $this->model_barang->list_barang()->result();
//        print_r($barang);
//        die;
        
        $judul = "Daftar Barang";
        $data['judul'] = $judul;
        $data['barang'] = $this->model_barang->list_barang()->result();
        
        $this->load->view('list_barang', $data);
    }

    function input(){
    	$this->load->view('input_barang');
    }

    function input_simpan(){
    	$databarang = array(
    		'kode_barang'	=>	$this->input->post('kode_barang'),
    		'nama_barang'	=>	$this->input->post('nama_barang'),
    		'harga'			=>	$this->input->post('harga'));
    	$this->db->insert('barang', $databarang);
    	redirect('barang');
    }

    function edit(){
        $this->load->model('model_barang');
        $kode_barang = $this->uri->segment(3);
        $data['product'] = $this->model_barang->product($kode_barang)->row_array();
        $this->load->view('edit_barang',$data);
    }

    function edit_simpan(){
        $id         = $this->input->post('id');
        $databarang = array(
            'kode_barang'   =>  $this->input->post('kode_barang'),
            'nama_barang'   =>  $this->input->post('nama_barang'),
            'harga'         =>  $this->input->post('harga'));
        $this->db->where('kode_barang', $id);
        $this->db->update('barang', $databarang);
        redirect('barang');
    }

    function delete(){
        $kode_barang = $this->uri->segment(3);
        $this->db->where('kode_barang', $kode_barang);
        $this->db->delete('barang');
        redirect('barang');
    }
}
