<?php
class admin extends CI_Model
{
	function validateUser($uname,$pwd){
		$this->db->where('adminname', $uname);
		$this->db->where('pwd', $pwd);
		$query = $this->db->get('admin');
		
		if($query->num_rows == 1){
			return true;
		}else{
			return false;
		}
	}
}
?>