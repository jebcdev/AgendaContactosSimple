<?php $__env->startSection('title'); ?>
    <?php echo e(config('app.name')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content_header'); ?>
    <div class="row align-items-center">
        <div class="col-6 d-flex">
            <h1 class="me-auto">
                Listado de Contactos
            </h1>
        </div>
        <div class="col-6 d-flex justify-content-end">
            <a href="<?php echo e(route('contacts.create')); ?>" class="btn btn-sm btn-primary">
                Crear un Nuevo Contacto
            </a>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php if(session('sessionMessage')): ?>
        <div class="alert alert-success text-center">
            <?php echo e(session('sessionMessage')); ?>

        </div>
    <?php endif; ?>

    <?php if ($__env->exists('contacts.table')) echo $__env->make('contacts.table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\AgendaContactosSimple\resources\views/contacts/index.blade.php ENDPATH**/ ?>