

<?php $__env->startSection('title'); ?>
<title>Nuevo país</title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<?php if($errors->any()): ?>
<?php echo e(var_dump($errors)); ?>

<?php endif; ?>
<form action="/store-country" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo method_field('POST'); ?>
    <label for="name">Nombre</label>
    <input type="text" name="name" />
    <label for="iso_code">Código ISO</label>
    <input type="text" name="iso_code" />
    <input type="submit" value="Guardar" />
</form>
<a href="/paises">
    <button type="button">
        Cancelar
    </button>
</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Matias\Desktop\proyectos\metal_site\resources\views/countries/new.blade.php ENDPATH**/ ?>