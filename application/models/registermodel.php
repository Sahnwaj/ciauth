<?php

class registermodel extends CI_Model {

	public function registerUser($username, $password){

		return $this->db->insert('registration', ['Name'=>$username, 'Password'=>$password]);
	}

	public function loginUser($username, $password){

		$this->db->where('Name',$username);
		$this->db->where('Password',$password);

		$query=$this->db->get('registration');
		//SELECT * FROM registraton WHERE Name='$username' and Password='$password';

		if($query->num_rows() >0)
		{
			return true;
		}
		else{
			return false;
		}
	}


}

?>