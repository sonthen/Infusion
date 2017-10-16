<!-- this is for load header template -->
<?php $this->load->view('header'); ?>

<div class="container-fluid">
	<div class="row">

		<div class="col-md-offset-1">
			<h1>Profile Page</h1>

          	Hello, <?php echo $_SESSION['username']; ?> <br><!-- this is for print the username in the page view -->

          	<a href="<?php echo base_url(); ?>index.php/authCont/logout">Logout</a>
          	<br><hr>
		</div>

	</div>
</div>

<!-- this is for load footer template -->
<?php $this->load->view('footer'); ?>