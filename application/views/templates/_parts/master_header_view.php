<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>NEP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
     <link rel="icon" type="image/ico" sizes="16x16" href="<?php echo base_url(); ?>assets/images/aa.png">

      <!-- Font CSS (Via CDN) Neloy-->
      <!-- <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700'> -->
       <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/google-fonts.css" />
       <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css" />
       <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/custom.min.css" />
       <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome-4.6.1/css/font-awesome.min.css" />
       <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/counter-style.css" />
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/assets/emosi.css" />
	  
      <!-- Let's load css dynamically: custom helper() queuescript_helper.php -->
      <?php if (isset($css)) { queue_css($css); } ?>


    
   <!-- <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.1/summernote.css" rel="stylesheet"> -->
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="assets/js/ie/html5shiv.js"></script>
        <script src="assets/js/ie/respond.min.js"></script>
    <![endif]-->

<style>

.smith-question {
    
  /* padding: 10.5px 21px; */
  /* margin: 0 0 21px; */
  font-size: 18px;


}

.smith-small {
    
  /* padding: 10.5px 21px; */
  /* margin: 0 0 21px; */
	font-size: 12px;
  

}

.smith-numbers {
	font-family: 'Raleway',sans-serif;
}
.q_counter_holder.boxed_counter{border:1px solid #eaeaea;padding:20px 40px;background-color:#fff}
.q_counter_holder.left{text-align:left}
.q_counter_holder.right{text-align:right}
.q_counter_holder.center{text-align:center;padding:20px 40px}
.q_counter_holder span.counter{font-size:60px;line-height:1em;font-weight:300;color:#1abc9c;display:inline-block!important;height:1em}
.q_counter_holder p.counter_text{font-weight:600;text-transform:uppercase;letter-spacing:1px;margin:12px 0 0 00}
.q_counter_holder .separator.small{background-color:#eaeaea;margin:19px auto 0 auto}
.q_counter_holder.left .separator.small{margin-left:0;margin-right:auto}
.q_counter_holder.right .separator.small{margin-left:auto;margin-right:0}


.knob-label{text-align:center;color:#333;font-weight:100;font-size:12px;margin-bottom:0.3em}

.info-box{display:block;min-height:50px;background:#fff;width:100%;box-shadow:0 1px 1px rgba(0,0,0,0.1);border-radius:2px;margin-bottom:15px}
.info-box small{font-size:14px}
.info-box .progress{background:rgba(0,0,0,0.2);margin:5px -10px 5px -10px;height:2px}
.info-box .progress,.info-box .progress .progress-bar{border-radius:0}
.info-box .progress .progress-bar{background:#fff}
.info-box-icon{border-top-left-radius:2px;border-top-right-radius:0;border-bottom-right-radius:0;border-bottom-left-radius:2px;display:block;float:left;height:50px;width:90px;text-align:center;font-size:45px;line-height:90px;background:rgba(0,0,0,0.2)}
.info-box-icon>img{max-width:100%}
.info-box-content{padding:5px 10px;margin-left:90px}
.info-box-number{display:block;font-weight:bold;font-size:14px}
.progress-description,.info-box-text{display:block;font-size:14px;white-space:nowrap;overflow:hidden;text-overflow:ellipsis}
.info-box-text{text-transform:uppercase}
.info-box-more{display:block}

.smith-chat {
	font-size: 10px; 
	font-weight: light;
	background: #eee;
}

.forum.table > tbody > tr > td {
    vertical-align: middle;
}

.forum .fa {
    width: 1em;
    text-align: center;
}

.forum.table th.cell-stat {
    width: 6em;
}

.forum.table th.cell-stat-2x {
    width: 14em;
}

.smith-page-header {
  padding-bottom: 9.5px;
  margin: 42px 0 21px;
 
}

.smith-page-header h1 {
  font-size: 4em;
 
}


p.enquiry-header {
  font-family: "Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size: 2.4em;
  font-weight: 300;
  color: #999999;
}

div.enquiry-details {
  /*font-family: "Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif;*/
  
  font-weight: 300;
  line-height: 1.6em;
  
}
div.enquiry-details small {
  color: #999999;
}

.smith-badge {
  display: inline-block;
  min-width: 10px;
  padding: 3px 7px;
  font-size: 12px;
  /* font-weight: bold; */
  color: #ffffff;
  line-height: 1;
  vertical-align: middle;
  white-space: nowrap;
  text-align: left;
  background-color: #008cba;
  border-radius: 10px;
	line-height: 1.5em;
}

.highlight { color:#c31000; background:yellow; font-weight:bold; }

.btn-primary.gradient {
	background: -moz-linear-gradient(top,  #33a6cc 50%, #0099cc 50%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(50%,#33a6cc), color-stop(50%,#0099cc)); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top,  #33a6cc 50%,#0099cc 50%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top,  #33a6cc 50%,#0099cc 50%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top,  #33a6cc 50%,#0099cc 50%); /* IE10+ */
	background: linear-gradient(to bottom,  #33a6cc 50%,#0099cc 50%); /* W3C */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#33a6cc', endColorstr='#0099cc',GradientType=0 ); /* IE6-9 */
	border-radius: 5px;
}

.btn-primary.gradient:hover, .btn-primary.gradient:focus, .btn-primary.gradient:active, .btn-primary.gradient.active, .open > .dropdown-toggle.btn-primary {
	background: -moz-linear-gradient(top,  #66b2cc 50%, #33a6cc 50%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(50%,#66b2cc), color-stop(50%,#33a6cc)); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top,  #66b2cc 50%,#33a6cc 50%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top,  #66b2cc 50%,#33a6cc 50%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top,  #66b2cc 50%,#33a6cc 50%); /* IE10+ */
	background: linear-gradient(to bottom,  #66b2cc 50%,#33a6cc 50%); /* W3C */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#66b2cc', endColorstr='#33a6cc',GradientType=0 ); /* IE6-9 */
}

.btn-primary.gradient:active, .btn-primary.gradient.active {
	background: -moz-linear-gradient(top,  #267c99 50%, #007299 50%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(50%,#267c99), color-stop(50%,#007299)); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top,  #267c99 50%,#007299 50%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top,  #267c99 50%,#007299 50%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top,  #267c99 50%,#007299 50%); /* IE10+ */
	background: linear-gradient(to bottom,  #267c99 50%,#007299 50%); /* W3C */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#267c99', endColorstr='#007299',GradientType=0 ); /* IE6-9 */
}

.btn-primary.raised {
	box-shadow: 0 3px 0 0 #007299;
}

.btn-primary.raised:active, .btn-primary.raised.active {
	background: #33a6cc;
	box-shadow: none;
	margin-bottom: -3px;
	margin-top: 3px;
}

.navbar.navbar-custom{
    /*background-color: green;*/
background-color: #38516a;


}
.navbar.navbar-custom .navbar-nav > li > a:hover, .navbar.navbar-custom .navbar-nav > li > a:focus{
    background-color: red;
}

@media print{
    .pagination{
        display: none;
    }
}

.myimg {
    width: 100%;
    float: left;
    margin-right: -100px;
    position: relative;
    background-image:url('<?php echo base_url(); ?>/assets/img/1f1f9-1f1f1.png')
}
</style>
  </head>
  <body>