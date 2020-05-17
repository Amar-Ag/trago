<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Transportation extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Activity_model');
        $this->load->model('Transportation_model');
        $this->load->library('session');
        if ($this->session->userdata('UserType') == '') {
            redirect('/');
        }
        if ($this->session->userdata('UserType') == '2') {
            redirect('/');
        }
    } 

    /*
     * Listing of transportation
     */
    function index()
    {
        $data['transportation'] = $this->Transportation_model->get_all_transportation();
        
        $data['_view'] = 'transportation/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new transportation
     */
    function add()
    {
        $data['activities'] = $this->Activity_model->get_all_activities();
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'ActivityID' => $this->input->post('ActivityID'),
				'TransportTitle' => $this->input->post('TransportTitle'),
				'TransportDetails' => $this->input->post('TransportDetails'),
            );
            
            $transportation_id = $this->Transportation_model->add_transportation($params);
            redirect('transportation/index');
        }
        else
        {            
            $data['_view'] = 'transportation/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a transportation
     */
    function edit($TransportID)
    {   
        // check if the transportation exists before trying to edit it
        $data['transportation'] = $this->Transportation_model->get_transportation($TransportID);
        
        if(isset($data['transportation']['TransportID']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'ActivityID' => $this->input->post('ActivityID'),
					'TransportTitle' => $this->input->post('TransportTitle'),
					'TransportDetails' => $this->input->post('TransportDetails'),
                );

                $this->Transportation_model->update_transportation($TransportID,$params);            
                redirect('transportation/index');
            }
            else
            {
                $data['_view'] = 'transportation/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The transportation you are trying to edit does not exist.');
    } 

    /*
     * Deleting transportation
     */
    function remove($TransportID)
    {
        $transportation = $this->Transportation_model->get_transportation($TransportID);

        // check if the transportation exists before trying to delete it
        if(isset($transportation['TransportID']))
        {
            $this->Transportation_model->delete_transportation($TransportID);
            redirect('transportation/index');
        }
        else
            show_error('The transportation you are trying to delete does not exist.');
    }
    
}