<?php 
$footers= App\Models\Footer::findOrFail(1);

?>
<footer class="footer">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-4">
                        <div class="footer__widget">
                            <div class="fw-title">
                                <h5 class="sub-title">Contact us</h5>
                                <h4 class="title"><?php echo e($footers->number); ?></h4>
                            </div>
                            <div class="footer__widget__text">
                                <p><?php echo e($footers->short_description); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="footer__widget">
                            <div class="fw-title">
                                <h5 class="sub-title">my address</h5>
                                <h4 class="title"></h4>
                            </div>
                            <div class="footer__widget__address">
                                <p><?php echo e($footers->address); ?></p>
                                <a href="mailto:<?php echo e($footers->email); ?>" class="mail"><?php echo e($footers->email); ?></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="footer__widget">
                            <div class="fw-title">
                                <h5 class="sub-title">Follow me</h5>
                                <h4 class="title">socially connect</h4>
                            </div>
                            <div class="footer__widget__social">
                                <p>contact with me  in social media</p>
                                <ul class="footer__social__list">
                                    <li><a href="<?php echo e($footers->facebook); ?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="<?php echo e($footers->twitter); ?>" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                    <!-- <li><a href="#"><i class="fab fa-behance"></i></a></li> -->
                                    <li><a href="https://www.linkedin.com/in/asma-abughaith/" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="https://www.instagram.com/asmaabughaith/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="copyright__wrap">
                    <div class="row">
                        <div class="col-12">
                            <div class="copyright__text text-center">
                                <p><?php echo e($footers->copyright); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer><?php /**PATH C:\xampp\htdocs\project1\basic\resources\views/frontend/body/footer.blade.php ENDPATH**/ ?>