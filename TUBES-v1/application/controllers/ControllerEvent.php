<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControllerEvent extends CI_Controller {
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
        $this->load->view('event');
		$this->load->view('templates/footer');
	}
	
}
