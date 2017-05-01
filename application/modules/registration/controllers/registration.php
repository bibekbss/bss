<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {

	
	public function index()
	{
		$this->load->view('registration');
	}

 /*
    * this function is used to save information of new user
    */
        public function create(){
            
                $this->load->helper('security');
		$this->load->library('form_validation');
               //validate form
		$this->form_validation->set_rules('name', 'Username', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[user.email]');
		$this->form_validation->set_rules('password', 'Password', 'required');
                $this->form_validation->set_rules('cpassword', 'Password', 'required|matches[password]');
              
               if ($this->form_validation->run()==FALSE){

			$this->load->view('register_page');
		}else{
                        $data = array(
			'name'     =>  $this->input->post('name'),  
                        'email'    =>  $this->input->post('email'),  
                        'password' =>  md5($this->input->post('cpassword')),
                        'hash'     =>  md5(rand(0, 1000))
                        );
                       
               if(!$this->user_model->insert_user($data)){
                   $this->session->set_flashdata('message', 'sign in not sucessful!!');

                 //redirect to some function
                   redirect('users/register');
               } else {
                   $this->session->set_flashdata('message', 'Account created successfuly!! please login!!');
                   redirect('users/login');
               }
               echo 'data inserted';
                }  
            
        }
}