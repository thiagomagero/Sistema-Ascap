<!-- MENU PRINCIPAL - INÍCIO -->
<div class="page-sidebar-wrapper" id="main-menu-wrapper">
  <!-- USER INFO - START -->
  <div class="profile-info row">

      <div class="profile-image col-xs-4">
          <a href="ui-profile.html">
              <img alt="" src="{{ asset('data/profile/profile.jpg') }}" class="img-responsive img-circle">

          </a>
      </div>

      <div class="profile-details col-xs-8">

          <h3>
              <a href="#">{{ Auth::user()->name}}</a>

              <!-- Available statuses: online, idle, busy, away and offline -->
              <span class="profile-status online"></span>
          </h3>

          <p class="profile-title">Admnistrador</p>

      </div>

  </div>
  <!-- USER INFO - END -->
    <ul class='wraplist'>

        <li class='menusection'>Menu Principal</li>
        <li class="@if(Route::current()->getName() == 'filiados.adicionar' || Route::current()->getName() == 'filiados') open @endif">
            <a href="#">
                <i class="fa fa-user"></i>
                <span class="title">Filiados</span>
                <span class="arrow "></span>
            </a>
            <ul class="sub-menu" >
                <li>
                    <a class="@if(Route::current()->getName() == 'filiados') active @endif" href="{{ route('filiados') }}" >Listar</a>
                </li>
                <li class="">
                    <a class="@if(Route::current()->getName() == 'filiados.adicionar') active @endif" href="{{ route('filiados.adicionar') }}" >Cadastrar</a>
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
        <li class="@if(Route::current()->getName() == 'usuarios') open @endif">
            <a href="#">
                <i class="fa fa-group"></i>
                <span class="title">Usuários</span>
                <span class="arrow "></span>
            </a>
            <ul class="sub-menu" >
                <li>
                    <a class="@if(Route::current()->getName() == 'usuarios') active @endif" href="{{ route('usuarios') }}" >Listar</a>
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
                    <a class="" href="{{ route('log_atividades') }}" >Log de Atividades</a>
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
