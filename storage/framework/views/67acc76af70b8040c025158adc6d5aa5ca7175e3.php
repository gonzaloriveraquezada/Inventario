<?php $__env->startSection('title'); ?>
Cotizaciones
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <h1>Cotizaciones <a href="<?php echo e(url('cotizaciones/create')); ?>" class="btn btn-primary pull-right btn-sm">Agregar Cotizaciones</a></h1>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="tblcotizaciones">
            <thead>
                <tr>
                    <th>Codigo Producto Aw</th><th>Codigo Producto Proveedor</th><th>Descripcion</th><th>Editar</th>
                </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $cotizaciones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                <tr>
                    
                    <td><a href="<?php echo e(url('cotizaciones', $item->id)); ?>"><?php echo e($item->cod_producto_aw); ?></a></td><td><?php echo e($item->cod_producto_proveedor); ?></td><td><?php echo e($item->desc_cotizacion); ?></td>
                    <td>
                        <a href="<?php echo e(url('cotizaciones/' . $item->id . '/edit')); ?>" class="btn btn-primary btn-xs">Update</a> 
                        <?php echo Form::open([
                            'method'=>'DELETE',
                            'url' => ['cotizaciones', $item->id],
                            'style' => 'display:inline'
                        ]); ?>

                            <?php echo Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']); ?>

                        <?php echo Form::close(); ?>

                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
            </tbody>
        </table>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script type="text/javascript">
    $(document).ready(function(){
        $('#tblcotizaciones').DataTable({
            columnDefs: [{
                targets: [0],
                visible: false,
                searchable: false
                },
            ],
            order: [[0, "asc"]],
        });
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backLayout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>