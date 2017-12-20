
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
  <meta charset="utf-8" />
  <title>{{ config('app.name', 'Laravel') }}</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <meta content="" name="description" />
  <meta content="" name="author" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="csrf-token" content="{{ csrf_token() }}">


  <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon" />
  <link rel="apple-touch-icon-precomposed" href="{{ asset('images/apple-touch-icon-57-precomposed.png') }}"> <!-- Para o iPhone -->
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('images/apple-touch-icon-114-precomposed.png') }}"> <!-- Para o iPhone 4 Retina display -->
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('images/apple-touch-icon-72-precomposed.png') }}">  <!-- Para o iPad -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('images/apple-touch-icon-144-precomposed.png') }}">   <!-- For iPad Retina display -->
  {!! Charts::styles() !!}


  <!-- CORE CSS FRAMEWORK - INÍCIO -->
  <link href="{{ asset('plugins/pace/pace-theme-flash.css') }}" rel="stylesheet" type="text/css" media="screen"/>
  <link href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
  <link href="{{ asset('plugins/bootstrap/css/bootstrap-theme.min.css') }}" rel="stylesheet" type="text/css"/>
  <link href="{{ asset('fonts/font-awesome/css/font-awesome.css') }}" rel="stylesheet" type="text/css"/>
  <link href="{{ asset('css/animate.min.css') }}" rel="stylesheet" type="text/css"/>
  <link href="{{ asset('plugins/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet" type="text/css"/>
  <link href="{{ asset('plugins/datatables/css/datatables.bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('plugins/toast/toastr.min.css') }}" rel="stylesheet">
  <link href="{{ asset('plugins/sweetalert/dist/sweetalert.css') }}" rel="stylesheet">
  <link href="{{ asset('plugins/datepicker/css/datepicker.css') }}" rel="stylesheet">
  <link href="{{ asset('plugins/select2/select2.css') }}" rel="stylesheet">
  <link href="{{ asset('plugins/icheck/skins/all.css') }}" rel="stylesheet">
  <!-- CORE CSS FRAMEWORK - FIM -->



  <!-- CORE CSS TEMPLATE - INÍCIO -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css"/>
  <link href="{{ asset('css/responsive.css') }}" rel="stylesheet" type="text/css"/>
  <link href="{{ asset('css/geral.css') }}" rel="stylesheet" type="text/css"/>
  @stack('styles')
  <!-- CORE CSS TEMPLATE - FIM -->

</head>
<!-- FIM DO HEAD -->

<!-- INÍCIO DO BODY -->
<body class=" ">
  @include('layouts._loading')
  @if(!Auth::guest())
  @include('layouts._barratopo')
  @endif

  <!-- INÍCIO CONTAINER -->
  <div class="page-container row-fluid container-fluid">
    @if(!Auth::guest())
    <!-- SIDEBAR - INÍCIO -->
    <div class="page-sidebar fixedscroll">
      @include('layouts._menulateral')
    </div>
    <!--  SIDEBAR - FIM -->
    @endif
    @yield('content')

  </div>
  <!-- FIM CONTAINER -->

  <!-- CARREGAMENTO DOS ARQUIVOS -->

  <!-- CORE JS FRAMEWORK - INÍCIO -->
  <script src="{{ asset('js/jquery-1.12.4.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('js/jquery.easing.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('plugins/pace/pace.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('plugins/viewport/viewportchecker.js') }}" type="text/javascript"></script>
  <script>window.jQuery || document.write('<script src="{{ asset('js/jquery-1.12.4.min.js') }}"><\/script>');</script>
  <script src="{{ asset('plugins/datatables/js/jquery.datatables.min.js') }}"></script>
  <script src="{{ asset('plugins/datatables/js/datatables.bootstrap.min.js') }}"></script>
  <script src="{{ asset('plugins/toast/toastr.min.js') }}"></script>
  <script src="{{ asset('plugins/sweetalert/dist/sweetalert.min.js') }}"></script>
  <script src="{{ asset('plugins/jquery-validation/js/jquery.validate.min.js') }}"></script>
  <script src="{{ asset('plugins/jquery-validation/js/metodos-adicionais.min.js') }}"></script>
  <script src="{{ asset('plugins/datepicker/js/datepicker.js') }}" type="text/javascript"></script>
  <script src="{{ asset('plugins/select2/select2.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('plugins/icheck/icheck.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('plugins/inputmask/min/jquery.inputmask.bundle.min.js') }}" type="text/javascript"></script>

  <script src="{{ asset('plugins/maskmoney/min/jquery.maskMoney.min.js') }}" type="text/javascript"></script>
  <!-- CORE JS FRAMEWORK - FIM -->



  <!-- CORE TEMPLATE JS - INÍCIO -->

  <script src="{{ asset('js/scripts.js') }}" type="text/javascript"></script>
  <script src="{{ asset('js/init.js') }}" type="text/javascript"></script>

<script type="text/javascript" src="https://cdn.rawgit.com/Mikhus/canvas-gauges/gh-pages/download/2.1.2/all/gauge.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/chartist/0.10.1/chartist.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
<script type="text/javascript" src="https://static.fusioncharts.com/code/latest/fusioncharts.js"></script>
<script type="text/javascript" src="https://static.fusioncharts.com/code/latest/themes/fusioncharts.theme.fint.js"></script>
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">google.charts.load('current', {'packages':['corechart', 'gauge', 'geochart', 'bar', 'line']})</script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/highcharts/5.0.7/highcharts.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/highcharts/5.0.7/js/modules/offline-exporting.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/highmaps/5.0.7/js/modules/map.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/highmaps/5.0.7/js/modules/data.js"></script>
<script type="text/javascript" src="https://code.highcharts.com/mapdata/custom/world.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.2.6/raphael.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/justgage/1.2.2/justgage.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.2.6/raphael.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.5/d3.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/plottable.js/2.8.0/plottable.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/progressbar.js/1.0.1/progressbar.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.5/d3.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/c3/0.4.11/c3.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/echarts/3.6.2/echarts.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/amcharts/3.21.2/amcharts.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/amcharts/3.21.2/serial.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/amcharts/3.21.2/plugins/export/export.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/amcharts/3.21.2/themes/light.js"></script><script>
   $(function() {
       $('.charts').each(function() {
           var chart = $(this).find('.charts-chart');
           var loader = $(this).find('.charts-loader');
           var time = loader.data('duration');

           if(loader.hasClass('enabled')) {
               chart.css({visibility: 'hidden'});
               loader.fadeIn(350);

               setTimeout(function() {
                   loader.fadeOut(350, function() {
                       chart.css({opacity: 0, visibility: 'visible'}).animate({opacity: 1}, 350);
                   });
               }, time)
           }
       });
   })
</script>
  {!! $chart->script() !!}
  @stack('scripts')
  @yield('scripts')
  @if(Session::has('alerta'))
  <script>
    sweetAlert("{{ Session::get('alerta')['titulo'] }}", "{{ Session::get('alerta')['msg'] }}", "{{ Session::get('alerta')['tipo'] }}");
  </script>
  @endif
</body>
</html>
