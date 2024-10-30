

<?php $__env->startSection('title'); ?>
	<?php echo e(config('app.name')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content_header'); ?>
<div class="row align-items-center">
    <div class="col-6 d-flex">
        <h1 class="me-auto">
            Editar una Nueva Categoría
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
<?php if ($__env->exists('categories.form',[
    'action' => route('categories.update',$category),
    'method' => 'PATCH'
])) echo $__env->make('categories.form',[
    'action' => route('categories.update',$category),
    'method' => 'PATCH'
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
	
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
	
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\AgendaContactos\resources\views/categories/edit.blade.php ENDPATH**/ ?>