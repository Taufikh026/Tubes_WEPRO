<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControllerEvent_page extends CI_Controller {

	public function index()
	{
		$this->load->view('templates/header');
        $this->load->view('event-page');
		$this->load->view('templates/footer');
	}
}
