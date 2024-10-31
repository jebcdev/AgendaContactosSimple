<?php $__env->startSection('title'); ?>
	<?php echo e(config('app.name')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content_header'); ?>
<div class="row align-items-center">
    <div class="col-6 d-flex">
        <h1 class="me-auto">
            Detalles del Contacto
        </h1>
    </div>
    <div class="col-6 d-flex justify-content-end">
        <a href="<?php echo e(route('contacts.index')); ?>" class="btn btn-sm btn-primary">
            Cancelar / Volver al Listado
        </a>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-body">
        
    
        <div class="mb-3">
            <label for="user_id" class="form-label">Creado Por:</label>
            <input type="text" class="form-control" id="user_id" user_id="user_id" placeholder="Nombre del Contacto"
                value="<?php echo e(old('user_id', $contact->user->name)); ?>" readonly>
        </div>

        <div class="mb-3">
            <label for="name" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Nombre del Contacto"
                value="<?php echo e(old('name', $contact->name)); ?>" readonly>
        </div>
    
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Email del Contacto"
                value="<?php echo e(old('email', $contact->email)); ?>" readonly>
        </div>
    
        <div class="mb-3">
            <label for="phone" class="form-label">Teléfono</label>
            <input type="text" class="form-control" id="phone" name="phone" placeholder="Teléfono del Contacto"
                value="<?php echo e(old('phone', $contact->phone)); ?>" readonly>
        </div>
    
        <div class="mb-3">
            <label for="address" class="form-label">Dirección</label>
            <input type="text" class="form-control" id="address" name="address" placeholder="Dirección del Contacto"
                value="<?php echo e(old('address', $contact->address)); ?>" readonly>
        </div>
        
        <div class="mb-3">
            <label for="category_id" class="form-label">Categoría</label>
            <input type="text" class="form-control" id="category_id" name="category_id" placeholder="Categoría del Contacto"
                value="<?php echo e(old('category_id', $contact->category->name)); ?>" readonly>
        </div>

        <form action="<?php echo e(route('contacts.destroy', $contact)); ?>" method="POST">

            <?php echo csrf_field(); ?>
            <?php echo method_field('DELETE'); ?>

            <a class="btn btn-sm btn-warning" href="<?php echo e(route('contacts.edit',$contact)); ?>"><i
                    class="fas fa-edit"></i></a>

            <button type="submit" class="btn btn-sm btn-danger"
            onclick="return confirm('Estas Seguro?')"
            ><i class="fas fa-trash"></i></button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
	
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
	
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\AgendaContactosSimple\resources\views/contacts/show.blade.php ENDPATH**/ ?>