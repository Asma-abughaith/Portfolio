
<?php $__env->startSection('admin'); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Update Multi Images</h4>
                        <form method="POST" action="<?php echo e(route('update.multi.image')); ?>" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" name="id" value="<?php echo e($multiImage->id); ?>">
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">about multi
                                    Image</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="file" name="multi_image" id="single_image">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label"></label>

                                <div class="col-sm-10">
                                    <img id="showsingleimage" class="rounded avatar-lg"
                                        src="<?php echo e(asset($multiImage->multi_image)); ?>"
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
    $('#single_image').change(function(e) {
        let reader = new FileReader();
        reader.onload = function(e) {
            $('#showsingleimage').attr('src', e.target.result);
        };
        reader.readAsDataURL(e.target.files[0]);
    });
});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project1\basic\resources\views/admin/about_page/edit_multi_image.blade.php ENDPATH**/ ?>