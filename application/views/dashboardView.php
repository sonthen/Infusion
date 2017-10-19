<style media="screen">

.row{
  margin-left: 0px !important;
}
</style>



<?php $this->load->view('header'); ?>
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

          <div class="col-md-6"  >
            <?php foreach( $dashboard_content as $e) {?>
              <?php if($e->campaign_type == 0){ ?>
                <div class="col-md-12">
                  <div class="row">
                    <div class="box1 col-md-offset-1 col-md-9">
                        <div class="box-label">
                            <span>SEQ :</span>
                            <span> 300 </span>
                            <span class="blue-line"></span>
                            <span><?php echo $e->label_name ?></span>
                            <span class="blue-line"></span>
                            <span> <?php echo $e->created_at ?> </span>
                        </div>

                      <?php if($e->status==0){ ?>
                      <span class="btn-indikator">
                        <a href="<?php echo base_url('userCont/toggle/'.$e->id.'/'.$e->status); ?>">
                        <button type="button" class="btn btn-default btn-xs btn-on">On</button></a>
                        
                        <button type="button" class="btn btn-default btn-xs btn-off"disabled>Off</button>
                      </span>

                        <?php } else { ?>
                      <span class="btn-indikator">
                          
                          <button type="button" class="btn btn-default btn-xs btn-on"disabled>On</button>
                        
                          <a href="<?php echo base_url('index.php/usercont/toggle/'.$e->id.'/'.$e->status); ?>">
                          <button type="button" class="btn btn-default btn-xs btn-off">Off</button></a>
                      </span>
                      <?php } ?>

                      <p class="title-campaign">  <?php echo $e->campaign_name ?></p>
                      <a href="<?php echo base_url('userCont/edit/'.$e->id); ?>">
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
                        <a href="<?php echo base_url('userCont/toggle/'.$e->id.'/'.$e->status); ?>">
                        <button type="button" class="btn btn-default btn-xs btn-on">On</button></a>
                        
                        <button type="button" class="btn btn-default btn-xs btn-off"disabled>Off</button>
                      </span>

                        <?php } else { ?>
                      <span class="btn-indikator">
                          
                          <button type="button" class="btn btn-default btn-xs btn-on"disabled>On</button>
                          <a href="<?php echo base_url('index.php/usercont/toggle/'.$e->id.'/'.$e->status); ?>">
                          <button type="button" class="btn btn-default btn-xs btn-off">Off</button></a>
                      </span>
                      <?php } ?>

                      <p class="title-campaign">  <?php echo $e->campaign_name ?></p>
                      <a href="<?php echo base_url('userCont/edit/'.$e->id); ?>">
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

<div class="w3-container modal1">
          <div id="id01" class="w3-modal  w3-animate-opacity">
              <div class="w3-modal-content w3-card-4">
                  <header class="w3-container w3-teal modal-campaign modal1">
                      <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-large w3-display-topright w3-xbtn">&times;</span>
                      <h2>Create Campaign</h2>
                  </header>
                  <div class="w3-container modal1">
                      <p class="modal-text">Title Campaign</p>
                      <input type="text" class="input-campaign">
                      <button type="button" class="btn-create-campaign btn">Create</button>
                  </div>
              </div>
          </div>
    </div>



<?php $this->load->view('footer'); ?>
