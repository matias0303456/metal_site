

<?php $__env->startSection('title'); ?>
<?php if($country == null): ?>
<title>New country</title>
<?php else: ?>
<title>Edit <?php echo e($country->name); ?></title>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="flex relative">
    <?php if($country == null): ?>
    <form action="<?php echo e(route('store_country')); ?>" method="POST" class="bg-zinc-200 p-3 m-3 text-center rounded-sm mx-auto">
        <?php echo method_field('POST'); ?>
        <?php echo csrf_field(); ?>
        <div class="flex justify-between gap-3">
            <label class="block" for="name">Name</label>
            <input type="text" name="name" class="px-2 rounded-sm" value="<?php echo e(old('name')); ?>" />
        </div>
        <div class="mt-2 flex justify-between gap-3">
            <label for="iso_code">ISO code</label>
            <input type="text" name="iso_code" class="px-2 rounded-sm" value="<?php echo e(old('iso_code')); ?>" />
        </div>
        <input type="submit" value="Save" class="mt-3 w-full bg-zinc-500 text-slate-50 p-1 text-sm rounded-sm hover:cursor-pointer" />
    </form>
    <?php else: ?>
    <form action="<?php echo e(route('update_country', ['id' => $country->id])); ?>" method="PUT" class="bg-zinc-200 p-3 m-3 text-center rounded-sm mx-auto">
        <?php echo method_field('PUT'); ?>
        <?php echo csrf_field(); ?>
        <div class="flex justify-between gap-3">
            <label for="name">Name</label>
            <input type="text" name="name" value="<?php echo e($country->name); ?>" class="px-2 rounded-sm" />
        </div>
        <div class="mt-2 flex justify-between gap-3">
            <label for="iso_code">ISO code</label>
            <input type="text" name="iso_code" value="<?php echo e($country->iso_code); ?>" class="px-2 rounded-sm" />
        </div>
        <input type="submit" value="Update" class="mt-3 w-full bg-zinc-500 text-slate-50 p-1 text-sm rounded-sm hover:cursor-pointer" />
    </form>
    <?php endif; ?>
    <?php if($errors->any()): ?>
    <?php endif; ?>
    <a href="<?php echo e(route('get_countries')); ?>" class="absolute right-0 bg-zinc-500 text-slate-50 p-2 text-sm rounded-sm">
        Go back
    </a>
</div>
<div class="text-red-800 text-center">
    <ul>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><?php echo e($error); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Matias\Desktop\proyectos\metal_site\resources\views/countries/new.blade.php ENDPATH**/ ?>