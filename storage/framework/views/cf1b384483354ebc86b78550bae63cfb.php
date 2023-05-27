
<?php $__env->startSection('main'); ?>

<?php $__env->startSection('title'); ?>
Portfolio | Asma Abughaith Website
<?php $__env->stopSection(); ?>

<main>

    <!-- breadcrumb-area -->
    <section class="breadcrumb__wrap">
        <div class="container custom-container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="breadcrumb__wrap__content">
                        <h2 class="title">Portfolio Page</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Portfolio</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="breadcrumb__wrap__icon">
            <ul>
            <?php
                $images = App\Models\MultiImage::all();
                ?>
                <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><img src="<?php echo e(asset($image->multi_image)); ?>" alt=""></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div> -->
    </section>
    <!-- breadcrumb-area-end -->

    <!-- portfolio-area -->
    <section class="portfolio__inner">
        <div class="container">

            <div class="portfolio__inner__active">

                <?php $__currentLoopData = $portfolio; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="portfolio__inner__item grid-item cat-two cat-three">
                    <div class="row gx-0 align-items-center">
                        <div class="col-lg-6 col-md-10">
                            <div class="portfolio__inner__thumb">
                                <a href="portfolio-details.html">
                                    <img src="<?php echo e(asset($item->portfolio_image)); ?>" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-10">
                            <div class="portfolio__inner__content">
                                <h2 class="title"><a
                                        href="<?php echo e(route('portfolio.details',$item->id)); ?>"><?php echo e($item->portfolio_title); ?></a>
                                </h2>
                                <p><?php echo Str::limit($item->portfolio_description, 200); ?> </p>
                                <a href="<?php echo e(route('portfolio.details',$item->id)); ?>" class="link">View Case Study</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



            </div>

        </div>
    </section>
    <!-- portfolio-area-end -->


    <!-- contact-area -->
    <?php echo $__env->make('frontend.home_all.home_contact', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- contact-area-end -->

</main>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.main_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project1\basic\resources\views/frontend/portfolio.blade.php ENDPATH**/ ?>