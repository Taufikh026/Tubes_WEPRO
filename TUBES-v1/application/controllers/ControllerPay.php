<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControllerPay extends CI_Controller {
    function __construct(){
		parent::__construct();		
		$this->load->model('Tiket');
		$this->load->model('Users');

	}
	public function index()
	{
		$data['user'] = $this->Users->getUser(); 
		$data['tiket'] = $this->Tiket->GetData()->result(); 
		$this->load->view('templates/header',$data);
        $this->load->view('pay',$data);
		$this->load->view('templates/footer');
	}
    function Pay($id){
		$status = $this->input->post('status',true);
		
		$data = array(
			'status'=>$status
		);
        $where = array(
            'id_tiket'=>$id,
        );
		$this->Tiket->update_data($where, $data);
        redirect('ControllerPay');

	}
}
