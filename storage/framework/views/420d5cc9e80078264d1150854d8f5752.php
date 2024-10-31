<?php $__env->startSection('title'); ?>
	<?php echo e(config('app.name')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content_header'); ?>
<div class="row align-items-center">
    <div class="col-6 d-flex">
        <h1 class="me-auto">
            Crear un Nuevo Contacto
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
<?php if ($__env->exists('contacts.form',[
    'action' => route('contacts.store'),
    'method' => 'POST'
])) echo $__env->make('contacts.form',[
    'action' => route('contacts.store'),
    'method' => 'POST'
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
	
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
	
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\AgendaContactosSimple\resources\views/contacts/create.blade.php ENDPATH**/ ?>