<?php $__env->startSection('content'); ?>
<section class="content">
    <div class="error-page">
        <h2 class="headline text-danger">500</h2>

        <div class="error-content">
            <h3><i class="fas fa-exclamation-triangle text-danger"></i> Oops! Something went wrong.</h3>

            <p>
                We will work on fixing that right away.
            </p>

        </div>
    </div>
    <!-- /.error-page -->

</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.guest', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/birendra/Projects/test/url-shortener/resources/views/commons/500.blade.php ENDPATH**/ ?>