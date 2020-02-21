<?php $__env->startSection('content'); ?>
    <section class="content">
        <div class="row pt-3">
            <div class="container-fluid">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-10">
                                    <span class="card-title">Urls</span>
                                </div>
                                <div class="col-2">
                                    <a href="<?php echo e((url('urls/create'))); ?>">Add</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-header">
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Created on</th>
                                    <th>Url | Tiny url</th>
                                    <th>Total visits</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $urls; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($url->id); ?></td>
                                        <td><?php echo e($url->title); ?></td>
                                        <td><?php echo e($url->description); ?></td>
                                        <td><span class="tag tag-success"><?php echo e($url->created_at->diffForHumans()); ?></span>
                                        </td>
                                        <td><a href="<?php echo e($url->url); ?>"><?php echo e($url->url); ?></a> |
                                            <a href="<?php echo e(url('t/'. $url->tiny_url )); ?>"><?php echo e(url('t/'. $url->tiny_url )); ?></a>
                                        </td>
                                        <td><?php echo e($url->visits); ?></td>
                                        <td>
                                            <a href="<?php echo e(url('urls/' . $url->id . '/edit')); ?>"><i class="fa fa-edit"></i></a>
                                            <a href="<?php echo e(url('urls/' . $url->id . '/delete')); ?>"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/birendra/Projects/test/url-shortener/resources/views/url/index.blade.php ENDPATH**/ ?>