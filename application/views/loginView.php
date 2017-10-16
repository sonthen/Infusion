
<!-- this is for load header template -->
<?php $this->load->view('header'); ?>

  <div class="container-fluid">
    <div class="row">    
      <div class="col-md-6 col-md-offset-3">
        <h1>Login Page</h1>

        <!-- alert for handle success registration -->
        <?php if(isset($_SESSION['success'])){ ?>
          <div class="alert alert-success"> <?php echo $_SESSION['success']; ?></div>
        <?php
        } ?>

        <!-- alert for handle error registration -->
        <?php if(isset($_SESSION['error'])){ ?>
          <div class="alert alert-danger"> <?php echo $_SESSION['error']; ?></div>
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
              <label for="password" >Password : </label>
              <input type="password" class="form-control" name="password" id="password">
            </div>

            <div class="text-center">
              <button class="btn btn-primary" name="login">Login</button>
            </div><hr>

              <p class="text-center">don't have an account !! <?php echo
              anchor('authCont/register', 'Sign Up Here'); ?></p> 
              
                
          </form>
      </div>
    </div>
  </div>

<!-- this is for load footer template -->
<?php $this->load->view('footer'); ?>
