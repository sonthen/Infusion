<style media="screen">

.row{
  margin-left: 0px !important;
}
</style>



<?php $this->load->view('header'); ?>
      <!-- <a class="logout-btn" href="<?php echo base_url(); ?>index.php/authCont/logout">Logout</a> -->
<div class="container-fluid">
  <div class="bkg row">

          <div class="col-md-5">
            <div class="row">
                <div class="col-md-offset-1 col-md-11 email-title">
                    <p class="email-text">Email</p>
                    <div>
                        <span>  <a href="<?php echo base_url(); ?>index.php/userCont/addEmailCampaign">
                        <button type="button" class="w3-button w3-xlarge w3-circle btn-plus ">+</button></a></span>
                    </div>
                </div>
            </div>
        </div>

          <div class="col-md-5 col-md-offset-1">
              <div class="row">
                  <div class="col-md-offset-1 col-md-11">
                      <h3 class="sms-text">SMS</h3>
                      <span><a href="<?php echo base_url(); ?>index.php/userCont/addSmsCampaign"><button type="button" class="w3-button w3-xlarge w3-circle  btn-plus2">+</button></a></span>
                  </div>
              </div>
          </div>

          <div class="col-md-6"  >
            <?php foreach( $dashboard_content as $e) {?>
              <?php if($e->campaign_type == 0){ ?>
                <div class="col-md-12">
                  <div class="row">
                    <div class="box1 col-md-offset-1 col-md-9">
                        <div class="box-label">
                            <span>SEQ :</span>
                            <span> 3 </span>
                            <span class="blue-line"></span>
                            <span><?php echo $e->label_name ?></span>
                            <span class="blue-line"></span>
                            <span><?php echo $e->created_at ?></span>
                        </div>

                      <?php if($e->status==0){ ?>
                      <span class="btn-indikator">
                        <a href="<?php echo base_url('index.php/usercont/toggle/'.$e->id.'/'.$e->status); ?>">
                        <button type="button" class="btn btn-default btn-xs btn-on">On</button></a>
                        <a href="">
                        <button type="button" class="btn btn-default btn-xs btn-off"disabled>Off</button></a>
                      </span>

                        <?php } else { ?>
                      <span class="btn-indikator">
                          <a href="<?php echo base_url('index.php/usercont/toggle/'.$e->id.'/'.$e->status); ?>">
                          <button type="button" class="btn btn-default btn-xs btn-on"disabled>On</button></a>
                          <a href="">
                          <button type="button" class="btn btn-default btn-xs btn-off">Off</button></a>
                      </span>
                      <?php } ?>

                      <p class="title-campaign">  <?php echo $e->campaign_name ?></p>
                      <a href="<?php echo base_url('index.php/usercont/edit/'.$e->id); ?>">
                      <button type="button" class="btn btn-default btn-edit btn-xs">Edit Campaign</button></a>
                      <button type="button" class="btn btn-default btn-xs btn-sequences">Sequences</button>
                    </div>
                  </div>

            </div>
              <?php } ?>
              <?php } ?>
          </div>

          <div class="col-md-6"  >
            <?php foreach( $dashboard_content as $e) {?>
              <?php if($e->campaign_type == 1){ ?>
                <div class="col-md-12">
                  <div class="row">
                    <div class="box1 col-md-offset-1 col-md-9">
                        <div class="box-label">
                            <span>SEQ :</span>
                            <span> 3 </span>
                            <span class="blue-line"></span>
                            <span><?php echo $e->label_name ?></span>
                            <span class="blue-line"></span>
                            <span>13/10/2017</span>
                        </div>

                      <?php if($e->status==0){ ?>
                      <span class="btn-indikator">
                        <a href="<?php echo base_url('index.php/usercont/toggle/'.$e->id.'/'.$e->status); ?>">
                        <button type="button" class="btn btn-default btn-xs btn-on">On</button></a>
                        <a href="">
                        <button type="button" class="btn btn-default btn-xs btn-off"disabled>Off</button></a>
                      </span>

                        <?php } else { ?>
                      <span class="btn-indikator">
                          <a href="<?php echo base_url('index.php/usercont/toggle/'.$e->id.'/'.$e->status); ?>">
                          <button type="button" class="btn btn-default btn-xs btn-on"disabled>On</button></a>
                          <a href="">
                          <button type="button" class="btn btn-default btn-xs btn-off">Off</button></a>
                      </span>
                      <?php } ?>

                      <p class="title-campaign">  <?php echo $e->campaign_name ?></p>
                      <a href="<?php echo base_url('index.php/usercont/edit/'.$e->id); ?>">
                      <button type="button" class="btn btn-default btn-edit btn-xs">Edit Campaign</button></a>
                      <button type="button" class="btn btn-default btn-xs btn-sequences">Sequences</button>
                    </div>
                  </div>

            </div>
              <?php } ?>
              <?php } ?>
          </div>



 </div>
</div>



<?php $this->load->view('footer'); ?>
