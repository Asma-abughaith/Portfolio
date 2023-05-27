
<?php $__env->startSection('main'); ?>

<!-- banner-area -->
<?php echo $__env->make('frontend.home_all.home_slide', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- banner-area-end -->

<!-- about-area -->
<?php echo $__env->make('frontend.home_all.home_about', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- about-area-end -->

<!-- services-area -->
<!-- <section class="services">
    <div class="container">
        <div class="services__title__wrap">
            <div class="row align-items-center justify-content-between">
                <div class="col-xl-5 col-lg-6 col-md-8">
                    <div class="section__title">
                        <span class="sub-title">02 - my Services</span>
                        <h2 class="title">Creates amazing digital experiences</h2>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 col-md-4">
                    <div class="services__arrow"></div>
                </div>
            </div>
        </div>
        <div class="row gx-0 services__active">
            <div class="col-xl-3">
                <div class="services__item">
                    <div class="services__thumb">
                        <a href="services-details.html"><img src="assets/img/images/services_img01.jpg" alt=""></a>
                    </div>
                    <div class="services__content">
                        <div class="services__icon">
                            <img class="light" src="assets/img/icons/services_light_icon01.png" alt="">
                            <img class="dark" src="assets/img/icons/services_icon01.png" alt="">
                        </div>
                        <h3 class="title"><a href="services-details.html">Business Strategy</a></h3>
                        <p>Strategy is a forward-looking plan for your brand’s behavior. Strategy is a forward-looking plan.</p>
                        <ul class="services__list">
                            <li>Research & Data</li>
                            <li>Branding & Positioning</li>
                            <li>Business Consulting</li>
                            <li>Go To Market</li>
                        </ul>
                        <a href="services-details.html" class="btn border-btn">Read more</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3">
                <div class="services__item">
                    <div class="services__thumb">
                        <a href="services-details.html"><img src="assets/img/images/services_img02.jpg" alt=""></a>
                    </div>
                    <div class="services__content">
                        <div class="services__icon">
                            <img class="light" src="assets/img/icons/services_light_icon02.png" alt="">
                            <img class="dark" src="assets/img/icons/services_icon02.png" alt="">
                        </div>
                        <h3 class="title"><a href="services-details.html">Brand Strategy</a></h3>
                        <p>Strategy is a forward-looking plan for your brand’s behavior. Strategy is a forward-looking plan.</p>
                        <ul class="services__list">
                            <li>User Research & Testing</li>
                            <li>UX Design</li>
                            <li>Visual Design</li>
                            <li>Information Architecture</li>
                        </ul>
                        <a href="services-details.html" class="btn border-btn">Read more</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3">
                <div class="services__item">
                    <div class="services__thumb">
                        <a href="services-details.html"><img src="assets/img/images/services_img03.jpg" alt=""></a>
                    </div>
                    <div class="services__content">
                        <div class="services__icon">
                            <img class="light" src="assets/img/icons/services_light_icon03.png" alt="">
                            <img class="dark" src="assets/img/icons/services_icon03.png" alt="">
                        </div>
                        <h3 class="title"><a href="services-details.html">Product Design</a></h3>
                        <p>Strategy is a forward-looking plan for your brand’s behavior. Strategy is a forward-looking plan.</p>
                        <ul class="services__list">
                            <li>User Research & Testing</li>
                            <li>UX Design</li>
                            <li>Visual Design</li>
                            <li>Information Architecture</li>
                        </ul>
                        <a href="services-details.html" class="btn border-btn">Read more</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3">
                <div class="services__item">
                    <div class="services__thumb">
                        <a href="services-details.html"><img src="assets/img/images/services_img04.jpg" alt=""></a>
                    </div>
                    <div class="services__content">
                        <div class="services__icon">
                            <img class="light" src="assets/img/icons/services_light_icon04.png" alt="">
                            <img class="dark" src="assets/img/icons/services_icon04.png" alt="">
                        </div>
                        <h3 class="title"><a href="services-details.html">Visual Design</a></h3>
                        <p>Strategy is a forward-looking plan for your brand’s behavior. Strategy is a forward-looking plan.</p>
                        <ul class="services__list">
                            <li>User Research & Testing</li>
                            <li>UX Design</li>
                            <li>Visual Design</li>
                            <li>Information Architecture</li>
                        </ul>
                        <a href="services-details.html" class="btn border-btn">Read more</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3">
                <div class="services__item">
                    <div class="services__thumb">
                        <a href="services-details.html"><img src="assets/img/images/services_img03.jpg" alt=""></a>
                    </div>
                    <div class="services__content">
                        <div class="services__icon">
                            <img class="light" src="assets/img/icons/services_light_icon02.png" alt="">
                            <img class="dark" src="assets/img/icons/services_icon02.png" alt="">
                        </div>
                        <h3 class="title"><a href="services-details.html">Web Development</a></h3>
                        <p>Strategy is a forward-looking plan for your brand’s behavior. Strategy is a forward-looking plan.</p>
                        <ul class="services__list">
                            <li>User Research & Testing</li>
                            <li>UX Design</li>
                            <li>Visual Design</li>
                            <li>Information Architecture</li>
                        </ul>
                        <a href="services-details.html" class="btn border-btn">Read more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- services-area-end -->
<?php echo $__env->make('frontend.home_all.portfolio', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- blog-area -->

<?php echo $__env->make('frontend.home_all.blog', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- blog-area-end -->

<!-- contact-area -->
<?php echo $__env->make('frontend.home_all.home_contact', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- contact-area-end -->
<?php $__env->stopSection(); ?>


<?php echo $__env->make('frontend.main_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project1\basic\resources\views/frontend/index.blade.php ENDPATH**/ ?>