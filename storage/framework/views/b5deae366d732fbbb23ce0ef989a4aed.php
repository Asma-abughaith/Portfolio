
<?php $__env->startSection('main'); ?>

<?php $__env->startSection('title'); ?>
Blog | Asma Abughaith Website
<?php $__env->stopSection(); ?>

<main>

    <!-- breadcrumb-area -->
    <section class="breadcrumb__wrap">
        <div class="container custom-container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="breadcrumb__wrap__content">
                        <h2 class="title"> All Blogs</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Blog</li>
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


    <!-- blog-area -->
    <section class="standard__blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">

                    <?php $__currentLoopData = $allblogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="standard__blog__post">
                        <div class="standard__blog__thumb">
                            <a href="blog-details.html"><img src="<?php echo e(asset($item->blog_image)); ?>" alt=""></a>
                            <a href="blog-details.html" class="blog__link"><i class="far fa-long-arrow-right"></i></a>
                        </div>
                        <div class="standard__blog__content">
                            <div class="blog__post__avatar">
                                <div class="thumb"><img src="<?php echo e(asset($item->blog_image)); ?>" alt=""></div>
                                <span class="post__by">By : <a href="#">Asma'a Abughaith</a></span>
                            </div>
                            <h2 class="title"><a href="<?php echo e(route('blog.details',$item->id)); ?>"><?php echo e($item->blog_title); ?></a>
                            </h2>
                            <p><?php echo Str::limit($item->blog_description, 300); ?> </p>
                            <ul class="blog__post__meta">
                                <li><i class="fal fa-calendar-alt"></i>
                                    <?php echo e(Carbon\Carbon::parse($item->created_at)->diffForHumans()); ?></li>


                            </ul>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                    <div class="pagination-wrap">
                    <?php echo e($allblogs->links('vendor.pagination.custom')); ?>

                            </div>
                </div>
                <div class="col-lg-4">
                    <aside class="blog__sidebar">
                        <div class="widget">
                            <form action="#" class="search-form">
                                <input type="text" placeholder="Search">
                                <button type="submit"><i class="fal fa-search"></i></button>
                            </form>
                        </div>


                        <div class="widget">
                            <h4 class="widget-title">Recent Blog</h4>
                            <ul class="rc__post">

                                <?php $__currentLoopData = $allblogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $all): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li class="rc__post__item">
                                    <div class="rc__post__thumb">
                                        <a href="blog-details.html"><img src="<?php echo e(asset($all->blog_image)); ?> "
                                                alt=""></a>
                                    </div>
                                    <div class="rc__post__content">
                                        <h5 class="title"><a href="blog-details.html"><?php echo e($all->blog_title); ?>

                                            </a></h5>
                                        <span class="post-date"><i class="fal fa-calendar-alt"></i>
                                            <?php echo e(Carbon\Carbon::parse($all->created_at)->diffForHumans()); ?> </span>
                                    </div>
                                </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </ul>
                        </div>

                        <div class="widget">
                            <h4 class="widget-title">Categories</h4>
                            <ul class="sidebar__cat">
                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li class="sidebar__cat__item"><a
                                        href="<?php echo e(route('category.blog',$cat->id)); ?>"><?php echo e($cat->blog_category); ?> </a>
                                </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>


                       
                    </aside>
                </div>
            </div>
        </div>
    </section>
    <!-- blog-area-end -->


    <!-- contact-area -->
    <?php echo $__env->make('frontend.home_all.home_contact', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- contact-area-end -->

</main>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.main_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project1\basic\resources\views/frontend/blogs.blade.php ENDPATH**/ ?>