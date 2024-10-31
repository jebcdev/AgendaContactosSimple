<?php $__env->startSection('title'); ?>
    <?php echo e(config('app.name')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content_header'); ?>
    <div class="row align-items-center">
        <div class="col-6 d-flex">
            <h1 class="me-auto">
                Agenda de Contactos
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
    <div class="d-flex flex-row flex-wrap justify-content-start gap-3">
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card text-white p-3 m-2" style="width: 200px; background-color: <?php echo e(['#FF6F61', '#6B5B95', '#88B04B', '#F7CAC9', '#92A8D1'][$index % 5]); ?>;">
                <h5 class="card-title"><?php echo e($category->name); ?></h5>
                <p class="card-text">Contactos: <?php echo e($contacts->where('category_id', $category->id)->count()); ?></p>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('css'); ?>
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\AgendaContactosSimple\resources\views/admin/index.blade.php ENDPATH**/ ?>