<form action="<?php echo e($action); ?>" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <?php echo method_field($method); ?>

    <input type="hidden" name="user_id" id="user_id" value="<?php echo e(auth()->user()->id); ?>">
    

    <div class="mb-3">
        <label for="name" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Nombre del Contacto"
            value="<?php echo e(old('name', $contact->name)); ?>" required>
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Email del Contacto"
            value="<?php echo e(old('email', $contact->email)); ?>" required>
    </div>

    <div class="mb-3">
        <label for="phone" class="form-label">Teléfono</label>
        <input type="text" class="form-control" id="phone" name="phone" placeholder="Teléfono del Contacto"
            value="<?php echo e(old('phone', $contact->phone)); ?>" required>
    </div>

    <div class="mb-3">
        <label for="address" class="form-label">Dirección</label>
        <input type="text" class="form-control" id="address" name="address" placeholder="Dirección del Contacto"
            value="<?php echo e(old('address', $contact->address)); ?>" required>
    </div>
    
    <div class="mb-3">
        <label for="category_id" class="form-label">Categoría</label>
        <select type="text" class="form-control" id="category_id" name="category_id" placeholder="Dirección del Contacto"
            value="<?php echo e(old('category_id', $contact->category_id)); ?>" required>

            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($category->id); ?>" <?php echo e(($category->id==$contact->category_id)?'selected':''); ?>><?php echo e($category->name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
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
<?php /**PATH D:\laragon\www\AgendaContactosSimple\resources\views/contacts/form.blade.php ENDPATH**/ ?>