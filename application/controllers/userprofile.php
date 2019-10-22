<?php

/**
 * 
 */
class userprofile extends CI_controller
{
	
	function __construct()
	{
		{
        parent::__construct();

        $this->load->library('form_validation');
      }
	}

	public function add(){

		$this->form_validation->set_rules('first_name', 'First Name', 'required');
		$this->form_validation->set_rules('last_name', 'Last Name', 'required');
		$this->form_validation->set_rules('father_name', 'Father Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('mobile', 'Mobile', 'required');
		$this->form_validation->set_rules('country', 'Country', 'required');

			if ($this->form_validation->run()== TRUE )
                {
                	// exit('here');
                       $firstname= $this->input->post('first_name');
                       $lastname= $this->input->post('last_name');
                       $fathername= $this->input->post('father_name');
                       $email= $this->input->post('email');
                       $mobile= $this->input->post('mobile');
                       $country= $this->input->post('country');
                       $this->load->model('');
                     if($this->registermodel->registerUser($firstname, $lastname,$fathername,$email,$mobile,$country)){

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
	}
}



?>