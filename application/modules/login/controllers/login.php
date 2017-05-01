<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	 public function __construct() {
         parent::__construct();
         //$this->load->model('user_model');
        
    }
	 
	public function index()
	{
		$this->load->view('login_view');
	}
        
          public function auth_check(){ 
                
              $this->load->helper(['string','form']);
	      $this->load->library('form_validation');

		  $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
                  $this->form_validation->set_rules('password', 'Password', 'required');
                
                if ($this->form_validation->run()==FALSE){

                    redirect('login');
		}else{
                      $data=array(
                        'email'    =>  $this->input->post('email'),  
                        'password' =>  md5($this->input->post('password'))
                    );
                  
                   $userID = $this->user_model->check_user($data);
                   if($userID && $userID > 0){
                        $this->load->library('session');
                        $this->session->set_userdata('userID',$userID);
                        redirect('users');
                        //exit();
                  
                  }
       } 
    }
}
