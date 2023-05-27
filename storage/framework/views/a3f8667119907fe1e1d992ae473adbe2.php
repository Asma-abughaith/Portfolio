<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title> <?php echo $__env->yieldContent('title'); ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/css/bootstrap.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/css/animate.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/css/magnific-popup.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/css/fontawesome-all.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/css/slick.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/css/default.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/css/style.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/css/responsive.css')); ?>">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >

    </head>
    <body>

        <!-- preloader-start -->
        <div id="preloader">
            <div class="rasalina-spin-box"></div>
        </div>
        <!-- preloader-end -->

		<!-- Scroll-top -->
        <button class="scroll-top scroll-to-target" data-target="html">
            <i class="fas fa-angle-up"></i>
        </button>
        <!-- Scroll-top-end-->

        <!-- header-area -->
        <?php echo $__env->make('frontend.body.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- header-area-end -->

        <!-- main-area -->
        <main>
        <?php echo $__env->yieldContent('main'); ?>
        </main>
        <!-- main-area-end -->



        <!-- Footer-area -->
       <?php echo $__env->make('frontend.body.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Footer-area-end -->




		<!-- JS here -->
        <script src="<?php echo e(asset('frontend/assets/js/vendor/jquery-3.6.0.min.js')); ?>"></script>
        <script src="<?php echo e(asset('frontend/assets/js/bootstrap.min.js')); ?>"></script>
        <script src="<?php echo e(asset('frontend/assets/js/isotope.pkgd.min.js')); ?>"></script>
        <script src="<?php echo e(asset('frontend/assets/js/imagesloaded.pkgd.min.js')); ?>"></script>
        <script src="<?php echo e(asset('frontend/assets/js/jquery.magnific-popup.min.js')); ?>"></script>
        <script src="<?php echo e(asset('frontend/assets/js/element-in-view.js')); ?>"></script>
        <script src="<?php echo e(asset('frontend/assets/js/slick.min.js')); ?>"></script>
        <script src="<?php echo e(asset('frontend/assets/js/ajax-form.js')); ?>"></script>
        <script src="<?php echo e(asset('frontend/assets/js/wow.min.js')); ?>"></script>
        <script src="<?php echo e(asset('frontend/assets/js/plugins.js')); ?>"></script>
        <script src="<?php echo e(asset('frontend/assets/js/main.js')); ?>"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
 <?php if(Session::has('message')): ?>
 var type = "<?php echo e(Session::get('alert-type','info')); ?>"
 switch(type){
    case 'info':
    toastr.info(" <?php echo e(Session::get('message')); ?> ");
    break;
    case 'success':
    toastr.success(" <?php echo e(Session::get('message')); ?> ");
    break;
    case 'warning':
    toastr.warning(" <?php echo e(Session::get('message')); ?> ");
    break;
    case 'error':
    toastr.error(" <?php echo e(Session::get('message')); ?> ");
    break; 
 }
 <?php endif; ?> 
</script>

    </body>
</html>
<?php /**PATH C:\xampp\htdocs\project1\basic\resources\views/frontend/main_master.blade.php ENDPATH**/ ?>