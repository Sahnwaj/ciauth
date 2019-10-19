<?php

class registration extends CI_controller{

  public function __construct()
     {
        parent::__construct();

        $this->load->library('form_validation');
      }

 public function index(){

 	$this->load->view('forms/login');
 }
public function signup()
        {
        	// print_r('hffh'); exit;
            //$this->load->database('logindb');
	        $this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');

			if ($this->form_validation->run()== TRUE )
                {
                	// exit('here');
                       $username= $this->input->post('username');
                       $password= $this->input->post('password');
                       $this->load->model('registermodel');
                     if( $this->registermodel->registerUser($username, $password)){

                     		echo "Registration successful";
                     }
                     else{
                     	echo "registration failed";
                     }
                }
                else
                {

                		$this->load->view('forms/login');
                }
          


    	}


  }
  ?>