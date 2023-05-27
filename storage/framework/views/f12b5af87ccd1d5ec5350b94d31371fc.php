
<?php $__env->startSection('admin'); ?>

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">All Portfolio</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Portfolio All Data Table</h4>
                        <table id="datatable" class="table table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>serial no.</th>
                                    <th>Portfolio Name</th>
                                    <th>Portfolio Title</th>
                                    <th>Portfolio Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php ($i = 1); ?>
                                <?php $__currentLoopData = $portfolio; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td> <?php echo e($i++); ?> </td>
                                    <td> <?php echo e($item->portfolio_name); ?> </td>
                                    <td> <?php echo e($item->portfolio_title); ?> </td>
                                    <td> <img src="<?php echo e(asset($item->portfolio_image)); ?>" style="width: 60px; height: 50px;">
                                    </td>

                                    <td>
                                        <a href="<?php echo e(route('edit.portfolio',$item->id)); ?>" class="btn btn-info sm" title="Edit Data"> <i
                                                class="fas fa-edit"></i> </a>

                                        <a href="<?php echo e(route('delete.portfolio',$item->id)); ?>" class="btn btn-danger sm" title="Delete Data" id="delete"> <i
                                                class="fas fa-trash"></i> </a>

                                    </td>

                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </tbody>
                        </table>

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->


        <!-- end row-->

    </div> <!-- container-fluid -->
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project1\basic\resources\views/admin/portfolio/portfolio_all.blade.php ENDPATH**/ ?>