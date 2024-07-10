
<?php $__env->startSection('content'); ?>
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">

            <div class="row gy-4">
                <div class="col-lg-8">
                    <div class="portfolio-details-slider swiper">
                        <div class="swiper-wrapper align-items-center">
                            <div class="swiper-slide">
                                <img src="<?php echo e(asset('storage/' . $project->image)); ?>" alt="">
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="portfolio-info">
                        <h3><a href="<?php echo e($project->link); ?>"
                                target="_blanck"><?php echo e($project->{'title_' . app()->getLocale()}); ?></a></h3>
                        <ul>
                            <li><?php echo __('home.devweb'); ?></li>
                        </ul>
                    </div>
                    <div class="portfolio-description">
                        <?php echo e($project->{'description_' . app()->getLocale()}); ?>

                    </div>
                </div>
            </div>
            <?php if($images->count() > 0): ?>
                <div class="row justify-content-center">
                    <div class="col-10">
                        <h3><?php echo __('home.single-project.images'); ?></h3>
                        <div class="row  mt-4">
                            <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-lg-4  cont-image col-md-6 mt-4">
                                    <a href="<?php echo e(asset('storage/' . $item->url )); ?>"
                                        data-gallery="portfolio-gallery" class="glightbox cont-img">
                                        <img src="<?php echo e(asset('storage/' . $item->url)); ?>"
                                            class="img-fluid" alt="">
                                    </a>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <?php if($images_code->count() > 0): ?>
                <div class="row mt-4 justify-content-center">
                    <div class="col-10">
                        <h3><?php echo __('home.single-project.images_code'); ?></h3>
                        <div class="row  mt-4">
                            <?php $__currentLoopData = $images_code; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-lg-4  cont-image col-md-6 mt-4">
                                    <a href="<?php echo e(asset('storage/' . $item->url_code)); ?>"
                                        data-gallery="portfolio-gallery-code" class="glightbox cont-img">
                                        <img src="<?php echo e(asset('storage/' . $item->url_code)); ?>"
                                            class="img-fluid" alt="">
                                    </a>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <div class="row d-flex justify-content-center" style="margin-top:60px">
                <div class="col-md-10 d-flex justify-content-center">
                    <video src="<?php echo e(asset('storage/' . $project->video)); ?>" controls style="max-height: 450px;"></video>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\portfolio_v2\resources\views/single-project.blade.php ENDPATH**/ ?>