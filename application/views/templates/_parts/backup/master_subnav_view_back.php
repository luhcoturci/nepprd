
  <!--| Flag Icons
This stylesheet provides the flag icons. 
For details, go to: 
https://afeld.github.io/emoji-css/
-->


  

<div class="navbar navbar-default navbar-custom navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
            <a href="<?php echo base_url(); ?>home" class="navbar-brand"><strong><?php echo $this->lang->line('home_title');?></strong></a>
          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        

        <div class="navbar-collapse collapse" id="navbar-main">
<!--          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="themes"> Themes<span class="caret"></span>  </a>
              <ul class="dropdown-menu" aria-labelledby="themes">
                <li><a href="../default/">Default</a></li>
                <li class="divider"></li>
                <li><a href="../cerulean/">Cerulean</a></li>
                <li><a href="../cosmo/">Cosmo</a></li>
                <li><a href="../cyborg/">Cyborg</a></li>
                <li><a href="../darkly/">Darkly</a></li>
                <li><a href="../flatly/">Flatly</a></li>
                <li><a href="../journal/">Journal</a></li>
                <li><a href="../lumen/">Lumen</a></li>
                <li><a href="../paper/">Paper</a></li>
                <li><a href="../readable/">Readable</a></li>
                <li><a href="../sandstone/">Sandstone</a></li>
                <li><a href="../simplex/">Simplex</a></li>
                <li><a href="../slate/">Slate</a></li>
                <li><a href="../spacelab/">Spacelab</a></li>
                <li><a href="../superhero/">Superhero</a></li>
                <li><a href="../united/">United</a></li>
                <li><a href="../yeti/">Yeti</a></li>
              </ul>
            </li>
            <li>
              <a href="../help/"> Help </a>
            </li>
            <li>
              <a href="http://news.bootswatch.com"> Blog </a>
            </li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="download"> Yeti <span class="caret"></span> </a>
              <ul class="dropdown-menu" aria-labelledby="download">
                <li><a href="http://jsfiddle.net/bootswatch/vdr1vx77/">Open Sandbox</a></li>
                <li class="divider"></li>
                <li><a href="./bootstrap.min.css">bootstrap.min.css</a></li>
                <li><a href="./bootstrap.css">bootstrap.css</a></li>
                <li class="divider"></li>
                <li><a href="./variables.less">variables.less</a></li>
                <li><a href="./bootswatch.less">bootswatch.less</a></li>
                <li class="divider"></li>
                <li><a href="./_variables.scss">_variables.scss</a></li>
                <li><a href="./_bootswatch.scss">_bootswatch.scss</a></li>
              </ul>
            </li>
          </ul>-->

          <ul class="nav navbar-nav navbar-right">
            
            <li><a href="<?php echo base_url(); ?>search"><i class="fa fa-search"></i> <strong><?php echo $this->lang->line('home_search1');?></strong></a></li>
           <li><a href="<?php //echo base_url(); ?>http://192.168.0.39:8081/nepdash/"><i class="fa fa-user"></i> <strong>Admin</strong></a></li>
<?php if($this->router->fetch_class() === 'home' && $this->router->fetch_method() === 'index') { ?>
          <li>
              <a href="#unansweredModal" data-toggle="modal" class="">
                <i class="fa fa-life-ring"></i><strong> <?php echo $this->lang->line('home_help');?></strong>
            </a>
            
          </li>
          <?php } ?>
						<li><a href="<?php echo base_url(); ?>en" title="English">  <i class='em em-flag-gb'></i> </a></li>
					    <li><a href="<?php echo base_url(); ?>tt" title="Tetun"> <i class='em em-flag-tl'></i></a></li>
						<li><a href="<?php echo base_url(); ?>id" title="Indonesia"> <i class='em em-flag-id'></i></a></li>
       
          </ul>

        </div>
         
      </div>
    </div>