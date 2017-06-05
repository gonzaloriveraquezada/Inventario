<?php $__env->startSection('title'); ?>
Proveedores
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <h1>Proveedores</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> 
                    <th>Nombre</th>
                    <th>Razon Social</th>
                    <th>Rut</th>
                    <th>Giro</th>
                    <th>Contacto</th>
                    <th>Descuentos</th>
                    <th>Direccion</th>
                    <th>Descripcion</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo e($proveedore->id); ?></td> 
                    <td> <?php echo e($proveedore->nombre); ?> </td>
                    <td> <?php echo e($proveedore->razon_social); ?> </td>
                    <td> <?php echo e($proveedore->rut); ?> </td> 
                    <td> <?php echo e($proveedore->giro); ?> </td>
                    <td> <?php echo e($proveedore->contacto); ?> </td>
                    <td> <?php echo e($proveedore->aplica_descuento); ?> </td>
                    <td> <?php echo e($proveedore->ubicacion); ?> </td>
                    <td> <?php echo e($proveedore->descripcion); ?> </td>

                </tr>
            </tbody>    
        </table>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('backLayout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>