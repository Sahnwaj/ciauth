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

	public function addUsers($x){

		 $firstname= $this->input->post('first_name');
         $lastname= $this->input->post('last_name');
         $fathername= $this->input->post('father_name');
         $email= $this->input->post('email');
         $mobile= $this->input->post('mobile');
         $country= $this->input->post('country');


        // $image= $this->input->post('images');
         //print_r("dfdf"); exit();
         
		$w = array('first_name'=>$firstname, 'last_name'=>$lastname, 'father_name'=>$fathername, 'email'=>$email, 'mobile'=>$mobile, 'country'=>$country, 'userimage'=>$x);

		

		
		 return $this->db->insert('users',$w);

		 //print_r("dfdf"); exit();
	}

	public function fetch_data(){

		$goal=$this->db->get('users');

		return $goal;

	}



}

?>