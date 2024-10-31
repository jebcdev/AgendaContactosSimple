<div>
    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Descripción</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>

            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <th scope="row"><?php echo e($category->id); ?></th>
                    <td><?php echo e($category->name); ?></td>
                    <td><?php echo e($category->description); ?></td>
                    <td>
                        <form action="<?php echo e(route('categories.destroy', $category)); ?>" method="POST">

                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>

                            <a class="btn btn-sm btn-success" href="<?php echo e(route('categories.show', $category)); ?>"><i
                                    class="fas fa-eye"></i></a>
                            <a class="btn btn-sm btn-warning" href="<?php echo e(route('categories.edit', $category)); ?>"><i
                                    class="fas fa-edit"></i></a>

                            <button onclick="return confirm('Estas Seguro?')" type="submit"
                                class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                        </form>

                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

    <?php echo e($categories->links()); ?>

</div>
<?php /**PATH D:\laragon\www\AgendaContactosSimple\resources\views/categories/table.blade.php ENDPATH**/ ?>