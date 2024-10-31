<?php $__env->startSection('title'); ?>
    <?php echo e(config('app.name')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content_header'); ?>
    <div class="row align-items-center">
        <div class="col-6 d-flex">
            <h1 class="me-auto">
                Listado de Categorías
            </h1>
        </div>
        <div class="col-6 d-flex justify-content-end">
            <a href="<?php echo e(route('categories.create')); ?>" class="btn btn-sm btn-primary">
                Crear una Nueva Categoría
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

    <?php if ($__env->exists('categories.table')) echo $__env->make('categories.table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\AgendaContactosSimple\resources\views/categories/index.blade.php ENDPATH**/ ?>