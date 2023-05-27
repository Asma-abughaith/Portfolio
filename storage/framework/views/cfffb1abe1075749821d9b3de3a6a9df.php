<section class="portfolio">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8">
                <div class="section__title text-center">
                    <span class="sub-title">02 - Portfolio</span>
                    <h2 class="title">All creative work</h2>
                </div>
            </div>
        </div>
       
    </div>
    <div class="tab-content" id="portfolioTabContent">
    
    <?php
    $portfolio = App\Models\Portfolio::latest()->get();
    ?>
        <div class="tab-pane show active" id="all" role="tabpanel" aria-labelledby="graphic-tab">
            <div class="container">
                <div class="row gx-0 justify-content-center">
                    <div class="col">
                        <div class="portfolio__active">

                            <?php $__currentLoopData = $portfolio; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="portfolio__item">
                                <div class="portfolio__thumb">
                                    <img src="<?php echo e(asset($item->portfolio_image)); ?>" alt="">
                                </div>
                                <div class="portfolio__overlay__content">
                                    <span><?php echo e($item->portfolio_name); ?></span>
                                    <h4 class="title"><a href="<?php echo e(route('portfolio.details',$item->id)); ?>" class="link"><?php echo e($item->portfolio_title); ?></a></h4>
                                    <a href="<?php echo e(route('portfolio.details',$item->id)); ?>" class="link">Case Study</a>
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><?php /**PATH C:\xampp\htdocs\project1\basic\resources\views/frontend/home_all/portfolio.blade.php ENDPATH**/ ?>