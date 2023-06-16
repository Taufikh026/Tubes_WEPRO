<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControllerPage_kei extends CI_Controller {

	public function index()
	{
		$this->load->view('templates/header');
        $this->load->view('page-kei');
		$this->load->view('templates/footer');
	}
}
