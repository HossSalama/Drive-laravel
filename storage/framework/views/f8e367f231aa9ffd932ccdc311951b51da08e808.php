<?php $__env->startSection('content'); ?>

<h1 class="text-center">Upload File</h1>
<?php if(Session::has('done')): ?>
<div class="container col-md-6">
    <div class="alert alert-success text-center">
        <?php echo e(Session::get('done')); ?>

        </div>
</div>
<?php endif; ?>

<?php if($errors->any()): ?>
<div class="alert alert-danger mx-auto col-md-6">
<ul>
   <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $errors): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li><?php echo e($errors); ?></li>
   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
</div>
<?php endif; ?>
<div class="container col-md-6">
<div class="card">
    <div class="card-body">
        <form action="<?php echo e(route('drives.store')); ?>"  method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label>Tittle</label>
                <input type="text" name="tittle" value="<?php echo e(old('tittle')); ?>"  class="form-control" placeholder="Tittle">
            </div>
            <div class="form-group">
                <label>Description</label>
                <input type="text" name="description" value="<?php echo e(old('description')); ?>" class="form-control" placeholder="Description">
            </div>
            <div class="form-group">
                <label>Upload File</label>
                <input type="file" name="inputfile" class="form-control" placeholder="Upload File">

            </div>
            <button class="btn btn-info" name="upload">Upload File</button>
        </form>
    </div>
</div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Fullstack course\Backend\Tasks\Final App Laravel\resources\views/drives/create.blade.php ENDPATH**/ ?>