

<style>
/* General Resets */
*,
*:before,
*:after {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

body {
padding-top: 0px !important;
    font-family: "Roboto", sans-serif;
    line-height: 1.6;
    background-color: #fff;
}

/* Header Styles */
#site-header {
    position: relative;
    background: #fff;
}

.top-border {
    border-top: 4px solid #E3A428; /* Full-width top border */
}

#site-header-inner {
    display: flex;
    
    align-items: flex-start; /* Align items at their top edge for proper spacing */
    padding: 0px 0 20px 0; /* Top and bottom padding */
    max-width: 1360px; /* Maximum width for the centered content */
    margin: 0 auto; /* Centering the content horizontally */
    position: relative; /* Needed for absolute positioning of children */
}

#site-logo img {
    display: block;
    padding-top: 8px; /* Keep the padding at the top as previously set */
    max-width: 100%;
    width: auto;
    height: 80px; /* Set the height to 70px */
}


/* Language Switcher Adjustments */
.header-two-aside {
    position: absolute; /* Positioning it absolutely to ensure it touches the top */
    top: 0; /* Align with the top */
    right: 0; /* Align with the right side within the 1360px max-width content */
    background-color: #E3A428; /* Background color for the switcher box */
    width: 150px; /* Exact width */
    height: 28px; /* Exact height */
    display: flex;
    align-items: center; /* Center the links vertically */
    justify-content: space-around; /* Spread out the links within the box */
    border-radius: 0; /* Square edges */
}

.language-switcher {
    list-style: none;
    display: flex;
    width: 100%; /* Ensure the list takes full width of the container */
    justify-content: space-around; /* Evenly space out the links */
}

.language-switcher li a {
    text-decoration: none;
    color: #fff; /* Text color */
    font-size: 15px; /* Adjust based on design */
}

/* Bottom Border Under Logo and Language Switcher */
#site-header-inner:after {
    content: '';
    display: block;
    position: absolute;
    height: 4px;
    background-color: #0f1b3f;
    bottom: 8px; /* Adjust to align with the bottom of the logo */
    left: 0; /* Extend from the left edge of the container */
    right: 0; /* Extend to the right edge of the container */
}

.page-title-container {
    max-width: 1360px; /* Match the max width of the site header inner for alignment */
    margin: 0 auto; /* Center the container */
    padding-left: 20px; /* Adjust based on the site header inner padding to align with the logo */
    padding-top: 40px; /* Space between the header and the title */
}

.page-title {
    font-family: "Roboto", sans-serif;
    font-weight: 300;
    font-size: 30px;
    color: #616161;
    line-height: 24px;
}



/* Style the active class, and buttons on mouse-over */
.active {
  font-weight: bold;
  color: white;
}

</style>






<header id="site-header" class="header-two">
    <div class="top-border"></div> <!-- Top border line -->

    <div id="site-header-inner" class="container wpex-clr">


        <div id="site-logo" class="site-branding header-two-logo wpex-clr">
            <!-- Logo image -->
            <img src="<?php echo base_url(); ?>assets/images/<?php echo $this->lang->line('logo');?>" alt="Logo" class="logo-img" width="232" height="70">
        </div>
<div id="myDIV">

<?php 
		$lg = $this->session->userdata('languages');
if($lg==""){
$lg='tt';
}	
		

 ?>
 
</div>


        <aside id="header-aside" class="wpex-clr header-two-aside">
            <!-- Language switcher -->

            <ul class="language-switcher">
		
               <li><a href="<?php echo base_url(); ?>tt" class="lang-link <?php if($lg === 'tt'){echo 'active';} ?>">TT</a></li>
                <li><a href="<?php echo base_url(); ?>pt"  class="lang-link <?php if($lg === 'pt'){echo 'active';} ?>">PT</a></li>
                <li><a href="<?php echo base_url(); ?>en"  class="lang-link <?php if($lg === 'en'){echo 'active';} ?>">EN</a></li>
                <li><a href="<?php echo base_url(); ?>id"  class="lang-link <?php if($lg === 'id'){echo 'active';} ?>">ID</a></li>

            </ul>
        </aside>
    </div>
    <div class="bottom-border"></div> <!-- Bottom border line -->
</header>


   

  
 