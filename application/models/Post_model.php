<?php
class Post_model extends CI_Model {


public function get_all_post($post_id = null)
{
    if(isset($post_id)){
        $query = $this->db->get_where('post', array('post_id' => $post_id));
        return $query->row_array();
    }else{
       $query = $this->db->get('post');
       return $query->result_array();
    }
    
}

public function insert_post($data)
{
    $this->db->insert('post',$data);
    if ($this->db->affected_rows() > 0){
        return true;
    } else {
        return false;
    }
    
}

public function insert_signup($formArray)
{
    // This function will save a user record in database
    $this->db->insert('users',$formArray);
   
    }

    public function login_valid($formArray)
    {
        $q=$this->db->where($formArray)->get('users');

        if($q->num_rows())
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    
}



 
?>