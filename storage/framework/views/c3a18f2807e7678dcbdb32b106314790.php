
<?php $__env->startSection('admin'); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">About Page</h4>
                        <form method="POST" action="<?php echo e(route('update.about')); ?>" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" name="id" value="<?php echo e($aboutpage->id); ?>">
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Title</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" placeholder="Title" name="title"
                                        value="<?php echo e($aboutpage->title); ?>">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Short Title</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" placeholder="Short Title" name="short_title"
                                        value="<?php echo e($aboutpage->short_title); ?>">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Short
                                    Description</label>
                                <div class="col-sm-10">
                                <textarea required="" class="form-control" rows="5" name="short_description"><?php echo e($aboutpage->short_description); ?></textarea>
                            </div>
                            </div>

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Long Description</label>
                                <div class="col-sm-10">
                                <textarea id="elm1" name="long_description"><?php echo e($aboutpage->long_description); ?></textarea>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">about
                                    Image</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="file" name="about_image" id="about_image"
                                        value="<?php echo e($aboutpage->about_image); ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label"></label>

                                <div class="col-sm-10">
                                    <img id="showImagespage" class="rounded avatar-lg"
                                        src="<?php echo e(!empty($aboutpage->about_image)?url($aboutpage->about_image):url('upload/no_image.jpg')); ?>"
                                        alt="Card image cap">

                                </div>
                            </div>
                            <input type="submit" class="btn btn-info btn-rounded waves-effect waves-light">

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
//how to make image appear when you upload the image
$(document).ready(function() {
    $('#about_image').change(function(e) {
        let reader = new FileReader();
        reader.onload = function(e) {
            $('#showImagespage').attr('src', e.target.result);
        };
        reader.readAsDataURL(e.target.files[0]);
    });
});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project1\basic\resources\views/admin/about_page/about_page_all.blade.php ENDPATH**/ ?>