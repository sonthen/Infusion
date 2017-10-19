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

<?php echo form_open('userCont/addSmsCampaign'); ?>


  <div class="container-fluid"> 
    <a href="<?php echo base_url(); ?>userCont/dashboardview"><button type="button" class="btn btn-default navbar-btn">Back</button></a>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
            <h1>SMS</h1>

            <?php echo form_open('userCont/addCampaign'); ?>

                <div class="berborder" >

                 <!-- alert for handle empty form -->
                 <?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>

                    <form action="" method="POST">
                        <div class="form-group">    
                            <label for="campaign_name">Input Campaign Title </label>
                            <input type="text" class="form-control" name="campaign_name" id="name">
                        </div>

                        <div class="form-group">
                            <label for="sequence_qty">Sequence qty </label>
                            <input type="text" class="form-control" name="sequence_qty" id="qty">
                            <input type="hidden" name="campaign_type" value="1">
                        </div>

                        <div class="form-group">
                        <label for="label_id">Choose Category</label>
                        
                                <select class="form-control"  name="label_id" id="label_id">
                                    <?php foreach( $label_content as $e) { echo                                                "<option value='$e->id;'>".$e->label_name."</option>";
                                    } ?>
                                </select>
                        </div>

                        <div class="text-right">
                            <button class="btn btn-primary" name="addSmsCampaign">next</button>
                        </div><hr>
                    </form>                    
                </div>

            <?php echo form_close();?>

            </div>
        </div>

  </div>


<?php $this->load->view('footer'); ?>