<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('user_model');
        
    }
/**
 * Index Action for User Controller
 */

	public function index()
	{ 
          
                if(!$this->session->userdata('user_id')){
                return redirect('users/login');
                 
                 }else{
                $id=$this->session->user_id;
                $data = $this->user_model->get_single_user_data($id);
		
                $this->load->view('users_page',array('data'=> $data));
                 }
            
            
	}
  /*
   * user Registration function
 */
        public function register(){
             $this->load->view('register_page');
        }
  
  /*
   * user login function
   **/
       
        public function login(){
            $this->load->view('login_page');
           
            //echo $this->acl->validateAccess();
        } 
  /*
   * this function is used to check wether the user is registered or not
   */      
         public function auth_check(){ 
                
              $this->load->helper(['string','form']);
	      $this->load->library('form_validation');

		  $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
                  $this->form_validation->set_rules('password', 'Password', 'required');
                
                if ($this->form_validation->run()==FALSE){

                    redirect('users/login');
		}else{
                      $data=array(
                        'email'    =>  $this->input->post('email'),  
                        'password' =>  md5($this->input->post('password'))
                    );
                  
                   $userID = $this->user_model->check_user($data);
                   if($userID && $userID > 0){
                        $this->load->library('session');
                        $this->session->set_userdata('userID',$userID);
                        
                   $config=array(
                           'userID'    =>  $userID,  
                     );
                   $this->load->library('acl', $config);
                   $role= $this->acl->getrole();
                   echo $role;
                   if($role=='admin'){                    
                       redirect('admin');
                      
                   }
                   if($role=='member'){
                       redirect('users');
                   }
                  
                   else{
                        redirect('home');
                    }
                    
                }
       } 
         }
   /*
    * functio
    */
       
  /*
   * edit user information function
  */
        public function edit(){
            
        }
  /*
   * update user information
   */
        public function update(){
            
        }
  /*
   * Logout from account
  */
        public function logout(){
                
            $this->session->sess_destroy();
		redirect ( 'users/login' );
        }
}
