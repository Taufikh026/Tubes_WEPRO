<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControllerSingle_sapi extends CI_Controller {

	public function index()
	{
		$this->load->view('templates/header');
        $this->load->view('single-sapi');
		$this->load->view('templates/footer');
	}
}
