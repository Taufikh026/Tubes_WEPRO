<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControllerIndex extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('Tiket');
		$this->load->helper('url');
		$this->load->model('Users');

	}
	public function index()
	{
		$data['user'] = $this->Users->getUser(); 
		$data['tiket'] = $this->Tiket->GetData()->result(); 
		$this->load->view('templates/header',$data);
        $this->load->view('index');
		$this->load->view('templates/footer');
	}
	function InsertTiket(){
		$nama = $this->input->post('nama');
		$harga = $this->input->post('hargaTiket');
		$jumlah = $this->input->post('jumlahTiket');
		date_default_timezone_set('Asia/Jakarta');
		$date = date('m/d/Y h:i:s a', time());

		$data = array(
			'nama'=>$nama,
			'harga_tiket' => $harga,
			'jumlah' => $jumlah,
			'tanggal'=>$date,
			'status'=> "belum lunas",
			'id_user'=> $_SESSION['id_pengguna']
		);
		$this->Tiket->input_data($data,'tiket');
		echo "<script> alert('berhasil pesan');</script>";
		redirect('ControllerIndex');
	}
	

	
}
