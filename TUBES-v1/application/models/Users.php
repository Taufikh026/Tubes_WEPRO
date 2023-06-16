<?php
class Users extends CI_model{

    
	public function getUser()
	{
		$this->db->select('*');
		$this->db->from('users');
		$quary = $this->db->get();
		return $quary->result();
	}

	public function RegisAkun()
	{
		$data = [
			"status"=>"user",
			"nama" => $this->input->post('username', true),
            "password" => $this->input->post('password', true),
		];
        $this->db->insert('users',$data);
	}
	function CheckUsername($nama){		
		return $this->db->get_where('users',$nama);
	}
	public function GetUsernameId($username,$pass)
	{
		$this->db->where('nama', $username);
		$this->db->where('password',$pass);
		return $this->db->get('users',)->row_array();
	}

}
