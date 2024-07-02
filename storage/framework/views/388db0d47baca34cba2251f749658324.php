<?php $__env->startSection('content'); ?>
<section class="page-name background-bg" data-image-src="/assets/images/breadcrumb.jpg">
    <div class="overlay">
        <div class="section-padding">
            <div class="container">
                <h2 class="section-title">Instructors</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Instructors</li>
                    </ol>
                </nav>
            </div><!-- /.container -->
        </div><!-- /.section-padding -->
    </div><!-- /.overlay -->
</section><!-- /.page-name -->





<section class="instructors text-center">
    <div class="section-padding">
        <div class="container">
            <div class="row">

                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
               
                <div class="col-md-3 col-sm-6">
                    <div class="instructor">
                        <div class="avatar radius"><img src="/assets/images/speakers/<?php echo e($user->image); ?>" alt="Avatar Image">
                        </div><!-- /.avatar -->
                        <div class="instructor-details">
                            <h3 class="name"><a href="<?php echo e(route('instructors.show', $user->id)); ?>"><?php echo e($user->name); ?></a></h3><!-- /.name -->
                            <span class="designation">Web Designer</span><!-- /.designation -->
                        </div><!-- /.instructor-details -->
                    </div><!-- /.instructor -->
                </div>

               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          
            </div><!-- /.row -->
<?php echo e($users->links()); ?>

        </div><!-- /.container -->
    </div><!-- /.section-padding -->
</section><!-- /.instructors -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hamdi/Bureau/formation 2i g3/elearn/resources/views/instructor/index.blade.php ENDPATH**/ ?>