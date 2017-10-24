<?php $this->load->view('header'); ?>
<?php $this->load->view('navbar'); ?>

<div>
    <div class="row">
<<<<<<< HEAD
        <div class="col-md-1 btn-back">
            <a href="<?php echo base_url('index.php/usercont/dashboardview'); ?>">
                <button type="button" class="btn btn-default">Back to Dashboard</button>
            </a>
=======
        <!-- Navigasi Sequence Form -->
        <div class="col-md-offset-2 col-md-8">
        <?php echo form_open('userCont/edit_campaign'); ?>
        <?php echo form_hidden('id', $this->uri->segment(3)); ?>
            <h3 class="text-campagin-name">Campaign Name :</h3>
            <?php echo form_input('campaign_name', $campaign[0]["campaign_name"], ["type" => "text",'placeholder'=>'campaign_name', "class" => "form-control"]); ?>
            <button class="btn btn-default btn-seq-besar-plus" name="edit_campaign">+</button>
            <?php echo form_close(); ?>
>>>>>>> e37da979aac2b15611296dc03cbbb4ab4195aba3
        </div>
    <!-- Navigasi Sequence Form -->
        <?php echo form_open('userCont/edit_campaign'); ?>
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
                        <?php echo form_open('userCont/add_sequence_container/'.$this->uri->segment(3)); ?>     
                            <div class="row">
                                
                                <div class="col-md-4 box-seq-container-name">
                                    <input value='<?php echo set_value('sequence_container_name')?>'type="text" placeholder="Name" class="form-control input-seq-container-name" name="sequence_container_name" id="sequence_container_name">
                                </div>
                                <div class="box-seq-status col-md-5" data-pg-collapsed>
                                    <button type="button" class="btn btn-default btn-seq-on" disabled>On</button>
                                    <button type="button" class="btn btn-default btn-seq-off"disabled>Off</button>
                                    <!-- button munculin sequence kecil -->
                                    <button id="btn-plus" onclick="document.getElementById('seq_kcl').style.display='block'" type="button" class="btn btn-default plus-button" disabled>+</button>
                                    
                                    <select class="form-control text-seq-select" name="label_id" id="label_id">
                                        <?php foreach( $label_content as $label) { ?>
                                            <option value="<?php echo $label->id ?>"><?php echo $label->label_name ?></option>
                                        <?php } ?>
                                    </select>
                                    <input value='<?php echo set_value('lvl')?>'type="text" placeholder="Stage/Lvl" class="form-control input-seq-stage" name="lvl" id="lvl">
                                </div>
                            </div>

                            <!-- button CREATE sequence besar -->
                            <div class="col-md-12">
                                <button class="btn btn-default btn-seq-besar-create">Create</button>
                            </div>
                        <?php echo form_close(); ?>
                    </div><!-- akhir sequence besar HIDDEN -->


    <!-- ######################### -->


                    <!-- sequence besar FOREACH -->
                    <?php foreach( $sequence_container as $seq_cont) { ?>
                        <div class="col-md-12 box-seq-besar">
                            <div class="row">
                                <div class="col-md-4 box-seq-container-name">
                                    <?php echo $seq_cont["sequence_container_name"]; ?>
                                </div>
                                <div class="box-seq-status col-md-4" data-pg-collapsed>
                                    <h3 class="text-seq-stage"><?php echo  $seq_cont["lvl"]; ?></h3>
                                    <button type="button" class="btn btn-default btn-seq-on">On</button>
                                    <button type="button" class="btn btn-default btn-seq-off">Off</button>
                                    <!-- button munculin sequence kecil -->
                                    
                                    <button id="btn-plus" onclick="document.getElementById('<?php echo  $seq_cont["id"]; ?>').style.display='block'" type="button" class="btn btn-default plus-button">+</button>
                                    
                                    <select class="form-control text-seq-select" name="label" id="label">
                                        <?php foreach( $label_content as $label) { ?>
                                            <option <?php if($label->id == $seq_cont["label_id"]){ echo 'selected="$seq_cont["label_id"]"'; } ?> value="<?php echo $label->id ?>"><?php echo $label->label_name ?></option>
                                            <!-- <option value="<?php echo $label->id ?>"><?php echo $label->label_name ?></option> -->
                                        <?php } ?>
                                    </select>

                                </div>
                            </div>

                            <div class="row">
                                <!-- sequence kecil HIDDEN -->
                                <?php echo form_open('userCont/add_sequence/'.$this->uri->segment(3).'/'.$seq_cont["id"]); ?>
                                <?php echo form_hidden('id_campaign', $this->uri->segment(3)); ?> 
                                    <div id="<?php echo $seq_cont["id"]; ?>" style="display:none" class="w3-animate-opacity col-md-3 box-seq-child boxer col-md-offset-1" data-pg-collapsed>
                                        <button type="button" class="btn btn-default btn-xs btn-seq-sms">SMS</button>
                                        <button type="button" class="btn btn-default btn-xs btn-seq-email">Email</button>
                                        <h3 class="text-nama-seq">Nama Seq</h3>
                                        <p class="text-seq-delay">Parent Id</p>
                                        <input value='<?php echo set_value('parent_id')?>'type="text" class="form-control" name="parent_id" id="parent_id">
                                        <p class="text-seq-delay">Delay</p>
                                        <input value='<?php echo set_value('delay')?>'type="text" class="form-control" name="delay" id="delay">
                                        <p class="text-seq-subject">Subject</p>
                                        <input value='<?php echo set_value('value_1')?>'type="text" class="form-control" name="value_1" id="value_1">
                                        <p class="text-seq-body">Body</p>
                                        <textarea style="min-height:214px;" value='<?php echo set_value('value_2')?>'type="text" class="form-control" name="value_2" id="editor1"></textarea>
                                       
                                        <button class="btn btn-default btn-seq-sent">Create</button>
                                    </div>
                                <?php echo form_close(); ?>
                                <!-- sequence kecil FOREACH -->   
                                <?php foreach( $sequence_content as $seq) { ?>
                                    <?php if( $seq["container_id"]== $seq_cont["id"]) { ?>
                                        <?php echo form_open('userCont/edit_sequence/'.$this->uri->segment(3).'/'.$seq["id"]); ?>
                                        <?php echo form_hidden('id_campaign', $this->uri->segment(3)); ?> 
                                            <div class="col-md-3 box-seq-child boxer col-md-offset-1" data-pg-collapsed>
                                                <button type="button" class="btn btn-default btn-xs btn-seq-sms">SMS</button>
                                                <button type="button" class="btn btn-default btn-xs btn-seq-email">Email</button>
                                                <h3 class="text-nama-seq">Nama Seq</h3>
                                                <p class="text-seq-delay">Parent Id</p>
                                                <?php echo form_input('parent_id', $seq["parent_id"], ["type" => "text",'placeholder'=>'Parent ID', "class" => "form-control"]); ?>
                                                <p class="text-seq-delay">Delay</p>
                                                <?php echo form_input('delay', $seq["delay"], ["type" => "text",'placeholder'=>'Delay (in day)', "class" => "form-control"]); ?>
                                                <p class="text-seq-subject">Subject</p>
                                                <?php echo form_input('value_1', $seq["value_1"], ["type" => "text",'placeholder'=>'Type Your Subject Here', "class" => "form-control"]); ?>
                                                <p class="text-seq-body">Body</p>
                                                <?php echo form_textarea('value_2', $seq["value_2"], ["id" => "editor1", "type" => "text",'placeholder'=>'Insert Your Content Here', "class" => "form-control"]); ?>
                                                <a href="<?php echo base_url('index.php/usercont/delete_sequence/'.$this->uri->segment(3).'/'.$seq["id"]); ?>">
                                                    <button type="button" class="btn btn-default btn-seq-delete">Delete</button>
                                                </a>
                                                <button class="btn btn-default btn-seq-sent">Edit</button>
                                            </div>
                                        <?php echo form_close(); ?>
                                    <?php } ?>
                                <?php } ?>
                                

                                <!-- button CREATE sequence besar -->
                                <div class="col-md-12">
                                    <button type="button" class="btn btn-default btn-seq-besar-create">Create</button>
                                </div>
                            </div>
                        </div>
                    <?php } ?> <!-- akhir FOREACH besar -->


    <!-- ######################################## -->

                    
                    
                     
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('footer'); ?>