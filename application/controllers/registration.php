<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->library(array('session','form_validation','email'));
		$this->load->model('register');
		}

	public function index()
	{
		$this->form_validation->set_rules('name', 'Name', 'required');
    
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
    
        $this->form_validation->set_rules('password', 'Password', 'required',
                        array('required' => 'You must provide a %s.')
                );
        
        $this->form_validation->set_rules('level', 'Gender', 'required',
    							array('required'=>'You must select one.'));
        
        if ($this->form_validation->run())
                {   
                    $post = $this->input->post();

                    $result = $this->register->signup($post);

                    if($result)
                    {
                    	echo "Successfully Registered";
                    }
                    else
                    {
                    	echo "Error in registration";
                    }
                    }
         else
                {
                $this->load->view('register');
                }

    
       
    }

    
}
