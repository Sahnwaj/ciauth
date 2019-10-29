<?php


class userprofile extends CI_controller
{
	
	function __construct()
	{
		
        parent::__construct();

        $this->load->library('form_validation');
        $this->load->helper('url', 'form');
     	$this->load->database();
     	$this->load->model('registermodel');
     	//$this->load->view('adduser');
	}


	public function addusers(){

		$this->load->view('user/adduser');
	}
	

    	public function do_upload()
        {
        		//print_r('wrong');
        	   //$this->load->library('form_validation')
        	$this->form_validation->set_rules('first_name', 'First Name', 'required');
			$this->form_validation->set_rules('last_name', 'Last Name', 'required');
			$this->form_validation->set_rules('father_name', 'Father Name', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required');
			$this->form_validation->set_rules('mobile', 'Mobile', 'required');
			$this->form_validation->set_rules('country', 'Country', 'required');
			//$this->form_validation->set_rules('userimage', '', 'required');

			if($this->form_validation->run()== TRUE ){
                $config['upload_path']= './assests/';
                $config['allowed_types']= 'gif|jpg|png';

                $this->load->library('upload', $config);

                if ( !$this->upload->do_upload('userimage'))
                {
                       echo "error";
                }
                else
                {
                        $fd=$this->upload->data();
                        //$data = array('upload_data' => $this->upload->data());
                        $fn=$fd['file_name'];
                        $this->registermodel->addUsers($fn);
                        echo '<label><a href=" '.base_url().'userprofile/success">Logout</a></label>';

                }

              }
                else{

                }

            
        }

	         function success(){
	        //print_r('dfgdrg'); exit;

	      	//$this->load->view('user_success');
	        echo '<h2>User Data added</h2>';
	        echo '<label><a href=" '.base_url().'userprofile/logout">Logout</a></label>';
	    }

           function logout(){

          //$this->session->unset_userdata('Name');
          redirect(base_url().'userprofile/addusers');
        }

              
            

}




?>