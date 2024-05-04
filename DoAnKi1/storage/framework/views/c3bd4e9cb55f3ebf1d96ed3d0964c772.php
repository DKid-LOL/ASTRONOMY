

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Danh sách các Hành Tinh</h1>
    <ul>
        <?php $__currentLoopData = $planets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $planet): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><a href="<?php echo e(route('planets.show', $planet->id)); ?>"><?php echo e($planet->name); ?></a></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Software\xampp\htdocs\Atmosphere\DoAnKi1Aptech\DoAnKi1\resources\views/planets/index.blade.php ENDPATH**/ ?>