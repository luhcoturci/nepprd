<!-- Header -->
<?php $this->load->view('templates/_parts/admin_header'); ?>

<?php $bodyclass = 'blank light'; ?>

<body class="<?php echo $bodyclass; ?>">
    <div id="wait" style="display: none; width:69px;height:89px;position:fixed;top:50%;left:50%;padding:2px;z-index:10000;">
      <img src="<?php echo base_url(); ?>assets/img/waitLoader.gif">
      <br><h4>Please Wait...</h4>
    </div>
<div id="main">
     
    
    <?php $this->load->view('templates/_parts/admin_navbar'); ?>
       
    
    <?php $this->load->view('templates/_parts/admin_sidebar'); ?>
    
    <!-- Start: Content-Wrapper -->
    <section id="content_wrapper">
          
        <!-- Notification and user dropdown in topbar -->
        <?php $this->load->view('templates/_parts/admin_topbar'); ?>
        
        <!-- Begin: Content -->
        <section id="content" class="animated fadeIn">
        
        <!-- flash data messages -->

            <?php if ($this->session->flashdata('success')) { ?>
            
            <div class="alert alert-dismissible alert-success" style="font-size: 18px;">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              <strong><i class="fa fa-check-circle-o"></i> Success!</strong> <?php echo $this->session->flashdata('success'); ?>
            </div>
            
            <?php } elseif ($this->session->flashdata('error')) { ?>
            
            <div class="alert alert-dismissible alert-danger" style="font-size: 18px;">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              <strong><i class="fa fa-times-circle-o"></i> Error!</strong> <?php echo $this->session->flashdata('error'); ?>
            </div>
            
            <?php } ?>
        
            <!-- flash data message -->
            <!-- <div id="infoMessage" class="text-center"><?php echo $this->session->flashdata('message');?></div> -->
        
            <?php echo $the_view_content;?><!--Analayze this-->
    
        </section> <!-- End: Content -->    
    </section> <!-- End: Content-Wrapper -->
    
    <?php $this->load->view('templates/_parts/admin_rightbar'); ?>

</div>
<!-- End: Main -->
      
<!-- Footer -->
<?php $this->load->view('templates/_parts/admin_footer'); ?>
      
