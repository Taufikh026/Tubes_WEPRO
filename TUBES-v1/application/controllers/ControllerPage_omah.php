<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControllerPage_omah extends CI_Controller {

	public function index()
	{
		$this->load->view('templates/header');
        $this->load->view('page-omah');
		$this->load->view('templates/footer');
	}
}
