<?php $__env->startSection('title'); ?>
Proveedores
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <h1>Proveedores <a href="<?php echo e(url('proveedores/create')); ?>" class="btn btn-primary pull-right btn-sm">Nuevo Proveedor</a></h1>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="tblproveedores">
            <thead>
                <tr>
                    <th>Nombre</th><th>Razon Social</th><th>Rut</th><th>Editar</th>
                </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $proveedores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                <tr>
                    <!--<td><?php echo e($item->id); ?></td>-->
                    <td><a href="<?php echo e(url('proveedores', $item->id)); ?>"><?php echo e($item->nombre); ?></a></td><td><?php echo e($item->razon_social); ?></td><td><?php echo e($item->rut); ?></td>
                    <td>
                        <a href="<?php echo e(url('proveedores/' . $item->id . '/edit')); ?>" class="btn btn-primary btn-xs">Update</a> 
                        <?php echo Form::open([
                            'method'=>'DELETE',
                            'url' => ['proveedores', $item->id],
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
        $('#tblproveedores').DataTable({
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