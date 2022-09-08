

<?php $__env->startSection('title'); ?>
<title>Países</title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<?php if(count($countries) === 0): ?>
<h2>No hay países registrados.</h2>
<?php else: ?>
<ul>
    <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li><?php echo e($country->name); ?></li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
<?php endif; ?>
<a href="/nuevo-pais">
    <button type="button">
        + País
    </button>
</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Matias\Desktop\proyectos\metal_site\resources\views/countries/list.blade.php ENDPATH**/ ?>