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

                     		redirect(base_url().'registration/success');
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
          //print_r('hffh'); exit;
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

                      //print_r('dfd'); exit;
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
          }
         function enter(){
             //print_r('gfg'); exit();
              if($this->session->userdata('Name')!=''){
                //print_r('dfgdrg'); exit;
               // echo '<h2>Welcome -  '.$this->session->userdata('Name').'</h2>';

                $this->load->view('myFirstPage');
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

         function success(){
                //print_r('dfgdrg'); exit;
                echo '<h2>Registration successful</h2>';
                echo '<label><a href=" '.base_url().'registration/logout">Logout</a></label>';
              }

        function userprofile(){
        //print_r('dfgdrg'); exit;
        $this->load->view('user/adduser');
      }
       function profileview(){
        //print_r('dfgdrg'); exit;
        $this->load->view('user/viewuser');
      }

  }
  ?>