<div class="d-flex">
    <a href="<?php echo e(route('employees.show', ['employee' => $employee->id])); ?>" class="btn btn-primary btn-sm me-2"><i
            class="bi-person-lines-fill"></i></a>
    <a href="<?php echo e(route('employees.edit', ['employee' => $employee->id])); ?>" class="btn btn-warning btn-sm me-2"><i
            class="bi-pencil-square"></i></a>

    <div>
        <form action="<?php echo e(route('employees.destroy', ['employee' => $employee->id])); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('delete'); ?>
            
            <button type="submit" class="btn btn-danger btn-sm me-2 btn-delete"
                data-name="<?php echo e($employee->firstname . ' ' . $employee->lastname); ?>">
                <i class="bi-trash"></i>
            </button>

        </form>
    </div>
</div>
<?php /**PATH C:\Users\User\Documents\frame\UAS_Framework\resources\views/employee/actions.blade.php ENDPATH**/ ?>