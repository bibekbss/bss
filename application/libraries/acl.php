<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of acl
 *  This class is created to controll accessing different users.
 * @author Bibek
 */
class acl {
   
     protected $privateResource = ['profile','admin'];
     protected $perms = array('index','login');  
     public $userID;
     var $userRoles = array();                    
     var $ci;
    public function __construct($config)
    {
        $this->ci = &get_instance();
        $this->ci->load->helper('url');
        $this->ci->load->database();
        $this->userID=$config['userID'];
       }
    
    public function validateAccess() {
        
        $query=$this->ci->db
                     ->where('email',$this->email,'password',$this->password)
                     ->get('user');
        if($query->num_rows()){
            return $query->row()->id;
        }else{
            return FALSE;
        }
    } 
    
    public function getrole(){
        
        $query=$this->ci->db->select('role_name')
                        ->where('u_id',$this->userID)
                        ->get('roles');
        if($query->num_rows()){
            return $query->row()->role_name;
        }
      }
    public function get_all_role(){
          $query=$this->ci->db->select('role_name')
                              ->get('roles');
            if($query->num_rows()){
            return $query->result();
        }
        
    }
    
}

