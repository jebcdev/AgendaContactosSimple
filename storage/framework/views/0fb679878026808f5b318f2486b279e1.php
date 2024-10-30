<form action="<?php echo e($action); ?>" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <?php echo method_field($method); ?>

    <input type="hidden" name="user_id" id="user_id" value="<?php echo e(auth()->user()->id); ?>">
    

    <div class="mb-3">
        <label for="name" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Nombre de la Categoría"
            value="<?php echo e(old('name', $category->name)); ?>" required>
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">Descripción</label>
        <textarea class="form-control" id="description" name="description" rows="3"
            placeholder="Descripción de la Categoría"><?php echo e(old('description', $category->description)); ?></textarea>
    </div>


    <div class="mb-3">
        <button type="submit" class="btn btn-primary">
            <?php echo e($method == 'POST' ? 'Crear' : 'Actualizar'); ?>

        </button>
    </div>

    
    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul class="mb-0">
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
        <?php endif; ?>
    
    
</form>
<?php /**PATH D:\laragon\www\AgendaContactos\resources\views/categories/form.blade.php ENDPATH**/ ?>