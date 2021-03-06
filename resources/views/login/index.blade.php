<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ config('app.name', 'Laravel') }}</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- CSS -->
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
  <link rel="stylesheet" href="{{ asset('vendor/view_login/assets/bootstrap/css/bootstrap.min.css') }}">
  <link href="{{ asset('plugins/toast/toastr.min.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('vendor/view_login/assets/font-awesome/css/font-awesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/view_login/assets/css/form-elements.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/view_login/assets/css/style.css') }}">


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Favicon and touch icons -->
  <link rel="shortcut icon" href="{{ asset('vendor/view_login/assets/ico/favicon.png') }}">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('vendor/view_login/assets/ico/apple-touch-icon-144-precomposed.png') }}">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('vendor/view_login/assets/ico/apple-touch-icon-114-precomposed.png') }}">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('vendor/view_login/assets/ico/apple-touch-icon-72-precomposed.png') }}">
  <link rel="apple-touch-icon-precomposed" href="{{ asset('vendor/view_login/assets/ico/apple-touch-icon-57-precomposed.png') }}">

</head>

<body>

  <!-- Top content -->
  <div class="top-content">

    <div class="inner-bg">
      <div class="container">

        <div class="row">
          <div class="col-sm-8 col-sm-offset-2 text">
            <h1 style="color:#ccc">
              <img src="{{ asset('images/logo_login.png') }}"/>
            </h1>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-5">

            <div class="form-box">
              <div class="form-top">
                <div class="form-top-left">
                  <h3>Login para acessar:</h3>
                  <p>Informe seu usuário e sua senha:</p>
                </div>
              </div>
              <div class="form-bottom">
                <form id="login-form" action="{{ route('login') }}" method="post">
                  {{csrf_field()}}
                  <div class="form-group">
                    <label class="sr-only" for="form-username">Usuário</label>
                    <input type="text" name="email" placeholder="Usuário..." class="form-username form-control" id="form-username">
                  </div>
                  <div class="form-group">
                    <label class="sr-only" for="form-password">Senha</label>
                    <input type="password" name="password" placeholder="Senha..." class="form-password form-control" id="form-password">
                  </div>

                  <button type="button" class="btn btn-primary btn-lg logar" id="load" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Acessando...">Acessar</button>

                </form>
              </div>
            </div>
          </div>

          <div class="col-sm-1 middle-border"></div>
          <div class="col-sm-1"></div>

          <div class="col-sm-5">

            <div class="form-box">
              <div class="form-top">
                <div class="form-top-left">
                  <h4>Intranet ASCAP - Políticas Públicas e Gestão Governamental</h4>
                </div>
              </div>
              <div class="form-bottom">
                Sistema de Gerenciamento Administrativo
              </div>
            </div>

          </div>
        </div>

      </div>
    </div>

  </div>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">

        <div class="col-sm-8 col-sm-offset-2">
          <div class="footer-border"></div>
          <p>Desenvolvido por Thiago Mágero</p>
          </div>

        </div>
      </div>
    </footer>

    <!-- Javascript -->
    <script src="{{ asset('vendor/view_login/assets/js/jquery-1.11.1.min.js') }}"></script>
    <script src="{{ asset('vendor/view_login/assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendor/view_login/assets/js/jquery.backstretch.min.js') }}"></script>
    <script src="{{ asset('plugins/toast/toastr.min.js') }}"></script>

    <script>
    jQuery(document).ready(function() {
      $('.logar').on('click',function(){
          $.ajax({
            url: '{{ route('login') }}',
            type: "POST",
            data : $("#login-form").serialize(),
            beforeSend: function() {
              $('.logar').button('loading');
            },
            success: function(data) {
              var retorno = data.retorno;
              if(retorno==0){
                  window.location = "{{ route('painel') }}";
              }
              if(retorno==1){

                toastr.error(data.mensagem,'Erro!');
              }
            },
        complete: function() {
          $('.logar').button('reset');
        }
          });
      });


        $.backstretch("{{ asset('vendor/view_login/assets/img/backgrounds/1.jpg') }}");



    });

    </script>

    <!--[if lt IE 10]>
    <script src="{{ asset('vendor/view_login/assets/js/placeholder.js') }}"></script>
    <![endif]-->

  </body>

  </html>
