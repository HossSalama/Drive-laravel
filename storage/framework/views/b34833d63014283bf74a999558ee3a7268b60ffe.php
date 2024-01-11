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
                    <td colspan="3">Action</td>
                    <td>Status</td>
                </thead>
                <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $drives; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td><?php echo e($item->id); ?></td>
                        <td><?php echo e($item->tittle); ?></td>
                        <td><a href="<?php echo e(route('drives.show',$item->id)); ?>"> <i class="fa-solid fa-eye" style="color: #ffae00;"></i></a></td>
                        <td><a href="<?php echo e(route('drives.edit',$item->id)); ?>"> <i class="fa-regular fa-pen-to-square" style="color: #ffffff;"></i></a></td>
                        <td><a onclick="return confirm('Are You Sure ?')" href="<?php echo e(route('drives.destroy',$item->id)); ?>"> <i class="fa-solid fa-trash" style="color: #c41717;"></i></a></td>
                        <?php if($item->status == 'private'): ?>
                        <td><a href="<?php echo e(route('drives.changeStatus',$item->id)); ?>"> <i class="fa-solid fa-lock" style="color: #4c79c8;"></i></a></td>
                        <?php else: ?>
                        <td><a href="<?php echo e(route('drives.changeStatus',$item->id)); ?>"> <i class="fa-solid fa-lock-open" style="color: #4c79c8;"></i></a></td>
                        <?php endif; ?>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <h1>No Data</h1>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Fullstack course\Backend\Tasks\Final App Laravel\resources\views/drives/index.blade.php ENDPATH**/ ?>