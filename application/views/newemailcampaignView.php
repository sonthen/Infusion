<style>
    .berborder{
      border: 2px solid grey;
      padding: 20px;
      /* max-width: 60%; */
    }
    .mailborder{
      border: 2px solid grey;
      padding: 20px;
      /* max-width: 30%; */
    }
    #bodym{
      height:130px;
    }
</style>

<!-- this is for load header template -->
<?php $this->load->view('header'); ?>

<?php echo form_open('userCont/addEmailCampaign'); ?>


  <div class="container-fluid">
    <a href="<?php echo base_url(); ?>index.php/userCont/dashboardview"><button type="button" class="btn btn-default navbar-btn">Back</button></a>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="berborder" >


        <!-- alert for handle empty form -->
        <?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
                    <form action="" method="POST">
                        <!-- <div class="form-group">
                            <label for="username" >Username : </label>
                            <input type="text" class="form-control" name="username" id="username">
                        </div> -->
                        <div class="form-group">    
                            <label for="campaign_name">Input Campaign Title </label>
                            
                            <input value='<?php echo set_value('campaign_name')?>' type="text" class="form-control" name="campaign_name" id="campaign_name">
                        </div>

                        <div class="form-group">
                            <label for="sequence_qty">Sequence qty </label>
                    
                            <input value='<?php echo set_value('sequence_qty')?>'type="text" class="form-control" name="sequence_qty" id="sequence_qty">
                        </div>

                        <div class="form-group">
                            <label for="label_id">Choose Category</label>

                            <select class="form-control"  name="label_id" id="label_id">
                                <?php foreach( $label_content as $e) { echo
                                    "<option value='$e->id;'>".$e->label_name."</option>";
                                } ?>
                            </select>

                        <div class="text-right">
                            <button class="btn btn-primary" name="addEmailCampaign">next</button></a>
                        </div><hr>             
                        
                    </form>

                    <?php echo form_close();?>
                </div>
            </div>
        </div>

  </div>

    
  <?php echo 

form_close();
(''); ?>
<?php $this->load->view('footer'); ?>