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

<?php echo form_open('userCont/edit_data'); ?>
<?php echo
form_hidden('id', $this->uri->segment(3));
 ?>


  <div class="container-fluid">
    <a href="<?php echo base_url(); ?>index.php/userCont/dashboardview"><button type="button" class="btn btn-default navbar-btn">Back</button></a>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="berborder" >

                    <form action="" method="POST">
                        <div class="form-group">
                            <label >Input Campaign Title </label>

                            <?php echo form_input('campaign_name', $campaign[0]["campaign_name"], ["type" => "text",'placeholder'=>'campaign_name', "class" => "form-control"]); ?>
                        </div>

                        <div class="form-group">
                            <label >Sequence qty </label>
                              <?php echo form_input('sequence_qty', $campaign[0]["sequence_qty"], ['placeholder'=>'sequence_qty',"name" =>"sequence_qty", "class" => "form-control","type" => "text"]); ?>
                            <!-- <input type="text" class="form-control" name="sequence_qty" > -->
                        </div>

                        <div class="form-group">
                            <label >Choose Category</label>
                            <select class="form-control"  name="label_id">
                                <?php foreach( $label as $e) { ?>
                                    <!-- "<option value='$e->id;'>".$e->label_name."</option>"; -->
                                    <option <?php if($e->label_name == $campaign[0]['label_name']){ echo 'selected="selected"'; } ?> value="<?php echo $e->id ?>"><?php echo $e->label_name ?></option>
                                <?php } ?>

                            </select>
                        </div>

                        <div class="text-right"><a href="<?php echo base_url(); ?>index.php/userCont/edit_data">
                            <button  class="btn btn-primary" ><?php form_submit ('SUBMIT', '')?>Next</button></a>
                        </div><hr>
                    </form>

                </div>
            </div>
        </div>

  </div>

  <?php echo

form_close();
(''); ?>
<?php $this->load->view('footer'); ?>
