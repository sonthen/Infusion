<?php $this->load->view('header'); ?>
<?php $this->load->view('navbar'); ?>

<div>
    <div class="row">
        <div class="col-md-1 btn-back" style="position:absolute; left:25px; top:65px;">
            <a href="<?php echo base_url('usercont/dashboardview'); ?>">
                <button type="button" class="btn btn-default">Back to Dashboard</button>
            </a>
        </div>
    <!-- Edit Campaign DKK -->
        <?php echo form_open('usercont/edit_campaign'); ?>
        <?php echo form_hidden('id', $this->uri->segment(3)); ?>
            <div class="col-md-offset-3 col-md-6">
                <h3 class="text-campagin-name">Campaign Name :</h3>
                <button type="button" onclick="document.getElementById('seq_bsr').style.display='block'" class="btn btn-default btn-besar btn-plus-seq-besar">+</button>
                <?php echo form_input('campaign_name', $campaign[0]["campaign_name"], ["type" => "text",'placeholder'=>'campaign_name', "class" => "form-control"]); ?>
                <button class="btn btn-default btn-besar btn-create-campaign">Change Campaign Name</button>
            </div>
        <?php echo form_close(); ?>

        <div class="col-md-12">
            <div class="container">
                <div class="row">

                    <!-- sequence besar HIDDEN -->        
                    <div id="seq_bsr" style="display:none" class="w3-animate-opacity col-md-12 box-seq-besar">
                        <?php echo form_open('usercont/add_sequence_container/'.$this->uri->segment(3)); ?>     
                            <div class="row">
                                <!-- Navigasi Seq Besar -->
                                <div class="col-md-3 box-seq-container-name">
                                    <input value='<?php echo set_value('sequence_container_name')?>'type="text" placeholder="Name" class="form-control input-seq-container-name" name="sequence_container_name" id="sequence_container_name">
                                </div>
                                <div class="box-seq-status col-md-7">
                                    <button type="button" class="btn btn-default btn-seq-off"disabled>Off</button>
                                    <!-- button munculin sequence kecil -->
                                    <button id="btn-plus" onclick="document.getElementById('seq_kcl').style.display='block'" type="button" class="btn btn-default plus-button" disabled>+</button>
                                    <select class="form-control text-seq-select" name="label_id" id="label_id">
                                        <?php foreach( $label_content as $label) { ?>
                                            <option value="<?php echo $label->id ?>"><?php echo $label->label_name ?></option>
                                        <?php } ?>
                                    </select>
                                    <select class="form-control text-seq-select" name="container_parent" id="container_parent">
                                        <option value="">Select Parent Container</option>
                                        <?php foreach( $sequence_container as $seq_cont) { ?>
                                            <option value="<?php echo $seq_cont['id'] ?>"><?php echo $seq_cont['sequence_container_name'] ?></option>
                                        <?php } ?>
                                    </select>
                                    <button class="btn btn-default btn-seq-besar-create">Create</button>
                                </div>
                                <!-- Akhir Navigasi Seq Besar -->
                                <div class="box-seq-status col-md-2">
                                    <button type="button" class="btn btn-default btn-seq-besar-minimize" disabled>-</button>
                                    <button type="button" class="btn btn-default btn-seq-besar-delete" disabled>&times</button>
                                </div>
                            </div>
                        <?php echo form_close(); ?>
                    </div><!-- akhir sequence besar HIDDEN -->


    <!-- ######################### -->


                    <!-- sequence besar FOREACH -->
                    <?php foreach( $sequence_container as $seq_cont) { ?>
                        <div class="col-md-12 box-seq-besar">
                            <div class="row">
                                <!-- Navigasi Seq Besar -->
                                <div class="col-md-3 box-seq-container-name">
                                    <h3><?php echo $seq_cont["sequence_container_name"]; ?></h3>
                                </div>
                                <div class="box-seq-status col-md-7" data-pg-collapsed>
                                    <?php if( $seq_cont["stat"]== 1) { ?>
                                        <a href="<?php echo base_url('usercont/toggle_container/'.$this->uri->segment(3).'/'.$seq_cont["id"].'/'.$seq_cont["stat"]); ?>">
                                            <button type="button" class="btn btn-default btn-seq-on">On</button>
                                        </a>
                                    <?php } else {?>
                                        <a href="<?php echo base_url('usercont/toggle_container/'.$this->uri->segment(3).'/'.$seq_cont["id"].'/'.$seq_cont["stat"]); ?>">
                                        <button type="button" class="btn btn-default btn-seq-off">Off</button>
                                        </a>
                                    <?php } ?>
                                    
                                    <!-- button munculin sequence kecil -->
                                    <button id="btn-plus" onclick="document.getElementById('<?php echo  $seq_cont["id"]; ?>').style.display='block'" type="button" class="btn btn-default plus-button">+</button>
                                    
                                    <select class="form-control text-seq-select" name="label" id="label">
                                        <?php foreach( $label_content as $label) { ?>
                                            <option <?php if($label->id == $seq_cont["label_id"]){ echo 'selected="$seq_cont["label_id"]"'; } ?> value="<?php echo $label->id ?>"><?php echo $label->label_name ?></option>
                                        <?php } ?>
                                    </select>
                                    <select class="form-control text-seq-select">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option value="value">Name</option>
                                    </select>
                                    <h3 class="text-seq-stage"><?php echo  $seq_cont["lvl"]; ?></h3>
                                    <button type="button" class="btn btn-default btn-seq-besar-create">Update</button>
                                    
                                </div>
                                <div class="box-seq-status col-md-2">
                                    <a href="<?php echo base_url('usercont/addEmailCampaign'); ?>">
                                        <button type="button" class="btn btn-default btn-seq-besar-minimize" disabled>-</button>
                                    </a>
                                    <a href="<?php echo base_url('usercont/delete_sequence_container/'.$this->uri->segment(3).'/'.$seq_cont['id']); ?>">
                                        <button type="button" class="btn btn-default btn-seq-besar-delete">&times</button>
                                    </a>
                                </div>
                                <!-- Akhir Navigasi Seq Besar -->
                            </div>

                            <div class="row">
                                <!-- sequence kecil HIDDEN -->
                                <?php echo form_open('usercont/add_sequence/'.$this->uri->segment(3).'/'.$seq_cont["id"]); ?>
                                <?php echo form_hidden('id_campaign', $this->uri->segment(3)); ?> 
                                    <div id="<?php echo $seq_cont["id"]; ?>" style="display:none" class="w3-animate-opacity col-md-3 box-seq-child boxer col-md-offset-1" data-pg-collapsed>
                                        <button type="button" class="btn btn-default btn-xs btn-seq-email">Email</button>
                                
                                        <input value='<?php echo set_value('sequence_name')?>'type="text" placeholder="Sequence Name" class="form-control" name="sequence_name" id="sequence_name">
                                        <p class="text-seq-delay">Parent</p>
                                        <input value='<?php echo set_value('parent_id')?>'type="number" class="form-control" name="parent_id" id="parent_id">
                                        <p class="text-seq-delay">Delay</p>
                                        <input value='<?php echo set_value('delay')?>'type="number" class="form-control" name="delay" id="delay">
                                        <p class="text-seq-subject">Subject</p>
                                        <input value='<?php echo set_value('value_1')?>'type="text" class="form-control" name="value_1" id="value_1">
                                        <p class="text-seq-body">Body</p>
                                        <textarea  id="editor" style="min-height:214px;" value='<?php echo set_value('value_2')?>'type="text" class="form-control" name="value_2"></textarea>
                                       
                                        <button class="btn btn-default btn-seq-sent">Create</button>
                                    </div>
                                <?php echo form_close(); ?>
                                <!-- sequence kecil FOREACH -->   
                                <?php foreach( $sequence_content as $seq) { ?>
                                    <?php if( $seq["container_id"]== $seq_cont["id"]) { ?>
                                        <?php echo form_open('usercont/edit_sequence/'.$this->uri->segment(3).'/'.$seq["id"]); ?>
                                        <?php echo form_hidden('id_campaign', $this->uri->segment(3)); ?> 
                                            <div class="col-md-3 box-seq-child boxer col-md-offset-1" data-pg-collapsed>
                                                <?php if( $seq["sequence_type"]== 1) { ?>
                                                    <a href="<?php echo base_url('usercont/toggle_sequence/'.$this->uri->segment(3).'/'.$seq["id"].'/'.$seq["sequence_type"]); ?>">
                                                        <button type="button" class="btn btn-default btn-xs btn-seq-sms">SMS</button>
                                                    </a>
                                                <?php } else {?>
                                                    <a href="<?php echo base_url('usercont/toggle_sequence/'.$this->uri->segment(3).'/'.$seq["id"].'/'.$seq["sequence_type"]); ?>">
                                                        <button type="button" class="btn btn-default btn-xs btn-seq-email">Email</button>
                                                    </a>
                                                <?php } ?>
                                                <h3 class="text-nama-seq"><?php echo $seq["sequence_name"] ?></h3>
                                                <p class="text-seq-delay">Parent</p>
                                                <?php echo form_input(['name'=>'parent_id','value'=>$seq["parent_id"], 'type' => 'number','placeholder'=>'Parent ID', 'class' => 'form-control']); ?>
                                                <p class="text-seq-delay">Delay</p>
                                                <?php echo form_input(['name'=>'delay','value'=>$seq["delay"], 'type' => 'number','placeholder'=>'Delay (in day)', 'class' => 'form-control']); ?>
                                                <p class="text-seq-subject">Subject</p>
                                                <?php echo form_input(['name'=>'value_1','value'=>$seq["value_1"], 'type' => 'text','placeholder'=>'Subject', 'class' => 'form-control']); ?>
                                                <p class="text-seq-body">Body</p>
                                                <textarea  id="editor" style="min-height:214px;" type="text" class="form-control" name="value_2"><?php echo $seq['value_2']; ?></textarea>
                                    
                                                <a href="<?php echo base_url('usercont/delete_sequence/'.$this->uri->segment(3).'/'.$seq["id"]); ?>">
                                                    <button type="button" class="btn btn-default btn-seq-delete">Delete</button>
                                                </a>
                                                <button class="btn btn-default btn-seq-sent">Edit</button>
                                            </div>
                                        <?php echo form_close(); ?>
                                    <?php } ?> <!-- end if id container -->
                                <?php } ?><!-- end if foreach-->
                            </div>
                        </div>
                    <?php } ?> <!-- akhir FOREACH besar -->


    <!-- ################### modal ##################### -->
                    <div class="w3-container modal1">
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
                    </div>
    <!-- ################### akhir modal ##################### -->
                     
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('footer'); ?>