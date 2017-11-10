<!-- MENU PRINCIPAL - INÍCIO -->
<div class="page-sidebar-wrapper" id="main-menu-wrapper">
  <!-- USER INFO - START -->
  <div class="profile-info row">

      <div class="profile-image col-xs-4">
          <a href="ui-profile.html">
              <img alt="" src="<?php echo e(asset('images/profile.jpg')); ?>" class="img-responsive img-circle">

          </a>
      </div>

      <div class="profile-details col-xs-8">

          <h3>
              <a href="#"><?php echo e(Auth::user()->name); ?></a>

              <!-- Available statuses: online, idle, busy, away and offline -->
              <span class="profile-status online"></span>
          </h3>

          <p class="profile-title">Admnistrador</p>

      </div>

  </div>
  <!-- USER INFO - END -->
    <ul class='wraplist'>

        <li class='menusection'>Menu Principal</li>
        <li class="<?php if(Route::current()->getName() == 'filiados.adicionar' || Route::current()->getName() == 'filiados'): ?> open <?php endif; ?>">
            <a href="#">
                <i class="fa fa-user"></i>
                <span class="title">Filiados</span>
                <span class="arrow "></span>
            </a>
            <ul class="sub-menu" >
                <li>
                    <a class="<?php if(Route::current()->getName() == 'filiados'): ?> active <?php endif; ?>" href="<?php echo e(route('filiados')); ?>" >Listar</a>
                </li>
                <li class="">
                    <a class="<?php if(Route::current()->getName() == 'filiados.adicionar'): ?> active <?php endif; ?>" href="<?php echo e(route('filiados.adicionar')); ?>" >Cadastrar</a>
                </li>

            </ul>
        </li>
        <li class="">
            <a href="#">
                <i class="fa fa-money"></i>
                <span class="title">Pagamentos</span>
                <span class="arrow "></span>
            </a>
            <ul class="sub-menu" >
                <li>
                    <a class="" href="#" >Informar Pagamento</a>
                </li>
                <li>
                    <a class="" href="#" >Consultar</a>
                </li>

            </ul>
        </li>
        <li class="<?php if(Route::current()->getName() == 'usuarios'): ?> open <?php endif; ?>">
            <a href="#">
                <i class="fa fa-group"></i>
                <span class="title">Usuários</span>
                <span class="arrow "></span>
            </a>
            <ul class="sub-menu" >
                <li>
                    <a class="<?php if(Route::current()->getName() == 'usuarios'): ?> active <?php endif; ?>" href="<?php echo e(route('usuarios')); ?>" >Listar</a>
                </li>

            </ul>
        </li>
        <li class="">
            <a href="#">
                <i class="fa fa-group"></i>
                <span class="title">Administração</span>
                <span class="arrow "></span>
            </a>
            <ul class="sub-menu" >
                <li>
                    <a class="" href="<?php echo e(route('log_atividades')); ?>" >Log de Atividades</a>
                </li>
                <li>
                    <a class="" href="#" >Log de Erros</a>
                </li>
                <li>
                    <a class="" href="#" >Mensagens do Sistema</a>
                </li>

            </ul>
        </li>
    </ul>
</div>
<!-- MENU PRINCIPAL - END -->
