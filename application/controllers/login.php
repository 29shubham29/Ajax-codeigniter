<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url','email'));
		$this->load->library(array('form_validation','session'));
        $this->load->model('register');
	}

public function index()
{	

	$this->form_validation->set_rules('username', 'Username', 'trim|required');
    $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]');
       if ($this->form_validation->run() == TRUE) {
           $post = $this->input->post();
           $result= $this->register->userverify($post);

            if (is_array($result)) {

               $session_data = [
                                'username' => $result['name'],
                                'user_id'=> $result['id']

                                ];
                $this->session->set_userdata($session_data);
                redirect('arena','refresh');
            }
            else {
            echo "No such user found";
       }
           } 
       else
           {
            $this->load->view('login');
           }
    }
function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }

public function extra()
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
            echo '"you can go back"';
          }
          } 
      else {
        redirect('xyz','refresh');
     }   
 }
}
