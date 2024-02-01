<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php
          if(empty($this->session->flashdata('code'))){
			?>  
<div class="modal" id="success-modal">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header bg-success">
				<button type="button" class="close" data-dismiss="modal"
					aria-hidden="true" id="dismiss-success">&times;</button>
				<h4 class="modal-title">
					<i class="fa fa-check-circle text-success"></i> <?php echo $this->lang->line('verification5');?>
				</h4>
			</div>
			<div class="modal-body">
				<p class="text-center">
                    <?php echo $this->lang->line('verification6');?>
				</p>
			</div>
		</div>
	</div>
</div>
<?php
}
          ?>
<div class="container">
	<div class="smith-page-header">
		<h1 class="text-center"><?php echo $this->lang->line('verification1');?></h1>
		<h3 class="text-center"><?php echo $this->lang->line('verification2');?></h3>
    <h4 class="text-center"><?php echo $this->lang->line('verification3');?></h4>
		<div class="clearfix"></div>
	</div>
	
		<div class="row">
      <div class="col-md-6 col-md-offset-3">
        <?php //echo form_open("/home/verification_submit/"); ?>
		
		 <form method="post" action="<?php echo base_url();?>home/verification_submit" enctype="multipart/form-data">
        <div class="form-group">
          <label class="control-label"></label>
         <?php
          if(!empty($this->session->flashdata('code'))){
          	echo $this->session->flashdata('code');
          }
          ?>
          <div class="input-group">                
            <input type="text" class="form-control" name="code" placeholder="<?php echo $this->lang->line('verification4');?>">
            
            <span class="input-group-btn">
              <button class="btn btn-default btn-primary" data-toggle="modal" data-target="#success-modal" type="submit"><?php echo $this->lang->line('home_submit1');?></button>
            </span>
          </div>
        </div>
        </form>
      </div>
    </div>
	

