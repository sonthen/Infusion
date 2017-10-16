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

  <div class="container-fluid"> 
    <a href="<?php echo base_url(); ?>index.php/userCont/dashboardview"><button type="button" class="btn btn-default navbar-btn">Back</button></a>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
            <h1>SMS</h1>

            <?php echo form_open('userCont/addCampaign'); ?>

                <div class="berborder" >
                    <form action="" method="POST">
                        <div class="form-group">    
                            <label for="campaign_name">Input Campaign Title </label>
                            <input type="text" class="form-control" name="campaign_name" id="name">
                        </div>

                        <div class="form-group">
                            <label for="sequence_qty">Sequence qty </label>
                            <input type="text" class="form-control" name="sequence_qty" id="qty">
                        </div>

                        <div class="form-group">
                            <label for="label_id">Choose Category</label>
                                <select class="form-control" id="label_id" name="label_id">
                                    <option value="3">Belum Top up</option>
                                    <option value="4">KCP baru</option>
                                    <option value="5">KCP belum belanja</option>
                                </select>
                        </div>

                        <div class="text-right"><a href="<?php echo base_url(); ?>index.php/userCont/smsform">
                            <button type="button" class="btn btn-primary" name="addCampaign">next</button></a>
                        </div><hr>
                    </form>                    
                </div>

            <?php echo form_close();?>

            </div>
        </div>

  </div>


<?php $this->load->view('footer'); ?>