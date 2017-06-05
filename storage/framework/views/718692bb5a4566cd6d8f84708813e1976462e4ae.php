<?php $__env->startSection('title'); ?>
Tipo_producto
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <h1>Tipo_producto <a href="<?php echo e(url('tipo_producto/create')); ?>" class="btn btn-primary pull-right btn-sm">Add New Tipo_producto</a></h1>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="tbltipo_producto">
            <thead>
                <tr>
                    <th>Id</th><th>Nombre</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $tipo_producto; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                <tr>
                    <td><a href="<?php echo e(url('tipo_producto', $item->id)); ?>"><?php echo e($item->id); ?></a>
                    </td><td><?php echo e($item->nombre); ?></td>
                    <td>
                        <a href="<?php echo e(url('tipo_producto/' . $item->id . '/edit')); ?>" class="btn btn-primary btn-xs">Update</a> 
                        <?php echo Form::open([
                            'method'=>'DELETE',
                            'url' => ['tipo_producto', $item->id],
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
        $('#tbltipo_producto').DataTable({
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
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>