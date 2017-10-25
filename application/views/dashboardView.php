<style media="screen">

.row{
  margin-left: 0px !important;
}
</style>



<?php $this->load->view('header'); ?>

<?php $this->load->view('navbar');?>

<!-- navbar end -->

<div class="container-fluid">
  <div class="bkg row">

    <div class="col-md-11">
          <div class="row">
              <div class="col-md-offset-1 col-md-11 w3-container">
                  <h3 class="sms-text text-center">CAMPAIGN BOARD</h3>
                  <span><button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-xlarge w3-circle  btn-plus2">+</button></span>
              </div>
          </div>
      </div>

          <?php foreach( $dashboard_content as $e) {?>
            <div class="col-md-6">
              <div class="col-md-12">
                <div class="row">
                <?php if($e->stat==0){ ?>
                  <div class="box1 col-md-offset-1 col-md-9" style="opacity:0.5;">
                    <div class="box-label">
                        <span>SEQ :</span>
                        <span> 300 </span>
                        <span class="blue-line"></span>
                        <span> <?php echo $e->created_at ?> </span>
                    </div>

                      <span class="btn-indikator">
                        <a href="<?php echo base_url('usercont/toggle_campaign/'.$e->id.'/'.$e->stat); ?>">
                          <button type="button" class="btn btn-default btn-xs btn-off">Off</button>
                        </a>
                      </span>

                    <p class="title-campaign">  <?php echo $e->campaign_name ?></p>
                    
                    <a href="<?php echo base_url('usercont/mencoba/'.$e->id); ?>">
                        <button type="button" class="btn btn-default btn-xs btn-sequences">Sequences</button>
                    </a>
                  </div>
                 <?php } ?>

                 <!-- ######################### -->

                 <?php if($e->stat==1){ ?>
                  <div class="box1 col-md-offset-1 col-md-9">
                    <div class="box-label">
                        <span>SEQ :</span>
                        <span> 300 </span>
                        <span class="blue-line"></span>
                        <span> <?php echo $e->created_at ?> </span>
                    </div>

                      <span class="btn-indikator">
                          <a href="<?php echo base_url('usercont/toggle_campaign/'.$e->id.'/'.$e->stat); ?>">
                            <button type="button" class="btn btn-default btn-xs btn-on">On</button>
                          </a>
                      </span>

                    <p class="title-campaign">  <?php echo $e->campaign_name ?></p>
                    <a href="<?php echo base_url('usercont/mencoba/'.$e->id); ?>">
                      <button type="button" class="btn btn-default btn-xs btn-sequences" disabled>Sequences</button>
                    </a>
                  </div>
                 <?php } ?>

                </div>
              </div>
            </div>
          <?php } ?>

 </div>
</div>

<div class="w3-container modal1">
  <?php echo form_open('usercont/addEmailCampaign'); ?>
    <div id="id01" class="w3-modal  w3-animate-opacity">
      <div class="w3-modal-content w3-card-4">
        <header class="w3-container w3-teal modal-campaign modal1">
            <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-large w3-display-topright w3-xbtn">&times;</span>
            <h2>Create Campaign</h2>
            <?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
        </header>
        <div class="w3-container modal1">
          <p class="modal-text">Title Campaign</p>
          <input value='<?php echo set_value('campaign_name')?>' type="text" class="form-control" name="campaign_name" id="campaign_name">

          <a href="<?php echo base_url('usercont/addEmailCampaign'); ?>">
          <button class="btn-create-campaign btn" name="addEmailCampaign">Create</button></a>
        </div>
      </div>
    </div>
  <?php echo form_close(); ?>
</div>



<?php $this->load->view('footer'); ?>
