<div class="topbar">
   <!-- LOGO -->
   <div class="topbar-left primary">
      <div class="text-center">
          <a href="<?php echo Configure::read('HOME')?>" class="logo">
            <img src="<?php echo $this->webroot;?>img/logo.png" style="max-width: 55px;">          
          </a>
      </div>
   </div>
   <!-- Button mobile view to collapse sidebar menu -->
   <div class="navbar navbar-default primary" role="navigation">
      <div class="container">
         <div class="">
            <div class="pull-left">
               <button class="button-menu-mobile open-left">
                  <i class="fa fa-bars"></i>
               </button>
               <span class="clearfix"></span>
            </div>
            <ul class="nav navbar-nav navbar-right pull-right">
               <li class="hidden-xs">
                  <a href="#" id="btn-fullscreen" class="waves-effect waves-light"><i class="md md-crop-free"></i></a>
               </li>
            </ul>
         </div>
      </div>
   </div>
</div>
