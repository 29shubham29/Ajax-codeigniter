<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('inc/register');
?>
<?php $this->load->view('inc/common_nav');?>

<div class="container">
	<br>
	<br>
	<br>
	<h2 align="center"> Search </h2><br>
	<div class="form-group">
		<div class="input-group">
			<span class="input-group-addon">Search</span>
			<input type="text" name="search_text" id="search_text" placeholder="Search by entering details" class="form-control">
		</div>
	</div>
	<br>
	<div id="result"></div>
</div>

	<div style="clear: both;"></div>
	<br>
	<br>
	<br>
	<br>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>	
<script>
	$(document).ready(function() {
		
		load_data();
		function load_data(query) {
			$.ajax({
				url: "<?= base_url();?>ajaxsearch/fetch",
				method:"POST",
				data:{query:query},	
				success:function (data) {
					$('#result').html(data);
				}
			})
			
		}
		$('#search_text').keyup(function() {
			/* Act on the event */
			var search =$(this).val();
			if(search != '')
			{
				load_data(search);
			}
			else
			{
				load_data();
			}
		});
	});
</script>
</body>
</html>