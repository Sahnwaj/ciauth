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
	

    	public function insert()
        {
        		//print_r('wrong');
        	   //$this->load->library('form_validation')
        	$this->form_validation->set_rules('first_name', 'First Name', 'required');
			$this->form_validation->set_rules('last_name', 'Last Name', 'required');
			$this->form_validation->set_rules('father_name', 'Father Name', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required');
			$this->form_validation->set_rules('mobile', 'Mobile', 'required');
			$this->form_validation->set_rules('country', 'Country', 'required');
			

			if($this->form_validation->run() == TRUE ){
                $config['upload_path']= './assests/';
                $config['allowed_types']= 'gif|jpg|png';

                $this->load->library('upload', $config);

                if(!$this->upload->do_upload('images'))
                {
                       echo "error";
                }
                else
                {
                     
                      //echo 'jdjdn';exit();
                        $fd=$this->upload->data();
                        //$data = array('upload_data' => $this->upload->data());
                        $fn=$fd['file_name'];
                       // echo ("<pre>");
                       // print_r($fd); exit();

                        $target= base_url().'assests/'.$fn;

                        //echo $target; exit();
                        $this->registermodel->addUsers($target);


                        echo '<label><a href=" '.base_url().'userprofile/success">Logout</a></label>';

                }

              }
                else{
                      print_r("sdfhsdjh");
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

        function fetch(){

          //print_r('fgfgf'); exit();
          $data["fetch_data"]=$this->registermodel->fetch_data();
          $this->load->view("viewdata", $data);


        }

              
            

}




?>