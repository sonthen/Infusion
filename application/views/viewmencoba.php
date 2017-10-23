<?php $this->load->view('header'); ?>
<?php $this->load->view('navbar'); ?>
<div>
    <div class="row">
        <!-- Navigasi Sequence Form -->
        <div class="col-md-offset-2 col-md-8">
            <h3 class="text-campagin-name">Campaign Name :</h3>
            <?php echo form_input('campaign_name', $campaign[0]["campaign_name"], ["type" => "text",'placeholder'=>'campaign_name', "class" => "form-control"]); ?>
            <button type="button" onclick="document.getElementById('seq-bsr').style.display='block'"  class="btn btn-default btn-seq-besar-plus">+</button>
        </div>

        <div class="col-md-12">
            <div class="container">
                <div class="row">

                    <!-- sequence besar -->
                    <div class="col-md-12 box-seq-besar">
                        <div class="row">
                            <div class="box-seq-status col-md-4">
                                <h3 class="text-seq-stage">Stage/lvl<br></h3>
                                <button type="button" class="btn btn-default btn-seq-besar-plus">On</button>
                                <button type="button" class="btn btn-default btn-seq-besar-plus">Off</button>
                                
                                <?php echo form_open('userCont/addSequence'); ?>
                                <?php echo form_hidden('id', $this->uri->segment(3)); ?>
                                <select name="label" id="label">
                                    <?php foreach( $label_content as $e) { ?>
                                        <!-- "<option value='$e->id;'>".$e->label_name."</option>"; -->
                                        <option value="<?php echo $e->id ?>"><?php echo $e->label_name ?></option>
                                    <?php } ?>
                                </select>
                                
                                <button type="button" onclick="document.getElementById('seq-kcl').style.display='block'"  class="btn btn-default btn-seq-besar-plus">+</button>
                            </div>
                        </div>
                        <div class="row">
                            <!-- sequence kecil -->
                            <div class="col-md-3 box-seq-child">
                                <button type="button" class="btn btn-default btn-xs btn-seq-sms">SMS</button>
                                <button type="button" class="btn btn-default btn-xs btn-seq-email">Email</button>
                                <h3 class="text-nama-seq">Nama Seq</h3>
                                <p class="text-seq-delay">Delay</p>
                                <input type="text" class="form-control" placeholder="Placeholder text">
                                <p class="text-seq-subject">Subject</p>
                                <input type="text" class="form-control" placeholder="Placeholder text">
                                <p class="text-seq-body">Body</p>
                                <textarea class="form-control" rows="3"></textarea>
                                <button type="button" class="btn btn-default btn-seq-delete">Delete</button>
                                <button type="button" class="btn btn-default btn-seq-sent">Sent</button>
                            </div>
                            <!-- sequence kecil HIDDEN -->
                            
                            <div id="seq-kcl" style="display:none" class=" w3-animate-opacity col-md-3 box-seq-child col-md-offset-1">
                                <button type="button" class="btn btn-default btn-xs btn-seq-sms">SMS</button>
                                <button type="button" class="btn btn-default btn-xs btn-seq-email">Email</button>
                                <h3 class="text-nama-seq">Nama Seq</h3>
                                <p class="text-seq-delay">Delay</p>
                                <input value='<?php echo set_value('delay')?>' type="text" class="form-control" name="delay" id="delay" placeholder="Enter Delay (in day)">
                                <p class="text-seq-subject">Subject</p>
                                <input value='<?php echo set_value('subject')?>' type="text" class="form-control" name="subject" id="subject" placeholder="Enter Subject">
                                <p class="text-seq-body">Body</p>
                                <input value='<?php echo set_value('body')?>' type="text" class="form-control" name="body" id="body" placeholder="Enter Your Content">
                                <button class="btn btn-default btn-seq-delete">Label</button>
                                <button class="btn btn-default btn-seq-sent">Label</button>
                            </div>
                            <?php echo form_close(); ?>
                            <!--  -->
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>

<!-- ########## modal ############# -->
<div class="w3-container modal1">
  <?php echo form_open('userCont/edit_data'); ?>
  <?php echo form_hidden('id', $this->uri->segment(3)); ?>
    <div id="id01" class="w3-modal  w3-animate-opacity">
      <div class="w3-modal-content w3-card-4">
        <header class="w3-container w3-teal modal-campaign modal1">
          <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-large w3-display-topright w3-xbtn">&times;</span>
          <h2>Create Campaign</h2>
        </header>
        <!--  -->
            <div class="mailborder">
                <button style="float:right;margin-top:-15px;" type="button"  class="btn btn-default navbar-btn">Sequence 3</button>
                <form action="" method="POST">
                    <div class="form-group">    
                        <label for="Delay">Delay </label>
                        <input type="text" class="form-control" name="campaign-title" id="Delay" placeholder="input Delay...">
                    </div>

                    <div class="form-group">
                        <label for="Subject">Subject</label>
                        <input type="text" class="form-control" name="sequence-qty" id="subject" placeholder="Input Subject...">
                    </div>

                    
                    <div class="form-group">
                        <label for="body">Body</label>
                        <input type="text" class="form-control" id="bodym" name="sequence-qty" id="body">
                    </div>
                

                    <div class="text-right">
                        <button type="button" class="btn btn-primary" name="login">send</button>
                    </div><hr>         
                </form>
            </div>
        <!--  -->
      </div>
    </div>
  <?php echo form_close(); ?>
</div>
<?php $this->load->view('footer'); ?>