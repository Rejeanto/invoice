

<?php $__env->startSection('container'); ?>

<table border="1">
    <tr>
        <th>No</th>
        <th>Email</th>
    </tr>
    <?php $__currentLoopData = $contoh; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tbody>
        <td><?php echo e($c ->id); ?></td>
        <td><?php echo e($c ->email); ?></td>
    </tbody>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Rejeanto\OneDrive\Documents\coba2-laravel\resources\views/contoh.blade.php ENDPATH**/ ?>