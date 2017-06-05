<?php $__env->startSection('title'); ?>
Tipo_producto
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <h1>Tipo_producto</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Id</th><th>Nombre</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo e($tipo_producto->id); ?></td> <td> <?php echo e($tipo_producto->id); ?> </td><td> <?php echo e($tipo_producto->nombre); ?> </td>
                </tr>
            </tbody>    
        </table>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('backLayout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>