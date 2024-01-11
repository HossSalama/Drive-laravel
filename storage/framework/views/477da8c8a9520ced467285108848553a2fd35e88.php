<?php $__env->startSection('content'); ?>
<h1 class="text-center">List Files</h1>
<?php if(Session::has('done')): ?>
<div class="container col-md-6">
    <div class="alert alert-success text-center">
        <?php echo e(Session::get('done')); ?>

        </div>
</div>
<?php endif; ?>
<div class="container col-md-6">
    <div class="card">
        <div class="card-body">
            <table class="table table-dark">
                <thead>
                    <td>Id</td>
                    <td>Tittle</td>
                    <td>Email</td>
                    <td colspan="">Action</td>
                </thead>
                <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $drives; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td><?php echo e($item->driveid); ?></td>
                        <td><?php echo e($item->drivetittle); ?></td>
                        <td><?php echo e($item->useremail); ?></td>
                        <td><a href="<?php echo e(route('drives.showpublicfiles',$item->driveid)); ?>"> <i class="fa-solid fa-eye" style="color: #fe9706;"></i></a></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <h1>No Public Data</h1>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Fullstack course\Backend\Tasks\Final App Laravel\resources\views/drives/publicfiles.blade.php ENDPATH**/ ?>