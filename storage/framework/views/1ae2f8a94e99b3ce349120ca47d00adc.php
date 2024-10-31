<div>
    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Categoría</th>
                <th scope="col">Nombre</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Dirección</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>

            <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <th scope="row"><?php echo e($contact->id); ?></th>
                    <td><?php echo e($contact->category->name); ?></td>
                    <td><?php echo e($contact->name); ?></td>
                    <td><?php echo e($contact->email); ?></td>
                    <td><?php echo e($contact->phone); ?></td>
                    <td><?php echo e($contact->address); ?></td>
       
                    <td>
                        <form action="<?php echo e(route('contacts.destroy', $contact)); ?>" method="POST" class="flex">

                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>

                            <a class="btn btn-sm btn-success" href="<?php echo e(route('contacts.show', $contact)); ?>"><i
                                    class="fas fa-eye"></i></a>
                            <a class="btn btn-sm btn-warning" href="<?php echo e(route('contacts.edit', $contact)); ?>"><i
                                    class="fas fa-edit"></i></a>

                            <button onclick="return confirm('Estas Seguro?')" type="submit"
                                class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                        </form>

                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

    <?php echo e($contacts->links()); ?>

</div>
<?php /**PATH D:\laragon\www\AgendaContactosSimple\resources\views/contacts/table.blade.php ENDPATH**/ ?>