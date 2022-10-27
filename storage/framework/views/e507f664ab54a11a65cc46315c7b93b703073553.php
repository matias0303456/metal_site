

<?php $__env->startSection('title'); ?>
<title>Countries</title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<a href="<?php echo e(route('get_country')); ?>" class="block mb-3 bg-zinc-500 text-slate-50 p-2 text-sm rounded-sm w-28 text-center">
    <button type="button">
        Add country
    </button>
</a>
<table class="w-full text-center">
    <thead>
        <th>#</th>
        <th>Name</th>
        <th>ISO Code</th>
        <th>Actions</th>
    </thead>
    <tbody>
        <?php if(count($countries) === 0): ?>
        <tr>
            <td colspan="4">No countries registered.</td>
        </tr>
        <?php else: ?>
        <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($country->id); ?></td>
            <td><?php echo e($country->name); ?></td>
            <td><?php echo e($country->iso_code); ?></td>
            <td>
                <a href="<?php echo e(route('delete_country', ['id' => $country->id])); ?>">
                    <button class="bg-red-600 text-slate-50 p-1 rounded-sm text-sm">
                        Delete
                    </button>
                </a>
                <a href="<?php echo e(route('get_country', ['id' => $country->id])); ?>">
                    <button class="bg-red-300 text-zinc-800 p-1 rounded-sm text-sm">
                        Edit
                    </button>
                </a>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    </tbody>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Matias\Desktop\proyectos\metal_site\resources\views/countries/list.blade.php ENDPATH**/ ?>