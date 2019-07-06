<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Extra extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url','email'));
		$this->load->library(array('form_validation','session'));
        $this->load->model('register');
	}

public function index()
{
	$this->form_validation->set_rules('dob', 'Date of Birth', 'required');
    
        $this->form_validation->set_rules('status', 'Status', 'trim|required');
    
        $this->form_validation->set_rules('bio', 'Short Bio', 'required',
                        array('required' => 'You must provide a %s.')
                );
        
        $this->form_validation->set_rules('hobby', 'Hobbies', 'required',
                  array('required'=>'You must select one.'));
        $this->form_validation->set_rules('image','Image','required',array('required'=>'Upload a %s'));
        
     if($this->form_validation->run()== TRUE) {
       $post = $this->input->post();
        $result = $this->register->personal($post);

          if ($result) {
            redirect('ajaxsearch','refresh');
          }
          } 
      else {
$this->load->view('login_arena');     }   
 }

}


