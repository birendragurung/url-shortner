<?php $__env->startSection('content'); ?>

        <!-- Main content -->
        <section class="content">
            <div class="error-page">
                <h2 class="headline text-warning">404</h2>

                <div class="error-content">
                    <h3><i class="fas fa-exclamation-triangle text-warning"></i> Oops! Page not found.</h3>

                    <p>
                        We could not find the page you were looking for.
                    </p>
                </div>
                <!-- /.error-content -->
            </div>
            <!-- /.error-page -->
        </section>
        <!-- /.content -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.guest', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/birendra/Projects/test/url-shortener/resources/views/commons/error.blade.php ENDPATH**/ ?>