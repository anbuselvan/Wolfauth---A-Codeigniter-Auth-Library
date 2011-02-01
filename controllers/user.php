<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->library('wolfauth');
    }
    
    public function index()
    {
        redirect('user/login');
    }
    
    public function login()
    {
        
        // Posted variables
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        
        // Library approach
        if ( $this->wolfauth->login($username, $password) )
        {
            // We are logged in
        }
        
        // Or using the login helper which is the same as above, only cleaner
        if ( login($username, $password) )
        {
            // We are logged in baby
        }
        
    }
    
}   