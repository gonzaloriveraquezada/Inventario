<?php $__env->startSection('title'); ?>
Productos
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <h1>Productos</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Nombre</th><th>Tipo Producto</th><th>Valor Adq</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo e($producto->id); ?></td> <td> <?php echo e($producto->nombre); ?> </td><td> <?php echo e($producto->tipo_producto); ?> </td><td> <?php echo e($producto->valor_adq); ?> </td>
                </tr>
            </tbody>    
        </table>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('backLayout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>