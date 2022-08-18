<?php
class User_model extends CI_Model{

function insertUser($insertData){
return $this->db->insert('users',$insertData);
}

function user_login($user_email,$user_paswd)
{

    $this->db->where('email',$user_email);
    $this->db->where('password',$user_paswd);
    $query = $this->db->get('users');

    if($query->num_rows() == 1)
    {
        return $query->row();
    }
    return false;

// $query = $this->db->where('email',$user_email)->where('password',$user_paswd)->get('users');
// if($query->num_rows() > 0)
// {
//     return $query->row();
// }
// else
// {
//     return false;
// } 
}

function checkDuplicate($email)
{
    $this->db->select('email');
    $this->db->from('users');
    $this->db->like('email', $email);
    return $this->db->count_all_results();
}

}
?>