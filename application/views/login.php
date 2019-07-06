<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('inc/register');
?>
<div class="container-fluid bg">
	<div class="row">
	<div class="col-sm-4 col-md-4 col-xs-12"></div>	
	<div class="col-sm-4 col-md-4 col-xs-12">
	<form class="frm" action="<?= base_url()?>Login" method="POST">
		<h1>Login</h1>
		  <div class="form-group">
		    <label for="username">Username:</label>
		    <input type="text" class="form-control" name="username" placeholder="Username">
		    <span class="text-danger"><?= form_error('username', '<div class="error">', '</div>'); ?></span>
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">Password:</label>
		    <input type="password" class="form-control" name="password" placeholder="Password">
		    <span class="text-danger"><?= form_error('password', '<div class="error">', '</div>'); ?></span>
		  </div>
		  <div class="checkbox">
		    <label>
		      <input type="checkbox"> Remember me.
		    </label>
		  </div>
		  <div class="row">
		  <div class="pull-left">
		  	<input type="submit" name="insert" value="Login" class="btn btn-primary"> 
		  </div>
		  <div class="pull-right">
		  <a href="<?= base_url()?>registration" name="reg" class="btn btn-info">Register</a>
		  </div>
		  </div>
		  <br>
		  </form>
	<div class="col-sm-4 col-md-4 col-xs-12"></div>
	</div>
	</div>
	</div>


<?php $this->load->view('inc/footer'); ?>