<!DOCTYPE html>
<html>

<head>
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <title><?php echo $pagetitle; ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Font CSS (Via CDN) -->
  <!-- <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700'> -->
   <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/google-fonts.css">

   <!-- FullCalendar Plugin CSS -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>vendor/plugins/fullcalendar/fullcalendar.min.css">
  
  <!-- Theme CSS -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/skin/default_skin/css/theme.css">
  
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin-tools/admin-forms/css/admin-forms.css">
  
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin-tools/admin-forms/css/admin-forms.css">
  
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>vendor/plugins/summernote/summernote.css">
 
  
  <!-- Let's load css dynamically: custom helper() queuescript_helper.php -->
  <?php if (isset($css)) { queue_css($css); } ?>
  <?php
  if(isset($css_files)){ 
  foreach($css_files as $file): ?>
    <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
  <?php 
  endforeach;
  }
  ?>
  

  <!-- Favicon -->
  <!-- <link rel="shortcut icon" href="assets/img/favicon.ico"> -->

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="assets/js/ie/html5shiv.js"></script>
  <script src="assets/js/ie/respond.min.js"></script>
<![endif]-->
  
  <style>
.smithbtn, .smithbtn-1, .pmark {
	width: 155px;
}

.smithbtn-2 {
	
	margin-right:10px;
}


</style>

</head>