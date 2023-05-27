
<?php $__env->startSection('main'); ?>
<main>
    <?php 
    $allMultiImage=App\Models\MultiImage::all();
    ?>

            <!-- breadcrumb-area -->
            <section class="breadcrumb__wrap">
                <div class="container custom-container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8 col-md-10">
                            <div class="breadcrumb__wrap__content">
                                <h2 class="title">Contact us</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Contact</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="breadcrumb__wrap__icon">
                    <ul>
                    <?php $__currentLoopData = $allMultiImage; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li>
                        <img class="light" src="<?php echo e(asset($image->multi_image)); ?>" alt="XD">
                    </li>
                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div> -->
            </section>
            <!-- breadcrumb-area-end -->

            <!-- contact-map -->
            <div id="contact-map">
                <iframe src="https://www.google.com/maps/embed?31.8916459,35.8308828,15.64z"
                    allowfullscreen loading="lazy"></iframe>
            </div>
            <!-- contact-map-end -->

            <!-- contact-area -->
            <div class="contact-area">
                <div class="container">
                    <form method="POST" action="<?php echo e(route('store.message')); ?>" class="contact__form">
                    <?php echo csrf_field(); ?>
                    <div class="row">
                            <div class="col-md-6">
                                <input type="text" placeholder="Enter your name*" name="name">
                            </div>
                            <div class="col-md-6">
                                <input type="email" placeholder="Enter your mail*"  name="email">
                            </div>
                            <div class="col-md-6">
                                <input type="text" placeholder="Enter your subject*"  name="subject">
                            </div>
                            <div class="col-md-6">
                                <input type="phone" placeholder="Your Budget*"  name="phone">
                            </div>
                        </div>
                        <textarea name="message" id="message" placeholder="Enter your massage*"></textarea>
                        <button type="submit" class="btn">send massage</button>
                    </form>
                </div>
            </div>
            <!-- contact-area-end -->

            <!-- contact-info-area -->
            <section class="contact-info-area">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6">
                            <div class="contact__info">
                                <div class="contact__info__icon">
                                    <img src="<?php echo e(asset('frontend/assets/img/icons/contact_icon01.png')); ?>" alt="">
                                </div>
                                <div class="contact__info__content">
                                    <h4 class="title">address line</h4>
                                    <span>Jordan-Amman</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="contact__info">
                                <div class="contact__info__icon">
                                    <img src="<?php echo e(asset('frontend/assets/img/icons/contact_icon02.png')); ?>" alt="">
                                </div>
                                <div class="contact__info__content">
                                    <h4 class="title">Phone Number</h4>
                                    <span>+96279-5802-153</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="contact__info">
                                <div class="contact__info__icon">
                                    <img src="<?php echo e(asset('frontend/assets/img/icons/contact_icon03.png')); ?>" alt="">
                                </div>
                                <div class="contact__info__content">
                                    <h4 class="title">Mail Address</h4>
                                    <span>asma.abughaith@gmail.com</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- contact-info-area-end -->

            <!-- contact-area -->
            <?php echo $__env->make('frontend.home_all.home_contact', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- contact-area-end -->

        </main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.main_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project1\basic\resources\views/frontend/contact.blade.php ENDPATH**/ ?>