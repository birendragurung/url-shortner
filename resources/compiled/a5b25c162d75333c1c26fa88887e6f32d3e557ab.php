<?php $__env->startSection('content'); ?>
    <section class="content">
        <div class="row pt-3">
            <div class="container-fluid">

                <div class="col-md-6">
                    <!-- general form elements disabled -->
                    <div class="card card-warning">
                        <div class="card-header">
                            <h3 class="card-title">Update url</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form role="form" method="post" action="<?php echo e(url('/urls/' . $url->id . '/update' )); ?>">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label for="text">Title</label>
                                            <input name="title" id="text" type="text" class="form-control" placeholder="Enter link name" required value="<?php echo e($url->title); ?>">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="url">URL</label>
                                            <input id="url" type="text" name="url" class="form-control" placeholder="Enter url" required value="<?php echo e($url->url); ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- textarea -->
                                        <div class="form-group">
                                            <label for="description">Description</label>
                                            <textarea id="description" name="description" class="form-control" rows="3" placeholder="Enter description"><?php echo e($url->description); ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <button class="btn btn-outline-primary" type="submit">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/birendra/Projects/test/url-shortener/resources/views/url/edit.blade.php ENDPATH**/ ?>