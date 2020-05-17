<?php
/*
 * Generated by CRUDigniter v3.2
 * www.crudigniter.com
 */

class Website extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('Destination_model');
    }

    function index()
    {
        $data['_view'] = 'dashboard';
        $data['destination'] = $this->Destination_model->get_all_destination();
        $this->load->view('layouts/homeMain', $data);
    }

    /*
     * Listing of users
     */
    function destination()
    {
        $data['destination'] = $this->Destination_model->get_all_destination();

        $data['_view'] = 'website/destination';
        $this->load->view('layouts/main', $data);
    }


    function profile()
    {
        if ($this->session->userdata("UserId") != '') {
            $data['_view'] = 'website/profile';
            $this->load->view('layouts/main', $data);
        }
        else
        {
            redirect('user/login_view');
        }
    }

    /*
     * Adding a new user
     */

}