<?php //$url = "{$_SERVER['REQUEST_URI']}"; ?>
<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">
        <div class="user-details">
            <div class="user-info">
                <div class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Luan Rodrigues <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <!--<li><a href="#"><i class="md md-face-unlock"></i> Perfil<div class="ripple-wrapper"></div></a></li>-->
                        <li><a href=""><i class="md md-settings"></i> Configurações</a></li>
                        <li><a href=""><i class="md md-settings-power"></i> Sair</a></li>
                    </ul>
                </div>
                <p class="text-muted m-0">Administrador</p>
            </div>
        </div>

        <!--- Divider -->
        <div id="sidebar-menu">
            <ul>
                <li>
                    <a href="<?php echo Configure::read('HOME')?>" class="waves-effect">
                        <i class="md md-home"></i><span> Home </span>
                    </a>
                </li>

                <li>
                    <a href="<?php echo Configure::read('HOME') . 'albuns'?>" class="waves-effect">
                        <i class="fa fa-folder"></i><span> Álbuns </span>
                    </a>
                </li>

                <li>
                    <a href="<?php echo Configure::read('HOME') . 'categories'?>" class="waves-effect">
                        <i class="fa fa-tag"></i><span> Categorias </span>
                    </a>
                </li>

                 <li>
                    <a href="<?php echo Configure::read('HOME') . 'albuns/gallery'?>" class="waves-effect">
                        <i class="ion-image"></i><span> Galeria </span>
                    </a>
                </li>
                 
               <!--  <li>
                    <a href="#" class="waves-effect">
                        <i class="md md-home"></i>
                        <span>Has sub</span>
                        <span class="pull-right"><i class="md md-add"></i></span>
                    </a>
                    <ul>
                        <li>
                            <a href="#" class="waves-effect">
                                <span>Sub</span>
                            </a>
                        </li>
                    </ul>
                </li> -->
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>