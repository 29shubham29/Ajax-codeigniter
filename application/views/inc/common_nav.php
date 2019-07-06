
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header welcome">
      <a class="navbar-brand" href="#" style="
    margin-left: 45px;">Welcome <?= $this->session->userdata('username')?>
		</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
    	<!-- <li class="dropdown drp">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="true">Actions
        <span class="caret"></span></a>
        <ul class="dropdown-menu menu">
       -->    <li><a href="<?=base_url()?>login/logout" class = "drp">Logout</a></li>
        <!-- </ul>
      </li>
       -->
    </ul>
  </div>
</nav>
