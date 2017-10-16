												<!-- this is for load header template -->
<?php $this->load->view('header'); ?>

<div class="container-fluid">
	<div class="row">

		<div class="col-md-6 col-md-offset-3">
	      <h1>Registration Page</h1>

	      <!-- alert for handle success registration -->
	      <?php if(isset($_SESSION['success'])){ ?>
	        <div class="alert alert-success"> <?php echo $_SESSION['success']; ?></div>
	      <?php
	      } ?>

	      <!-- alert for handle empty form -->
	      <?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>

	        <form action="" method="POST">
	          <div class="form-group">
	            <label for="username" >Username : </label>
	            <input type="text" class="form-control" name="username" id="username">
	          </div>

	          <div class="form-group">
	            <label for="email" >Email : </label>
	            <input type="email" class="form-control" name="email" id="email">
	          </div>

	          <div class="form-group">
	            <label for="password" >Password : </label>
	            <input type="password" class="form-control" name="password" id="password">
	          </div>

	          <div class="form-group">
	            <label for="password" >Confrim Password : </label>
	            <input type="password" class="form-control" name="confirmpassword" id="password">
	          </div>

	          <div class="form-group">
	            <label for="gender" >Gender : </label>
	              <select name="gender" id="gender" class="form-control">
	                <option value="Male">Male</option>
	                <option value="Female">Female</option>
	              </select>
	          </div>

	          <div class="form-group">
	            <label for="phone" >Phone Number : </label>
	            <input type="text" class="form-control" name="phone" id="phone">
	          </div>

	          <div class="text-center">
	            <button class="btn btn-primary" name="register">Register</button>
	            <br><br><a href="<?php echo base_url(); ?>index.php/authCont/login">Login</a><hr>
	          </div>
	        </form>
    	</div>

   	</div>
</div>

<!-- this is for load footer template -->
<?php $this->load->view('footer'); ?>