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

<?php echo form_open('userCont/campaignregist'); ?>


  <div class="container-fluid">
    <a href="<?php echo base_url(); ?>index.php/userCont/dashboardview"><button type="button" class="btn btn-default navbar-btn">Back</button></a>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="berborder" >
                    <?php echo form_open('barang/insert_data'); ?>

                    <form action="" method="POST">
                        <div class="form-group">    
                            <label for="campaign_name">Input Campaign Title </label>
                            <?php echo form_input('kode_barang_binding', '', ['placeholder'=>'kode barang']); ?>
                            <input type="text" class="form-control" name="campaign_name" >
                        </div>

                        <div class="form-group">
                            <label for="sequence_qty">Sequence qty </label>
                            <input type="text" class="form-control" name="sequence_qty" >
                        </div>

                        <div class="form-group">
                            <label for="label_id">Choose Category</label>

                            <select class="form-control"  name="label_name">
                                <?php foreach( $label_content as $e) { echo
                                    "<option value='$e->id;'>".$e->label_name."</option>";
                                } ?>
                            </select>
                        </div>

                        <div class="text-right"><a href="<?php echo base_url(); ?>index.php/userCont/campaignregist">
                            <button type="button" class="btn btn-primary" name="campaignregist"><?php form_submit ('SUBMIT', '')?>next</button></a>
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