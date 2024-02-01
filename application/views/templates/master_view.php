<!-- Header -->
<?php $this->load->view('templates/_parts/master_header_view'); ?>
    
<!-- Navigation -->
<?php $this->load->view('templates/_parts/master_subnav_view'); ?>


<div class="container">
<!-- flash data messages -->

<?php if ($this->session->flashdata('success')) { ?>

<div class="alert alert-dismissible alert-success" style="font-size: 18px;">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <?php
  $referer = $_SERVER['HTTP_REFERER'];
  if(strpos($referer,'re_enquiry') != false){
  	echo $this->session->flashdata('success');
  }else{
  	?>
  	<strong><i class="fa fa-check-circle-o"></i> Success!</strong> 
  	<?php 
  	echo $this->session->flashdata('success');
  }
  ?>
</div>

<?php } elseif ($this->session->flashdata('error')) { ?>

<div class="alert alert-dismissible alert-danger" style="font-size: 18px;">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong><i class="fa fa-times-circle-o"></i> Error!</strong> <?php echo $this->session->flashdata('error'); ?>
</div>

<?php } elseif ($this->session->flashdata('warning')) { ?>

<div class="alert alert-dismissible alert-warning" style="font-size: 18px;">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong><i class="fa fa-times-circle-o"></i> Sorry!</strong> <?php echo $this->session->flashdata('warning'); ?>
</div>

<?php } ?>
<?php echo $the_view_content;?>
      
<!-- Footer -->
<?php $this->load->view('templates/_parts/master_footer_view'); ?>
      
<script type="text/javascript">
		var timeout = 5000; // in miliseconds (3*1000)

$('.alert-success').delay(timeout).fadeOut(300);

$('.alert-warning').delay(timeout).fadeOut(300);
$('.alert-danger').delay(timeout).fadeOut(300);

		 </script>