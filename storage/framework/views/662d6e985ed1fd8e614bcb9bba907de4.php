<h1>edit</h1>
<form action="<?php echo e(url('/api/eupdate')); ?>" method="post">
    
    <?php echo method_field('PUT'); ?>
     <input type="hidden" name="employee_id" value="<?php echo e($edit->employee_id); ?>">
    employee name: <input type="text" name="ename" value="<?php echo e($edit->emp_name); ?>" placeholder="enter name"/><br>
    employee mobile no : <input type="number" name="emobile" value="<?php echo e($edit->emp_mobile); ?>" placeholder="enter mobile"/><br>
    <input type="submit">
</form><?php /**PATH C:\xampp\htdocs\laravel\api_crud\resources\views\eedit.blade.php ENDPATH**/ ?>