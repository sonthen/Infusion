<?php $this->load->view('header'); ?>
<?php $this->load->view('navbar'); ?>
<div>
    <div class="row">
        <!-- Navigasi Sequence Form -->
        <?php echo form_open('userCont/edit_campaign'); ?>
        <?php echo form_hidden('id', $this->uri->segment(3)); ?>
        <div class="col-md-offset-2 col-md-8">
            <h3 class="text-campagin-name">Campaign Name :</h3>
            <?php echo form_input('campaign_name', $campaign[0]["campaign_name"], ["type" => "text",'placeholder'=>'campaign_name', "class" => "form-control"]); ?>
            <button class="btn btn-default btn-seq-sent">Change Campaign Name</button>
        <?php echo form_close(); ?>
        <!-- close nya edit_campaign -->


            <button type="button" onclick="document.getElementById('seq-bsr').style.display='block'"  class="btn btn-default btn-seq-besar-plus">+</button>
        </div>

        <div class="col-md-12">
            <div class="container">
                <div class="row">

                    <!-- sequence besar FOREACH -->
                    <?php foreach( $sequence_container as $seq_cont) { ?>

                        <div id="seq-bsr" class="col-md-12 box-seq-besar">
                            <div class="row">
                                <div class="box-seq-status col-md-4">
                                    <h3 class="text-seq-stage"><?php $seq_cont["lvl"]; ?><br></h3>
                                    <button type="button" class="btn btn-default btn-seq-besar-plus">On</button>
                                    <button type="button" class="btn btn-default btn-seq-besar-plus">Off</button>
                                    
                                    
                                    <select name="label" id="label">
                                        <?php foreach( $label_content as $label) { ?>
                                            <option value="<?php echo $label->id ?>"><?php echo $label->label_name ?></option>
                                        <?php } ?>
                                    </select>
                                    
                                    <button type="button" onclick="document.getElementById('seq-kcl').style.display='block'"  class="btn btn-default btn-seq-besar-plus">+</button>
                                </div>
                            </div>

                            <div class="row">
                                <!-- sequence kecil HIDDEN -->     
                                <div id="seq-kcl" style="display:none" class=" w3-animate-opacity col-md-3 box-seq-child col-md-offset-1">
                                    <button type="button" class="btn btn-default btn-xs btn-seq-sms">SMS</button>
                                    <button type="button" class="btn btn-default btn-xs btn-seq-email">Email</button>
                                    <h3 class="text-nama-seq">Nama Seq</h3>
                                    <p  class="text-seq-subject">Parent ID</p>
                                    <input value='<?php echo set_value('parent_id')?>' type="text" class="form-control" name="parent_id" id="parent_id" placeholder="Parent ID (optional)">
                                    <p  class="text-seq-subject">Delay</p>
                                    <input value='<?php echo set_value('delay')?>' type="text" class="form-control" name="delay" id="delay" placeholder="Enter Delay (in day)">
                                    <p class="text-seq-subject">Subject</p>
                                    <input value='<?php echo set_value('subject')?>' type="text" class="form-control" name="subject" id="subject" placeholder="Enter Subject">
                                    <p class="text-seq-body">Body</p>
                                    <textarea value='<?php echo set_value('body')?>' type="text" class="form-control" name="body" id="body" placeholder="Enter Your Content"></textarea>
                                    <button class="btn btn-default btn-seq-delete">Delete</button>
                                    <button class="btn btn-default btn-seq-sent">Submit</button>
                                </div>
                                <!-- sequence kecil FOREACH -->     
                                
                                <?php echo form_close(); ?>
                                <!--  -->
                            </div>
                        </div>

                    <?php } ?>





                    <!-- ############################################## -->
                    <?php print_r($sequence_content); ?>
                    

                </div>
            </div>
        </div>

    </div>
</div>

<?php $this->load->view('footer'); ?>