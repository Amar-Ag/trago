<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Destination_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();

    }
    
    /*
     * Get destination by DestinationId
     */
    function get_destination($DestinationId)
    {
        return $this->db->get_where('destination',array('DestinationId'=>$DestinationId))->row_array();
    }
        
    /*
     * Get all destination
     */
    function get_all_destination()
    {
        $this->db->order_by('DestinationId', 'desc');
        return $this->db->get('destination')->result_array();
    }
        
    /*
     * function to add new destination
     */
    function add_destination($params)
    {
        $this->db->insert('destination',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update destination
     */
    function update_destination($DestinationId,$params)
    {
        $this->db->where('DestinationId',$DestinationId);
        return $this->db->update('destination',$params);
    }
    
    /*
     * function to delete destination
     */
    function delete_destination($DestinationId)
    {
        return $this->db->delete('destination',array('DestinationId'=>$DestinationId));
    }
}