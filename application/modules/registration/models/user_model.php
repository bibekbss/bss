<?php 

class User_model extends CI_Model{

	/*
         * this function is used to insert user info into database table user
         */
	public function insert_user($data=array()){
		if($this->db->insert('user', $data))
                {
                    return TRUE;
                }else{
                    return FALSE;
                }
	}
        public function bibek(){
            echo 'jdfjdfnjdnf';
        }
        
        public function check_user($data){
        
        $email=$data['email'];
        $pwd= $data['password'];
        
        $query=$this->db->where([
            'email'=>$email,
            'password'=>$pwd,
                ])->get('user');
        if($query->num_rows()){
            //return TRUE;
            return $query->row()->id;
        }else{
            return FALSE;
        }
        
     
    }
    
    public function get_single_user_data($id){
		
		$query = $this->db
		            ->select('*')
                            ->from('user')
                            ->where('id',$id)
                            ->get();
        $result = $query->result();
        return $result;
	   
	}
}
