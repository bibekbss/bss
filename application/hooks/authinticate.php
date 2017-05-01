<?php


class Authenticate {
  protected $CI;

  public function __construct() {
    $this->CI =& get_instance();
    $this->CI->load->library('session');
           $this->CI->load->helper('url');
        }

 public function check_user_login(){
    
     if($this->CI->router->class != 'users'){
        if (!$this->CI->session->userdata('userID')){
        //redirect(site_url('login'));
        echo 'jhdjsdhshdjksd';
    }
    } 
        
 }
 }
?>