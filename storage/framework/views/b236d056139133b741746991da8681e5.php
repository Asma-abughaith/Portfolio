<?php 
$blog = App\Models\Blog::latest()->limit(3)->get();
?>
<section class="blog">
    <div class="container">
        <div class="row gx-0 justify-content-center">
            <?php $__currentLoopData = $blog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-4 col-md-6 col-sm-9">
                <div class="blog__post__item">
                    <div class="blog__post__thumb">
                        <a href="<?php echo e(route('blog.details',$item->id)); ?>"><img src="<?php echo e(asset($item->blog_image)); ?>" alt=""></a>
                        <div class="blog__post__tags">
                            <a href="<?php echo e(route('category.blog',$item['category']['id'])); ?>"><?php echo e($item['category']['blog_category']); ?></a>
                        </div>
                    </div>
                    <div class="blog__post__content">
                        <span class="date"><?php echo e(Carbon\Carbon::parse($item->created_at)->diffForHumans()); ?></span>
                        <h3 class="title"><a href="<?php echo e(route('blog.details',$item->id)); ?>"><?php echo e($item->blog_title); ?></a></h3>
                        <a href="<?php echo e(route('blog.details',$item->id)); ?>" class="read__more">Read mORe</a>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div class="blog__button text-center">
            <a href="<?php echo e(route('home.blog')); ?>" class="btn">more blog</a>
        </div>
    </div>
</section><?php /**PATH C:\xampp\htdocs\project1\basic\resources\views/frontend/home_all/blog.blade.php ENDPATH**/ ?>