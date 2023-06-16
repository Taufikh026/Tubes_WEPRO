<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControllerforgotPW extends CI_Controller {

	public function index()
	{
		$this->load->view('templates/headerLogNReg');
        $this->load->view('forgotPw');
		$this->load->view('templates/footerLogNReg');
	}
}
