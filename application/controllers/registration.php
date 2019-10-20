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

      public function logincheck()
        {
          // print_r('hffh'); exit;
            //$this->load->database('logindb');

           $this->form_validation->set_rules('username', 'Username', 'required');
           $this->form_validation->set_rules('password', 'Password', 'required');

         if ($this->form_validation->run() )
                {
                  $username= $this->input->post('username');
                  $password= $this->input->post('password');
                   $this->load->model('registermodel');
                   if($this->registermodel->loginUser($username, $password)){
                      $session_data = array('Name' => $username );
                      $this->session->set_userdata($session_data);
                      redirect(base_url().'registration/enter');

                   }
                   else{
                        $this->session->set_flashdata('error', 'Invalid username and password');
                   }
                }
                else
                {

                    $this->load->view('forms/login');
                }
          
            function enter(){
              if($this->session->userdata('Name')!=''){
                print_r('dfgdrg'); exit;
                echo '<h2>Welcome -  '.$this->session->userdata('Name').'</h2>';
                echo '<label><a href=" '.base_url().'registration/logout">Logout</a></label>';
              }

              else{

                redirect(base_url().'registration/logincheck');
              }
            }

            function logout(){

              $this->session->unset_userdata('Name');
              redirect(base_url().'registration/logincheck');
            }

        }

  }
  ?>