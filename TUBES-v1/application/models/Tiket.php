<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Tiket extends CI_Model{
	function GetData(){
		return $this->db->get('tiket');
	}
    
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
    
 
	function update_data($where, $data){
		
		$this->db->where($where);
		$this->db->update('tiket',$data);
	}	
	

}

