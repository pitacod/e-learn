<?php $__env->startSection('content'); ?>
<section class="page-name background-bg" data-image-src="/assets/images/breadcrumb.jpg">
    <div class="overlay">
        <div class="section-padding">
            <div class="container">
                <h2 class="section-title"><?php echo e($user->name); ?></h2>
                <span class="designation">Professional App Developer</span>
            </div><!-- /.container -->
        </div><!-- /.section-padding -->
    </div><!-- /.overlay -->
</section><!-- /.page-name -->





<section class="instructor-details">
    <div class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-4 pr-5"> 
                    <div class="avatar text-center">
                        <img src="/assets/images/speakers/<?php echo e($user->image); ?>" alt="Avatar Image">
                    </div>
                    
                    <div class="social text-center">
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-pinterest"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                    </div><!-- /.social -->
                </div>

                <div class="col-md-8 pl-4">
                    <div class="meta">
                        <ul>
                            <li><span class="meta-id">Students</span> 56,879</li>
                            <li><span class="meta-id">Courses</span> 39</li>
                            <li><span class="meta-id">Reviews</span> 9,201</li>
                        </ul>
                    </div><!-- /.meta -->

                    <p>
                        <strong>
                            The first thing he wanted to do was to get up in peace without being disturbed, to get dressed, and most of all to have his breakfast
                        </strong>
                    </p>

                    <p>
                        Only then he consider what to do next, as well as he aware that he would not bring his thoughts to any conclusions by lying in bed. He remembered that he had often felt a slight pain in bed, perhaps caused by lying awkwardly, but that had always turned out to be pure imagination and he wondered how his imaginings 
                    </p>

                    <p>
                        He did not have the slightest doubt that the change in his voice was nothing more than the first sign of a serious cold, which was an occupational hazard for travelling salesmen
                    </p>
                </div>
            </div>
        </div><!-- /.container -->
    </div><!-- /.section-padding -->
</section><!-- /.instructor-details -->




<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hamdi/Bureau/formation 2i g3/elearn/resources/views/instructor/show.blade.php ENDPATH**/ ?>