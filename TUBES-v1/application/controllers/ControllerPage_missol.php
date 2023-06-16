<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControllerPage_missol extends CI_Controller {

	public function index()
	{
		$this->load->view('templates/header');
        $this->load->view('page-missol');
		$this->load->view('templates/footer');
	}
}
