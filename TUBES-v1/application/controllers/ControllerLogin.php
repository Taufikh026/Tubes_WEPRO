<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControllerLogin extends CI_Controller {
	function __construct(){
        parent::__construct();
        $this->load->model('Users');
    }
	public function index()
	{
		$this->load->view('templates/headerLogNReg');
        $this->load->view('login');
		$this->load->view('templates/footerLogNReg');
	}
	public function LoginCheck(){
		$username = $this->input->post('username',true);
		$password = $this->input->post('password',true);
		
		if(!empty($username) && !empty($password) && !empty($password)){
			$where = array(
                'nama' => $username,
                'password' => $password
                );
            $cek = $this->Users->CheckUsername($where)->num_rows();
            $id  = $this->Users->GetUsernameId($username,$password);
            if($cek > 0){
                
                $data_session = array(
					'status' => "login",
                    'nama' => $username,
                    'id_pengguna' => $id['id'],
                    'status_user' => $id['status']                    
                    );
        
                $this->session->set_userdata($data_session);
                redirect(base_url('ControllerIndex'), 'refresh');  
            }else{
                echo "<script> alert('Username dan password salah !');</script>";
                redirect(base_url('ControllerLogin'));  
            }
		}else{
			echo "<script> alert('isi dengan benar');</script>";
            redirect(base_url('ControllerLogin'));
		}
    }
    public function logout(){

		$data_session = array('status' => "",'nama'=>"", 'id_pengguna' =>"",'status_user' => "");
		$this->session->set_userdata($data_session);
		redirect('ControllerIndex');

	}
}
