<?php if($paginator->hasPages()): ?>

<nav aria-label="Page navigation example">
                <ul class="pagination">


 <?php if($paginator->onFirstPage()): ?>
                <li class="page-item disabled" aria-disabled="true" aria-label="<?php echo app('translator')->get('pagination.previous'); ?>">
                   <a class="page-link" href="#"><i class="far fa-long-arrow-left"></i></a>
                </li>
            <?php else: ?>
                <li class="page-item">
                    <a class="page-link"  href="<?php echo e($paginator->previousPageUrl()); ?>" rel="prev" aria-label="<?php echo app('translator')->get('pagination.previous'); ?>"><i class="far fa-long-arrow-left"></i></a>
                </li>
            <?php endif; ?>


<?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
                <?php if(is_string($element)): ?>
                    <li class="disabled" aria-disabled="true"><span><?php echo e($element); ?></span></li>
                <?php endif; ?>

                
                <?php if(is_array($element)): ?>
                    <?php $__currentLoopData = $element; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($page == $paginator->currentPage()): ?>
                            <li class="page-item active" aria-current="page"> 
                            <a class="page-link" href="<?php echo e($url); ?>"><?php echo e($page); ?></a>
                        </li>
                        <?php else: ?>
                            <li><a class="page-link" href="<?php echo e($url); ?>"><?php echo e($page); ?></a></li>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


 <?php if($paginator->hasMorePages()): ?>
                <li class="page-item">
                    <a  class="page-link" href="<?php echo e($paginator->nextPageUrl()); ?>" rel="next" aria-label="<?php echo app('translator')->get('pagination.next'); ?>"><i class="far fa-long-arrow-right"></i></a>
                </li>
            <?php else: ?>
                <li class="disabled" aria-disabled="true" aria-label="<?php echo app('translator')->get('pagination.next'); ?>">
                   <a class="page-link" href="#"><i class="far fa-long-arrow-right"></i></a>
                </li>
            <?php endif; ?>
 

                </ul>
            </nav>



 <?php endif; ?> 




<?php /**PATH C:\xampp\htdocs\project1\basic\resources\views/vendor/pagination/custom.blade.php ENDPATH**/ ?>