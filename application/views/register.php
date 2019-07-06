<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('inc/register');
?>
<div class="container">
	<div class="row">
		<div class="col-md-7">
			<h1 class="heading">Register Here!</h1>
		</div>	
	<div class="col-sm-4 col-md-4 col-xs-12"></div>	
	<div class="col-sm-4 col-md-4 col-xs-12">
	
	<form class="" id="form" action="<?= base_url()?>registration"  method="POST" data-parsley-validate="  ">
				<h3>New User!</h3>
				<div class="form-group">
					<label class="control-label ">Name:</label>
					<div class="">
					<input type="text" id="name" class = "form-control" name="name" autocomplete="off">
					<span class="text-danger"><?= form_error('name')?></span>
				</div>	
			</div>

			<div class="form-group">
					<label class="control-label ">Username:</label>
					<div class="">
					<input type="text" id="username" class = "form-control" name="username" autocomplete="off">
					<span class="text-danger"><?= form_error('username')?></span>
				</div>	
			</div>
				
				<div class="form-group">
					<label class="control-label">Password:</label>
					<div class="">
					<input type="password" name="password" id="password" class = "form-control" autocomplete="off" >
					<span class="text-danger"><?= form_error('password')?></span>
				</div>	
			</div>	
			
			<div class="form-group">
			  <label for="level" class="col-sm-5">Gender</label>
			  <select class="form-control"name="level" >
			  	<option disabled selected value> -- select an option -- </option>
			    <option value="male">Male</option>
			    <option value="female">Female</option>
			  </select>
			  <span class="text-danger"><?= form_error('level')?></span>
			</div>
			<div class="form-group ">
                <div class="">
                <button type="submit" name="submit" class="btn btn-primary btn-block">Register</button>
            </div>
			</div>                	
	</form>
</div>
</div>
</div>
<?php $this->load->view('inc/footer'); ?>