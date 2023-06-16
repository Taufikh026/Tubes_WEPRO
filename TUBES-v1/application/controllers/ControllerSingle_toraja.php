<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControllerSingle_toraja extends CI_Controller {

	public function index()
	{
		$this->load->view('templates/header');
        $this->load->view('single-toraja');
		$this->load->view('templates/footer');
	}
}
