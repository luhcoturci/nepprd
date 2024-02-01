    <!-- Start: Header -->
    <header class="navbar navbar-fixed-top navbar-shadow bg-primary">
      <div class="navbar-branding">
        <a class="navbar-brand" href="<?php echo base_url(); ?>admin">
            <b>NEP</b><?php echo ucfirst($this->ion_auth->get_users_groups()->row()->name);?>
        </a>
        <span id="toggle_sidemenu_l" class="ad ad-lines"></span>
      </div>
      <!-- 
      <ul class="nav navbar-nav navbar-left">
        <li class="dropdown menu-merge hidden-xs">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown
            <span class="caret caret-tp"></span>
          </a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
        
        <li class="hidden-xs">
          <a class="request-fullscreen toggle-active" href="#">
            <span class="ad ad-screen-full fs18"></span>
          </a>
        </li>
        
      </ul>
       -->
      <!-- 
      <form class="navbar-form navbar-left navbar-search alt" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search..." value="Search...">
        </div>
      </form>
       -->
      <ul class="nav navbar-nav navbar-right">
<!-- 
        <li class="dropdown menu-merge">
          <div class="navbar-btn btn-group">
            <button data-toggle="dropdown" class="btn btn-sm dropdown-toggle">
              <span class="fa fa-bell-o fs14 va-m"></span>
              <span class="badge badge-danger">2</span>
            </button>
            <div class="dropdown-menu dropdown-persist w350 animated animated-shorter fadeIn" role="menu">  
              <div class="panel mbn">
                  <div class="panel-menu">
                     <span class="panel-icon"><i class="fa fa-clock-o"></i></span>
                     <span class="panel-title fw600"> Recent Activity</span>
                     <button class="btn btn-default light btn-xs pull-right" type="button"><i class="fa fa-refresh"></i></button>
                  </div>
                  <div class="panel-body panel-scroller scroller-navbar scroller-overlay scroller-pn pn">
                      <ol class="timeline-list">
                        <li class="timeline-item">
                          <div class="timeline-icon bg-dark light">
                            <span class="fa fa-plus"></span>
                          </div>
                          <div class="timeline-desc">
                            <b>Michael</b> Added one new record pending approval:
                            <a href="#">URN-34</a>
                          </div>
                          <div class="timeline-date">14:35</div>
                        </li>
                        <li class="timeline-item">
                          <div class="timeline-icon bg-dark light">
                            <span class="fa fa-check"></span>
                          </div>
                          <div class="timeline-desc">
                            <b>Michael</b> Approved one record:
                            <a href="#">URN-8934</a>
                          </div>
                          <div class="timeline-date">14:35</div>
                        </li>
                        
                      </ol>
       
                  </div>
                  <div class="panel-footer text-center p7">
                    <a href="#" class="link-unstyled"> View All </a>
                  </div>
              </div>
            </div>
          </div>
        </li>
       -->
        <li class="menu-divider hidden-xs">
          <i class="fa fa-circle" style="color: green;"></i>
        </li>
        <li class="dropdown menu-merge">
          <a href="#" class="dropdown-toggle fw600 p15" data-toggle="dropdown">
          	<img src="<?php echo base_url(); ?>assets/img/avatars/placeholder.png" alt="avatar" class="mw30 br64">
          	<span class="hidden-xs pl15"><?php echo $this->ion_auth->user()->row()->first_name . ' ' . $this->ion_auth->user()->row()->last_name; ?></span>
            <span class="caret caret-tp hidden-xs"></span>
          </a>
          <ul class="dropdown-menu list-group dropdown-persist w250" role="menu">
            <li class="dropdown-header clearfix">
              <div class="pull-right mr10">
              <!-- 
                <select id="user-role">
                  <optgroup label="Logged in As:">
                    <option value="1-1">Level 1</option>
                    <option value="1-2">Level 2</option>
                    <option value="1-2">Level 3</option>
                    <option value="1-3" selected="selected">Level 4</option>
                    <option value="1-3">Admin</option>
                  </optgroup>
                </select>
                 -->
              </div>
            </li>
            <li class="list-group-item">
              <a href="<?php echo base_url(); ?>admin/user/details/<?php echo $this->ion_auth->user()->row()->id; ?>" class="animated animated-short fadeInUp">
                <span class="fa fa-user"></span> Profile </a>
            </li>
            <li class="dropdown-footer">
              <a href="<?php echo base_url(); ?>auth/logout/" class="">
              <span class="fa fa-power-off pr5"></span> Logout </a>
            </li>
          </ul>
        </li>
      </ul>
    </header>
    <!-- End: Header -->