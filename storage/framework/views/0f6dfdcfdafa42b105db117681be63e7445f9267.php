
<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
  <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
  <meta charset="utf-8" />
  <title><?php echo e(config('app.name', 'Laravel')); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <meta content="" name="description" />
  <meta content="" name="author" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">


  <link rel="shortcut icon" href="<?php echo e(asset('images/favicon.png')); ?>" type="image/x-icon" />
  <link rel="apple-touch-icon-precomposed" href="<?php echo e(asset('images/apple-touch-icon-57-precomposed.png')); ?>"> <!-- Para o iPhone -->
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo e(asset('images/apple-touch-icon-114-precomposed.png')); ?>"> <!-- Para o iPhone 4 Retina display -->
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo e(asset('images/apple-touch-icon-72-precomposed.png')); ?>">  <!-- Para o iPad -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo e(asset('images/apple-touch-icon-144-precomposed.png')); ?>">   <!-- For iPad Retina display -->



  <!-- CORE CSS FRAMEWORK - INÍCIO -->
  <link href="<?php echo e(asset('plugins/pace/pace-theme-flash.css')); ?>" rel="stylesheet" type="text/css" media="screen"/>
  <link href="<?php echo e(asset('plugins/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet" type="text/css"/>
  <link href="<?php echo e(asset('plugins/bootstrap/css/bootstrap-theme.min.css')); ?>" rel="stylesheet" type="text/css"/>
  <link href="<?php echo e(asset('fonts/font-awesome/css/font-awesome.css')); ?>" rel="stylesheet" type="text/css"/>
  <link href="<?php echo e(asset('css/animate.min.css')); ?>" rel="stylesheet" type="text/css"/>
  <link href="<?php echo e(asset('plugins/perfect-scrollbar/perfect-scrollbar.css')); ?>" rel="stylesheet" type="text/css"/>
  <link href="<?php echo e(asset('plugins/datatables/css/datatables.bootstrap.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('plugins/toast/toastr.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('plugins/sweetalert/dist/sweetalert.css')); ?>" rel="stylesheet">
  <!-- CORE CSS FRAMEWORK - FIM -->



  <!-- CORE CSS TEMPLATE - INÍCIO -->
  <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet" type="text/css"/>
  <link href="<?php echo e(asset('css/responsive.css')); ?>" rel="stylesheet" type="text/css"/>
  <link href="<?php echo e(asset('css/geral.css')); ?>" rel="stylesheet" type="text/css"/>
  <?php echo $__env->yieldPushContent('styles'); ?>
  <!-- CORE CSS TEMPLATE - FIM -->

</head>
<!-- FIM DO HEAD -->

<!-- INÍCIO DO BODY -->
<body class=" ">
  <?php echo $__env->make('layouts._loading', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php if(!Auth::guest()): ?>
  <?php echo $__env->make('layouts._barratopo', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php endif; ?>

  <!-- INÍCIO CONTAINER -->
  <div class="page-container row-fluid container-fluid">
    <?php if(!Auth::guest()): ?>
    <!-- SIDEBAR - INÍCIO -->
    <div class="page-sidebar fixedscroll">
      <?php echo $__env->make('layouts._menulateral', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>
    <!--  SIDEBAR - FIM -->
    <?php endif; ?>
    <?php echo $__env->yieldContent('content'); ?>

  </div>
  <!-- FIM CONTAINER -->

  <!-- CARREGAMENTO DOS ARQUIVOS -->

  <!-- CORE JS FRAMEWORK - INÍCIO -->
  <script src="<?php echo e(asset('js/jquery-1.12.4.min.js')); ?>" type="text/javascript"></script>
  <script src="<?php echo e(asset('js/jquery.easing.min.js')); ?>" type="text/javascript"></script>
  <script src="<?php echo e(asset('plugins/bootstrap/js/bootstrap.min.js')); ?>" type="text/javascript"></script>
  <script src="<?php echo e(asset('plugins/pace/pace.min.js')); ?>" type="text/javascript"></script>
  <script src="<?php echo e(asset('plugins/perfect-scrollbar/perfect-scrollbar.min.js')); ?>" type="text/javascript"></script>
  <script src="<?php echo e(asset('plugins/viewport/viewportchecker.js')); ?>" type="text/javascript"></script>
  <script>window.jQuery || document.write('<script src="http://localhost:8000/js/jquery-1.12.4.min.js"><\/script>');</script>
  <script src="<?php echo e(asset('plugins/datatables/js/jquery.datatables.min.js')); ?>"></script>
  <script src="<?php echo e(asset('plugins/datatables/js/datatables.bootstrap.min.js')); ?>"></script>
  <script src="<?php echo e(asset('plugins/toast/toastr.min.js')); ?>"></script>
  <script src="<?php echo e(asset('plugins/sweetalert/dist/sweetalert.min.js')); ?>"></script>
  <!-- CORE JS FRAMEWORK - FIM -->



  <!-- CORE TEMPLATE JS - INÍCIO -->

  <script src="<?php echo e(asset('js/scripts.js')); ?>" type="text/javascript"></script>
  <script src="<?php echo e(asset('js/init.js')); ?>" type="text/javascript"></script>

  <?php echo $__env->yieldPushContent('scripts'); ?>
  <?php echo $__env->yieldContent('scripts'); ?>
  <?php if(Session::has('alerta')): ?>
  <script>
    sweetAlert("<?php echo e(Session::get('alerta')['titulo']); ?>", "<?php echo e(Session::get('alerta')['msg']); ?>", "<?php echo e(Session::get('alerta')['tipo']); ?>");
  </script>
  <?php endif; ?>
</body>
</html>
