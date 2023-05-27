<section class="homeContact homeContact__style__two">
    <div class="container">
        <div class="homeContact__wrap">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section__title">
                        <span class="sub-title">03 - Say hello</span>
                        <h2 class="title">Any questions? Feel free <br> to contact</h2>
                    </div>
                    <div class="homeContact__content">
                        <p></p>
                        <h2 class="mail"><a href="mailto:Info@webmail.com">asma.abughaith@gmail.com</a></h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="homeContact__form">
                        <form method="POST" action="<?php echo e(route('store.message')); ?>">
                            <?php echo csrf_field(); ?>
                            <input type="text" placeholder="Enter name*" name="name">
                            <input type="email" placeholder="Enter mail*" name="email">
                            <input type="number" placeholder="Enter number*" name="phone">
                            <textarea name="message" id="message" placeholder="Enter Massage*"></textarea>
                            <button type="submit">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php /**PATH C:\xampp\htdocs\project1\basic\resources\views/frontend/home_all/home_contact.blade.php ENDPATH**/ ?>