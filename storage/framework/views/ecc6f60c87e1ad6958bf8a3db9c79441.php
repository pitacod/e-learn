<?php $__env->startSection('content'); ?>

<section>
    <div class="section-padding">
        <div class="container">
    <div class="row">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <?php echo e($course->title); ?>

                </div>
                <div class="card-body">
                    <div class="d-flex">
                        <img src="" alt="">
                        <div>
                            <ul>
                                <li><?php echo e($course->description); ?></li>
                                <li><?php echo e($course->price); ?></li>
                                <li>formateur: <?php echo e($course->instructor->email); ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hamdi/Bureau/formation 2i g3/elearn/resources/views/course/show.blade.php ENDPATH**/ ?>