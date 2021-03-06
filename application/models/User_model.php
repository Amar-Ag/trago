<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class User_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get user by UserId
     */
    function get_user($UserId)
    {
        return $this->db->get_where('users',array('UserId'=>$UserId))->row_array();
    }
        
    /*
     * Get all users
     */
    function get_all_users()
    {
        $this->db->order_by('UserId', 'desc');
        return $this->db->get('users')->result_array();
    }
        
    /*
     * function to add new user
     */
    function add_user($params)
    {
        $this->db->insert('users',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update user
     */
    function update_user($UserId,$params)
    {
        $this->db->where('UserId',$UserId);
        return $this->db->update('users',$params);
    }
    
    /*
     * function to delete user
     */
    function delete_user($UserId)
    {
        return $this->db->delete('users',array('UserId'=>$UserId));
    }

    public function login_user(){
        //$email,$pass
        $this->db->select('*');
        $this->db->from('users');
//        $this->db->where('user_email',$email);
//         $this->db->where('user_password',$pass);
//
        if($query=$this->db->get())
        {
            return $query->result_array();
        }
        else{
            return false;
        }


    }
    public function email_check($email){

        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('Email',$email);
        $query=$this->db->get();

        if($query->num_rows()>0){
            return false;
        }else{
            return true;
        }

    }
}
