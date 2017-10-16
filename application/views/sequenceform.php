<style>
   
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

  <div class="container-fluid"><a href="<?php echo base_url(); ?>index.php/userCont/emailcampaign">
    <button type="button" href="<?php echo base_url(); ?>index.php/authCont/logout" class="btn btn-default navbar-btn">Back</button></a>
<div class="row">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-3">            
                <div class="mailborder">
                    <button style="float:right;margin-top:-15px;" type="button"  class="btn btn-default navbar-btn">Sequence 1</button>
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
                </div>
                <!--  -->
                <div class="col-md-3">            
                    <div class="mailborder">
                        <button style="float:right;margin-top:-15px;" type="button"  class="btn btn-default navbar-btn">Sequence 2</button>
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
                    </div>
                    <!--  -->
                    <div class="col-md-3">            
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
                        </div>
                     </div>
                 </div>
            </div>      
        </div>

<!-- this is for load footer template -->
<?php $this->load->view('footer'); ?>