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

<?php echo form_open('userCont/addCampaign'); ?>


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
<<<<<<< HEAD
                            <input type="text" class="form-control" name="campaign_name" >
=======
                            <input type="text" class="form-control" name="campaign_name" id="campaign_name">
>>>>>>> f443041435d20773ce8b0746a651a8f17b1e3719
                        </div>

                        <div class="form-group">
                            <label for="sequence_qty">Sequence qty </label>
                            <input type="text" class="form-control" name="sequence_qty" id="sequence_qty">
                        </div>

                        <div class="form-group">
                            <label for="label_id">Choose Category</label>

<<<<<<< HEAD
                            <select class="form-control"  name="label_id">
=======
                            <select class="form-control"  name="label_name" id="label_name">
>>>>>>> f443041435d20773ce8b0746a651a8f17b1e3719
                                <?php foreach( $label_content as $e) { echo
                                    "<option value='$e->id;'>".$e->label_name."</option>";
                                } ?>
                            </select>

<<<<<<< HEAD
                        <div class="text-right">
                            <button class="btn btn-primary" name="addCampaign">next</button></a>
                        </div><hr>             
=======
                            <select name="category_id">
                                <?php foreach ($cats as $category) { ?>
                                    <option <?php if($category->category_id == "your desired id"){ echo 'selected="selected"'; } ?> value="<?php echo $category->category_id ?>"><?php echo $category->category?> </option>
                                <?php } ?>
                            </select>

                        </div>

                        <div class="text-right">
                        <a href="<?php echo base_url(); ?>index.php/userCont/campaignregist">
                            <button type="button" class="btn btn-primary" name="campaignregist"><?php form_submit ('SUBMIT', '')?>next</button></a>
                        </div><hr>    

                        <div class="text-center">
                            <button class="btn btn-primary" name="register">Register</button>
                        </div>         
>>>>>>> f443041435d20773ce8b0746a651a8f17b1e3719
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