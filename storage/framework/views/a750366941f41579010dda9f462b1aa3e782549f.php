<table class="w-full text-center">
    <thead>
        <?php $__currentLoopData = $columns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $column): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <th>$column</th>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </thead>
    <tbody>
        <?php if(count($data) === 0): ?>
        <tr>
            <td colspan="4">No data to show.</td>
        </tr>
        <?php else: ?>
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($item[key]); ?></td>
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
</table><?php /**PATH C:\Users\Matias\Desktop\proyectos\metal_site\resources\views/components/table.blade.php ENDPATH**/ ?>