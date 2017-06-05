<?php $__env->startSection('title'); ?>
Productos
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <h1>Productos <a href="<?php echo e(url('productos/create')); ?>" class="btn btn-primary pull-right btn-sm">Agregar Productos</a></h1>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="tblproductos">
            <thead>
                <tr>
                    <th>ID</th><th>Nombre</th><th>Tipo Producto</th><th>Valor Adq</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                <tr>
                    <td><?php echo e($item->id); ?></td>
                    <td><a href="<?php echo e(url('productos', $item->id)); ?>"><?php echo e($item->nombre); ?></a></td><td><?php echo e($item->tipo_producto); ?></td><td><?php echo e($item->valor_adq); ?></td>
                    <td>
                        <a href="<?php echo e(url('productos/' . $item->id . '/edit')); ?>" class="btn btn-primary btn-xs">Update</a> 
                        <?php echo Form::open([
                            'method'=>'DELETE',
                            'url' => ['productos', $item->id],
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
        $('#tblproductos').DataTable({
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