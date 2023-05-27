
<?php $__env->startSection('admin'); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<style type="text/css">
    .bootstrap-tagsinput .tag{
        margin-right: 2px;
        color: #b70000;
        font-weight: 700px;
    } 
</style>
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Blog Page</h4>
                        <form method="POST" action="<?php echo e(route('store.blog')); ?>" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">blog Title</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" placeholder="blog Title"
                                        name="blog_title">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">blog Title</label>
                                <div class="col-sm-10">
                                <input class="form-control" type="text" placeholder="blog Title"
                                        name="blog_tags" value="home,tech" data-role="tagsinput">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">blog ctegory</label>
                                <div class="col-sm-10">
                                    <select class="form-select" aria-label="Default select example" name="blog_category_id">
                                        <option selected="">Open this select menu</option>
                                        <?php $__currentLoopData = $blogCategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($item->id); ?>"><?php echo e($item->blog_category); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">blog
                                    Description</label>
                                <div class="col-sm-10">
                                    <textarea id="elm1" name="blog_description"></textarea>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Blog
                                    Image</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="file" name="blog_image" id="blog_image">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label"></label>

                                <div class="col-sm-10">
                                    <img id="show_blog_image" class="rounded avatar-lg"
                                        src="<?php echo e(url('upload/no_image.jpg')); ?>" alt="Card image cap">

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
    $('#blog_image').change(function(e) {
        let reader = new FileReader();
        reader.onload = function(e) {
            $('#show_blog_image').attr('src', e.target.result);
        };
        reader.readAsDataURL(e.target.files[0]);
    });
});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project1\basic\resources\views/admin/blogs/blog_add.blade.php ENDPATH**/ ?>