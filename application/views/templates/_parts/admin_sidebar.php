  <!-- Start: Sidebar -->
    <aside id="sidebar_left" class="nano nano-light affix">

      <!-- Start: Sidebar Left Content -->
      <div class="sidebar-left-content nano-content">

        <!-- Start: Sidebar Header -->
        <header class="sidebar-header">
        
        <!-- Sidebar Widget - Author -->
          <div class="sidebar-widget author-widget">
            <div class="media">
              <a class="media-left" href="#">
                <img src="<?php echo base_url(); ?>assets/img/avatars/placeholder.png" class="img-responsive"> <!-- /assets/img/ms-160x160.jpg -->
              </a>
              <div class="media-body">
                <div class="media-author"><?php echo $this->ion_auth->user()->row()->first_name . ' ' . $this->ion_auth->user()->row()->last_name; ?></div>
                <div class="media-links">
                   <a href="<?php echo base_url(); ?>auth/logout/"><i class="fa fa-sign-out pr10"></i>Logout</a>
                </div>
                
              </div>
            </div>
          </div>
        

          <!-- Sidebar Widget - Menu (Slidedown) -->
          <div class="sidebar-widget menu-widget">
            <div class="row text-center mbn">
              <div class="col-xs-4">
                <a href="dashboard.html" class="text-primary" data-toggle="tooltip" data-placement="top" title="Dashboard">
                  <span class="glyphicon glyphicon-home"></span>
                </a>
              </div>
              <div class="col-xs-4">
                <a href="pages_messages.html" class="text-info" data-toggle="tooltip" data-placement="top" title="Messages">
                  <span class="glyphicon glyphicon-inbox"></span>
                </a>
              </div>
              <div class="col-xs-4">
                <a href="pages_profile.html" class="text-alert" data-toggle="tooltip" data-placement="top" title="Tasks">
                  <span class="glyphicon glyphicon-bell"></span>
                </a>
              </div>
              <div class="col-xs-4">
                <a href="pages_timeline.html" class="text-system" data-toggle="tooltip" data-placement="top" title="Activity">
                  <span class="fa fa-desktop"></span>
                </a>
              </div>
              <div class="col-xs-4">
                <a href="pages_profile.html" class="text-danger" data-toggle="tooltip" data-placement="top" title="Settings">
                  <span class="fa fa-gears"></span>
                </a>
              </div>
              <div class="col-xs-4">
                <a href="pages_gallery.html" class="text-warning" data-toggle="tooltip" data-placement="top" title="Cron Jobs">
                  <span class="fa fa-flask"></span>
                </a>
              </div>
            </div>
          </div>

          <!-- Sidebar Widget - Author (hidden)  -->
          <div class="sidebar-widget author-widget hidden">
            <div class="media">
              <a class="media-left" href="#">
                <img src="<?php echo base_url(); ?>assets/img/avatars/3.jpg" class="img-responsive">
              </a>
              <div class="media-body">
                <div class="media-links">
                   <a href="#" class="sidebar-menu-toggle">User Menu -</a> <a href="pages_login(alt).html">Logout</a>
                </div>
                <div class="media-author">Michael Richards</div>
              </div>
            </div>
          </div>

          <!-- Sidebar Widget - Search (hidden) -->
          <div class="sidebar-widget search-widget">
            <div class="input-group">
              <span class="input-group-addon">
                <i class="fa fa-search"></i>
              </span>
              <input type="text" id="sidebar-search" class="form-control" placeholder="Search...">
            </div>
          </div>

        </header>
        <!-- End: Sidebar Header -->

        <!-- Start: Sidebar Menu -->
        <ul class="nav sidebar-menu">
          <?php
          $group_access = array(1,3,4); // admin & supervisor
          if ($this->ion_auth->in_group($group_access)) { 
          ?>
          <li class="sidebar-label pt20">Main Menu</li>
          <li <?= ($this->uri->uri_string()=="admin") ? 'style="background-color: black;"':'' ?> >
            <a href="<?php echo base_url(); ?>admin/">
                <span class="fa fa-dashboard"></span>
                <span class="sidebar-title">Dashboard</span>
            </a>
          </li>
          <?php
          }
          ?>

         <li class="sidebar-label pt20">Management</li>
         <!-- <li>
            <a href="/admin/replies/">
                <span class="fa fa-users"></span>
                <span class="sidebar-title">Edit Replies</span>
            </a>
         </li> -->
         <?php
            $group_access = array(1,3); // admin & supervisor
            if ($this->ion_auth->in_group($group_access)) { 
         ?>
         <li <?= ($this->uri->uri_string()=="admin/category") ? 'style="background-color: black;"':'' ?> >
            <a href="<?php echo base_url(); ?>admin/category">
                <span class="fa fa-folder-o"></span>
                <span class="sidebar-title">Categories</span>
            </a>
         </li>

         <li <?= ($this->uri->uri_string()=="admin/user") ? 'style="background-color: black;"':'' ?> >
            <a href="<?php echo base_url(); ?>admin/user">
                <span class="fa fa-user"></span>
                <span class="sidebar-title">Users</span>
            </a>
         </li>        
         
         <li <?= ($this->uri->uri_string()=="admin/performance") ? 'style="background-color: black;"':'' ?> >
            <a href="<?php echo base_url(); ?>admin/performance">
                <span class="fa fa-line-chart"></span>
                <span class="sidebar-title">Team Performance</span>
            </a>
         </li>
         <?php } ?>
         <?php
         $group_access = 5; // IT Officer
         if ($this->ion_auth->in_group($group_access)) { 
         ?>
         
         <li <?= ($this->uri->uri_string()=="admin/announcements") ? 'style="background-color: black;"':'' ?> >
            <a href="<?php echo base_url(); ?>admin/announcements">
                <span class="fa fa-bullhorn"></span>
                <span class="sidebar-title">Announcements</span>
            </a>
         </li>

         <li <?= ($this->uri->uri_string()=="admin/log") ? 'style="background-color: black;"':'' ?> >
            <a href="<?php echo base_url(); ?>admin/log">
                <span class="fa fa-book"></span>
                <span class="sidebar-title">Audit Log</span>
            </a>
         </li>

         <li <?= ($this->uri->uri_string()=="admin/database") ? 'style="background-color: black;"':'' ?> >
            <a href="<?php echo base_url(); ?>admin/database">
                <span class="fa fa-database"></span>
                <span class="sidebar-title">Database and System Backup</span>
            </a>
         </li>

         <li <?= ($this->uri->uri_string()=="admin/user") ? 'style="background-color: black;"':'' ?> >
            <a href="<?php echo base_url(); ?>admin/user">
                <span class="fa fa-user"></span>
                <span class="sidebar-title">Users</span>
            </a>
         </li>

         <li <?= ($this->uri->uri_string()=="assets/documentation") ? 'style="background-color: black;"':'' ?> >
            <a href="<?php echo base_url(); ?>assets/documentation/Software_Requirement_Specification.pdf" target="_blank">
                <span class="fa fa-bars"></span>
                <span class="sidebar-title">SRS</span>
            </a>
         </li>

         <li <?= ($this->uri->uri_string()=="assets/documentation") ? 'style="background-color: black;"':'' ?> >
            <a href="<?php echo base_url(); ?>assets/documentation/Relational_Schema_(ERD).pdf" target="_blank">
                <span class="fa fa-bars"></span>
                <span class="sidebar-title">ERD</span>
            </a>
         </li>

         <li <?= ($this->uri->uri_string()=="assets/documentation") ? 'style="background-color: black;"':'' ?> >
            <a href="<?php echo base_url(); ?>assets/documentation/A_Short_Guide_on_NEP_for_Customs_ v3.0.pdf" target="_blank">
                <span class="fa fa-bars"></span>
                <span class="sidebar-title">User Guide</span>
            </a>
         </li>

         <li <?= ($this->uri->uri_string()=="assets/documentation") ? 'style="background-color: black;"':'' ?> >
            <a href="<?php echo base_url(); ?>assets/documentation/devguide" target="_blank">
                <span class="fa fa-book"></span>
                <span class="sidebar-title">Developer Guide</span>
            </a>
         </li>
         
         <?php } ?>
        </ul>
        <!-- End: Sidebar Menu -->

	      <!-- Start: Sidebar Collapse Button -->
	      <!-- 
	      <div class="sidebar-toggle-mini">
	        <a href="#">
	          <span class="fa fa-sign-out"></span>
	        </a>
	      </div>
	       -->
	      <!-- End: Sidebar Collapse Button -->

      </div>
      <!-- End: Sidebar Left Content -->

    </aside>