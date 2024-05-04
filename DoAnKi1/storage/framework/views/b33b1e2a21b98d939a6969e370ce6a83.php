

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1><?php echo e($planet->name); ?></h1>
    <p>Khối lượng: <?php echo e($planet->size); ?></p>
    <p>Khí quyển: <?php echo e($planet->atmosphere); ?></p>
    <p>Khoảng cách từ Mặt Trời: <?php echo e($planet->distance_from_sun); ?> km</p>
    <p>Khoảng cách từ Trái Đất: <?php echo e($planet->distance_from_earth); ?> km</p>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Software\xampp\htdocs\Atmosphere\DoAnKi1Aptech\DoAnKi1\resources\views/planets/show.blade.php ENDPATH**/ ?>