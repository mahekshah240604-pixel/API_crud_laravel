<form action="<?php echo e(url('/api/update')); ?>" method="post">
    
    <?php echo method_field('PUT'); ?>
     <input type="hidden" name="student_id" value="<?php echo e($edit->student_id); ?>">
    name: <input type="text" name="sname" value="<?php echo e($edit->student_name); ?>" placeholder="enter the number"/><br>
    mobile: <input type="number" name="smobile" value="<?php echo e($edit->student_mobile); ?>" placeholder="enter mobile"><br>
    <input type="submit">
</form><?php /**PATH C:\xampp\htdocs\laravel\api_crud\resources\views\edit.blade.php ENDPATH**/ ?>