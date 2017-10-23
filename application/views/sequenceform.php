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
<?php $this->load->view('navbar');?>

<div class="container-fluid"><a href="<?php echo base_url('index.php/userCont/dashboardview'); ?>">
    <button type="button" class="btn btn-default navbar-btn">Back to Dashboard</button></a>
    
    <span><button style="position:relative; top:10px;" onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-xlarge w3-circle  btn-plus2">+</button></span>
    
    <div class="row">
        <div class="col-md-12">
            <div class="row">


                <!--  -->
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
                <!--  -->

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

<!-- this is for load footer template -->
<?php $this->load->view('footer'); ?>