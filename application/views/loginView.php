<style>
.loginform{
      border: 2px solid #ede8e8;
      padding: 20px;

      box-shadow: 0px 0px 10px 0px grey;
      max-width: 65%;
      
      
    }
    .btn.btn-primary{
      width: 98%;
        height:50px;
    }
    .form-group { 
    position: relative; 
    }

    /* style icon */
    .form-group .glyphicon {
      position: absolute;
      padding: 10px;
      pointer-events: none;
    }

    /* align icon */
    .left-addon .glyphicon  { left:  0px;}
    .right-addon .glyphicon { right: 0px;}

    /* add padding  */
    .left-addon input  { padding-left:  30px; }
    .right-addon input { padding-right: 30px; }
    
    
    .btn {
  font-size: 4rem;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: .1em;
  background: #1ab188;
  color: #ffffff;
  -webkit-transition: all 0.5s ease;
  transition: all 0.5s ease;
  -webkit-appearance: none;
  }
  .btn:hover, .btn:focus {
    background: #179b77;
  }
  #username{
    background:#ede8e8;
    height:40px;
  }
  #password{
    background:#ede8e8;
    height:40px;
  }
  .formnya{
    padding: 8% 1px 0 20%;
    left:7%;
  }
</style>
<!-- this is for load header template -->
<?php $this->load->view('header'); ?>

  <div class="container-fluid">
    <div class="row">    
      <div class="formnya col-md-6 col-md-offset-3">
        

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
             <div class="loginform"> 
                <form action="" method="POST">
                  <div class="form-group left-addon">
                    <!-- <label for="username" > </label> -->
                    <i class="glyphicon glyphicon-user"></i>
                    <input type="text" class="form-control" name="username" id="username" placeholder="Username">
                    
                  </div>
                  

                  <div class="form-group left-addon">
                    <!-- <label for="password" ></label> -->
                    <i class="glyphicon glyphicon-lock"></i>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password" >
                  </div>

                  <div class="text-center">
                    <button class="btn btn-primary" name="login">Login</button>
                  </div>
                  <hr>
                    <p class="text-center">Not registered? <?php echo anchor('authCont/register', 'Sign Up Here'); ?></p>     
                </form>
             </div>
      </div>
    </div>
  </div>

<!-- this is for load footer template -->
<?php $this->load->view('footer'); ?>
