<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControllerRegister extends CI_Controller {
	function __construct(){
        parent::__construct();
        $this->load->model('Users');
    }
	public function index()
	{
		$this->load->view('templates/headerLogNReg');
        $this->load->view('register');
		$this->load->view('templates/footerLogNReg');
	}
	public function Register()
	{
        $username = $this->input->post('username', true);
        $password = $this->input->post('password', true);
        $confirmpass = $this->input->post('confirmpassword', true);
		$where =array('nama' => $username);
        $cek = $this->Users->CheckUsername($where)->num_rows();
		if(!empty($username) && !empty($password) && !empty($password)){
			if($password === $confirmpass){
				if($cek > 0){ 
					echo "<script> alert('username ga gaul');</script>";
					redirect(base_url('ControllerRegister'), 'refresh' );   
				}
				else{
					$this->Users->RegisAkun();
					echo "<script> alert('Hore berhasil di buat');</script>";
					redirect(base_url('ControllerLogin'), 'refresh' );   

				}  
			}else{
				echo "<script> alert('Password tidak sama');</script>";
				redirect(base_url('ControllerRegister'), 'refresh'); 
			}
		}else{
			echo "<script> alert('ISI yang benar');</script>";
			redirect(base_url('ControllerRegister'), 'refresh'); 
		}
		
		        
        
    }
}
