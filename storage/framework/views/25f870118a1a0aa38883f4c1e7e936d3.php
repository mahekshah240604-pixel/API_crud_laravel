<table border="1">
    <tr>
        <td>id</td>
        <td>name</td>
        <td>mobile</td>
    </tr>
    <?php $__currentLoopData = $mydata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($user->student_id); ?></td>
            <td><?php echo e($user->student_name); ?></td>
            <td><?php echo e($user->student_mobile); ?></td>
            <td>
                <form action="<?php echo e(url('/api/delete',$user->student_id)); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <input type="submit" value="delete">
                </form>
            </td>
            <td><a href="<?php echo e(url('/api/edit',$user->student_id)); ?>">edit</a></td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table><?php /**PATH C:\xampp\htdocs\laravel\api_crud\resources\views\display.blade.php ENDPATH**/ ?>