

<?php $__env->startSection('title'); ?>
	<?php echo e(config('app.name')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content_header'); ?>
<div class="row align-items-center">
    <div class="col-6 d-flex">
        <h1 class="me-auto">
            Detalles de la Categoría
        </h1>
    </div>
    <div class="col-6 d-flex justify-content-end">
        <a href="<?php echo e(route('categories.index')); ?>" class="btn btn-sm btn-primary">
            Cancelar / Volver al Listado
        </a>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-body">
        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" class="form-control" id="name" name="name" value="<?php echo e($category->name); ?>" readonly>
        </div>
        <div class="form-group">
            <label for="description">Descripción</label>
            <textarea class="form-control" id="description" name="description" rows="3" readonly><?php echo e($category->description); ?></textarea>
        </div>

        <form action="<?php echo e(route('categories.destroy', $category)); ?>" method="POST">

            <?php echo csrf_field(); ?>
            <?php echo method_field('DELETE'); ?>

            <a class="btn btn-sm btn-warning" href="<?php echo e(route('categories.edit',$category)); ?>"><i
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
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\AgendaContactos\resources\views/categories/show.blade.php ENDPATH**/ ?>