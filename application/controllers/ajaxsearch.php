<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajaxsearch extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->library(array('session','form_validation','email'));
		$this->load->model('register');
		}

	public function index()
	{
		$this->load->view('ajaxsearch');
	}
	function fetch()
	{

		$output='';
		$query='';
		if($this->input->post('query'))
		{
			$query=$this->input->post('query');
		}
		$data = $this->register->fetch_data($query);
				$output .= '
				<div class="table-responsive">
					<table class="table table-bordered table-striped">
					<tr>
					<th>Name</th>
					<th>Bio</th>
					<th>Date of Birth</th>
					<th>Hobbies</th>
					</tr>
		';
		if ($data->num_rows() > 0) {
			foreach ($data->result() as $row) {
				$output .= '
							<tr>
							<td>'.$row->name.'</td>
							<td>'.$row->bio.'</td>
							<td>'.$row->dob.'</td>
							<td>'.$row->hobby.'</td> 
							</tr>
				';
			}
		}
		else
		{
			$output .= '
				<tr>
				<td colspan="4">No data found</td>
				</tr>
			';
		}
		$output .= '</table>';
		echo $output;
	}

}

/* End of file ajaxsearch.php */
/* Location: ./application/controllers/ajaxsearch.php */