<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControllerSingle_ogoh extends CI_Controller {

	public function index()
	{
		$this->load->view('templates/header');
        $this->load->view('single-ogoh');
		$this->load->view('templates/footer');
	}
}
