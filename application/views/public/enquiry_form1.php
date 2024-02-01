<div class="container">
<?php
          if(empty($this->session->flashdata('code'))){
			?>  
<div class="modal" id="success-modal">
	<div class="modal-dialog">
		<div class="modal-content">
			
                                 <center><strong style='color:red'><?php echo $this->lang->line('load'); ?>...<br><div id="load"  class="loader"></div>   </strong></center>
                           
		</div>
	</div>
</div>
<?php
}
          ?>

<div class="row">
    <div class="col-md-8">
    
    <div class="page-header">Enquiry Form</div>
            <?php 
                $attr = array('class' => 'form-horizontal', 'id' => 'enquiryModalForm');
                echo form_open('/home/check_enquiry',$attr); 
            ?>
  <fieldset>
    <!-- <legend>Please enter all details below</legend> -->
    <div class="form-group">
      <label for="inputName" class="col-lg-2 control-label"> <i class="fa fa-asterisk" style="color:red;"></i> Name</label>
      <div class="col-lg-10">
        <?php echo form_error('inputName'); ?>
        <input type="text" class="form-control" id="inputName" name="inputName" placeholder="Name" minlength="2" value="<?php echo set_value('inputName'); ?>" required>        
      </div>      
    </div>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label"><i class="fa fa-asterisk" style="color:red;"></i> Email</label>
      <div class="col-lg-10">
        <?php echo form_error('inputEmail'); ?>
        <input type="email" class="form-control" id="inputEmail" name="inputEmail" placeholder="Email" value="<?php echo set_value('inputEmail'); ?>" required>
      </div>
    </div>
    <div class="form-group">
      <label for="inputPhone" class="col-lg-2 control-label">Telephone</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputPhone" name="inputPhone" placeholder="Telephone" value="<?php echo set_value('inputPhone'); ?>">
      </div>
    </div>

    
    <div class="form-group">
      <label for="textArea" class="col-lg-2 control-label"><i class="fa fa-asterisk" style="color:red;"></i> Enquiry</label>
      <div class="col-lg-10">
        <?php echo form_error('inputEnquiry'); ?>
        <?php
        if($this->session->flashdata('query_error')){
          echo $this->session->flashdata('query_error');
        }
        ?>
        <textarea class="form-control" rows="5" id="textAreaEnq" name="inputEnquiry" required><?php echo set_value('inputEnquiry'); ?></textarea>
        <span class="help-block" id="counter"></span>
        <span class="help-block">Please make your enquiry as detailed as possible.</span>
      </div>
    </div>
  </fieldset>
      <div class="pull-right">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary" id="send-enquiry-modal">Send Enquiry</button>
 <button class="btn btn-default btn-primary" data-toggle="modal"  type="submit" id="send-enquiry-modal1"><?php echo $this->lang->line('home_submit1');?></button>


      </div>

        
        
        <?php echo form_close(); ?>
        </div>
        </div>

<style>


        .loader {
    border: 16px solid #f3f3f3;
    border-radius: 50%;
    border-top: 16px solid #3498db;
    width: 20px;
    height: 20px;
    -webkit-animation: spin 2s linear infinite; /* Safari */
    animation: spin 2s linear infinite;
  }
  
  /* Safari */
  @-webkit-keyframes spin {
    0% { -webkit-transform: rotate(0deg); }
    100% { -webkit-transform: rotate(360deg); }
  }
  
  @keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
  }
  </style>


        