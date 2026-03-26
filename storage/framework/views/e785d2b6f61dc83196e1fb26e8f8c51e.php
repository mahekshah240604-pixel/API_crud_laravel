<h1>Display</h1>
<table border="1">
    <tr>
        <td>id</td>
        <td>employee name</td>
        <td>employee mobile</td>
    </tr>
    <?php $__currentLoopData = $mydata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $userdata): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($userdata->employee_id); ?></td>
            <td><?php echo e($userdata->emp_name); ?></td>
            <td><?php echo e($userdata->emp_mobile); ?></td>
            <td>
                <form action="<?php echo e(url('api/delete',$userdata->employee_id)); ?>" method="post">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <input type="submit" value="delete">
                </form>
            </td>
            <td><a href="<?php echo e(url('api/eedit',$userdata->employee_id)); ?>">edit</a></td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table><?php /**PATH C:\xampp\htdocs\laravel\api_crud\resources\views\edisplay.blade.php ENDPATH**/ ?>