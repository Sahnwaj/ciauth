<?php

class registermodel extends CI_Model {

	public function registerUser($username, $password){

		return $this->db->insert('registration', ['Name'=>$username, 'Password'=>$password]);
	}


}

?>