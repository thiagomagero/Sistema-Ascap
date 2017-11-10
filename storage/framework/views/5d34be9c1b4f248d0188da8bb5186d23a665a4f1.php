<!-- INÍCIO TOPBAR -->
  <div class='page-topbar '>
      <div class='logo-area'></div>
      <div class='quick-area'>
          <div class='pull-left'>
              <ul class="info-menu left-links list-inline list-unstyled">
                  <li class="sidebar-toggle-wrap">
                      <a href="#" data-toggle="sidebar" class="sidebar_toggle">
                          <i class="fa fa-bars"></i>
                      </a>
                  </li>

              </ul>
          </div>
          <div class='pull-right'>
              <ul class="info-menu right-links list-inline list-unstyled">
                  <li class="profile">
                      <a href="#" data-toggle="dropdown" class="toggle">
                          <img src="<?php echo e(asset('images/profile.jpg')); ?>" alt="user-image" class="img-circle img-inline">
                          <span><?php echo e(Auth::user()->name); ?> <i class="fa fa-angle-down"></i></span>
                      </a>
                      <ul class="dropdown-menu profile animated fadeIn">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> Trocar Senha</a>
                        </li>
                        <li><a href="<?php echo e(route('sair')); ?>"><i class="fa fa-sign-out fa-fw"></i> Sair</a>
                        </li>
                      </ul>
                  </li>
              </ul>
          </div>
      </div>

  </div>
  <!-- FIM TOPBAR -->
