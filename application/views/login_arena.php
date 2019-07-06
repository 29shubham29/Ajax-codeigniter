<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('inc/register');
?>
<?php $this->load->view('inc/common_nav');?>
<div class="container-fluid bg">
	<form class="" id="form" action="<?= base_url()?>extra" method="POST">
		<h1>Enter Details!</h1>
		<div class="form-group col-md-5">
			<label for="dob">
				Date Of Birth:
			</label>
			<input type="date" id="dob" name="dob" class="form-control" placeholder="DOB">
			<span class="text-danger error"><?= form_error('dob')?></span>
		</div>
		<div class="form-group col-md-5">
			  <label for="relation" class="col-sm-5">Status:</label>
			  <select class="form-control"name="status" >
			  	<option disabled selected value> -- select an option -- </option>
			    <option value="male">Single/Unmarried</option>
			    <option value="female">Married</option>
			  </select>
			  <span class="text-danger error"><?= form_error('status')?></span>

		</div>
		<div class="form-group col-md-5">
			<label for="bio" class="col-md-5">Short Bio:</label>
			<textarea class="form-control" name="bio" id="bio" rows="4"></textarea>
						<span class="text-danger error"><?= form_error('bio')?></span>
		</div>
		<div class="form-group col-md-5">
			<label for="hobby" class="col-md-5">Hobbies:</label>
			<textarea class="form-control" name="hobby" id="hobby" rows="4"></textarea>
				<span class="text-danger error" id="sp"><?= form_error('hobby')?></span>

		</div>

		<div class="form-group col-md-5">
			<label for="img" class="col-md-5">Upload image:</label>
			<input type="file" name="image" class="form-control" id="img">
				<span class="text-danger"><?= form_error('image	')?></span>

		</div>
		<input type="hidden" name="uid" value="<?= $this->session->userdata('user_id');?>"><input type="hidden" name="name" value="<?= $this->session->userdata('username');?>">

		<div class="form-group ">
                <div class="col-md-10">
                <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
            </div>
			</div>
	</form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>	
</body>
</html>
?>