<head>
</head>
<style media="screen">

.row{
  margin-left: 0px !important;
}
</style>



<?php $this->load->view('header'); ?>
<<<<<<< HEAD

=======
<<<<<<< HEAD
<?php $this->load->view('navbar');?>

<!-- navbar end -->
      
=======
>>>>>>> d6eac952847a606a2a940f002f08656f2e7b3bc4
>>>>>>> 617482d7f3c32b21c82f73ab99f83870717962ff
<div class="container-fluid">
  <div class="bkg row">

          <div class="col-md-5">
            <div class="row">
              <div class="col-md-offset-1 col-md-11 email-title">
                  <p class="email-text">Email</p>
              </div>
            </div>
          </div>

          <div class="col-md-5 col-md-offset-1">
            <div class="row">
              <div class="col-md-offset-1 col-md-11">
                <h3 class="sms-text">SMS</h3>
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
                        <a href="<?php echo base_url('userCont/toggle/'.$e->id.'/'.$e->stat); ?>">
                        <button type="button" class="btn btn-default btn-xs btn-on">On</button></a>
                        
                        <button type="button" class="btn btn-default btn-xs btn-off"disabled>Off</button>
                      </span>

                

                    <p class="title-campaign">  <?php echo $e->campaign_name ?></p>
                                        
                    <button type="button" class="btn btn-default btn-edit btn-xs">Edit Campaign</button></a>
                    <button type="button" class="btn btn-default btn-xs btn-sequences">Sequences</button>
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
                          
                          <button type="button" class="btn btn-default btn-xs btn-on"disabled>On</button>
                        
                          <a href="<?php echo base_url('index.php/usercont/toggle/'.$e->id.'/'.$e->stat); ?>">
                          <button type="button" class="btn btn-default btn-xs btn-off">Off</button></a>
                      </span>
                    

                    <p class="title-campaign">  <?php echo $e->campaign_name ?></p>
                                        
                    <button type="button" class="btn btn-default btn-edit btn-xs">Edit Campaign</button></a>
                    <button type="button" class="btn btn-default btn-xs btn-sequences">Sequences</button>
                  </div>
                 <?php } ?>

                

                </div>
              </div>
            </div>
          <?php } ?>

 </div>
</div>

<div class="w3-container modal1">
  <?php echo form_open('userCont/addEmailCampaign'); ?>
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

<div class="w3-container modal1">
  <?php echo form_open('userCont/edit_data'); ?>
  <?php echo form_hidden('id', $this->uri->segment(3)); ?>
    <div id="id02" class="w3-modal  w3-animate-opacity">
      <div class="w3-modal-content w3-card-4">
        <header class="w3-container w3-teal modal-campaign modal1">
          <span onclick="document.getElementById('id02').style.display='none'" class="w3-button w3-large w3-display-topright w3-xbtn">&times;</span>
          <h2>Create Campaign</h2>
        </header>
        <div class="w3-container modal1">
          <p class="modal-text">Title Campaign</p>
          <?php echo form_input('campaign_name', $campaign[0]["campaign_name"], ["type" => "text",'placeholder'=>'campaign_name', "class" => "form-control"]); ?>

          <button  class="btn btn-primary" ><?php form_submit ('SUBMIT', '')?>change</button>
        </div>
      </div>
    </div>
  <?php echo form_close(); ?>
</div>



<?php $this->load->view('footer'); ?>
