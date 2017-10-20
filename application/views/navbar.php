

<!-- begin #page-loader -->
  <div id="page-loader" class="fade in"><span class="spinner"></span></div>
  <!-- end #page-loader -->
  
  <!-- begin #page-container -->
  <div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
    <!-- begin #header -->
    <div id="header" class="header navbar navbar-default navbar-fixed-top">
      <!-- begin container-fluid -->
      <div class="container-fluid">
        <!-- begin mobile sidebar expand / collapse button -->
        <div class="navbar-header">
          <a  class="navbar-brand"><span class="navbar-logo" style="border-color: #FFAC5B #F09A39 #DD6C0C;"></span> Infusion Admin</a>
          <button type="button" class="navbar-toggle" data-click="sidebar-toggled">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <!-- end mobile sidebar expand / collapse button -->
        
        <!-- begin header navigation right -->
        <ul class="nav navbar-nav navbar-right">
          <li>
            <form class="navbar-form full-width">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Enter keyword" />
                <button  class="btn btn-search"><i class="glyphicon glyphicon-search"></i></button>
              </div>
            </form>
          </li>
          <li class="dropdown">
            <a href="javascript:;" data-toggle="dropdown" class="dropdown-toggle f-s-14">
              <i class="glyphicon glyphicon-bell"></i>
              <span class="label">5</span>
            </a>
            <ul class="dropdown-menu media-list pull-right animated fadeInDown">
                            <li class="dropdown-header">Notifications (5)</li>
                            <li class="media">
                                <a href="javascript:;">
                                    <div class="media-left"><i class="fa fa-bug media-object bg-red"></i></div>
                                    <div class="media-body">
                                        <h6 class="media-heading">Server Error Reports</h6>
                                        <div class="text-muted f-s-11">3 minutes ago</div>
                                    </div>
                                </a>
                            </li>
                            <li class="media">
                                <a href="javascript:;">
                                    <div class="media-left"><img src="<?php echo base_url();?>assets/user-9.jpg" class="media-object" alt="" /></div>
                                    <div class="media-body">
                                        <h6 class="media-heading">John Chena</h6>
                                        <p>Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
                                        <div class="text-muted f-s-11">25 minutes ago</div>
                                    </div>
                                </a>
                            </li>
                           
            </ul>
          </li>
          <li class="dropdown navbar-user">
            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url();?>assets/user-9.jpg" alt="" /> 
              <span class="hidden-xs">Ryan Henry</span> <b class="caret"></b>
            </a>
            <ul class="dropdown-menu animated fadeInLeft">
              <li class="arrow"></li>
              <li><a class="logout-btn" href="<?php echo base_url(); ?>index.php/authCont/logout">Logout</a></li>
              
            </ul>
          </li>
        </ul>
        <!-- end header navigation right -->
      </div>
      <!-- end container-fluid -->
    </div>
    <!-- end #header -->
    
    <!-- begin #sidebar -->
    
        </div>
        <!-- end theme-panel -->
    
    <!-- begin scroll to top btn -->
    <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
    <!-- end scroll to top btn -->
  </div>
  <!-- end page container -->

   
  <!-- ================== END PAGE LEVEL JS ================== -->
  
  <script>
    $(document).ready(function() {
      App.init();
      Dashboard.init();
    });
  </script>

  <?php $this->load->view('footer'); ?>