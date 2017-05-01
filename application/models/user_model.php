<?php 

class Userlogin_model extends CI_Model{

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
