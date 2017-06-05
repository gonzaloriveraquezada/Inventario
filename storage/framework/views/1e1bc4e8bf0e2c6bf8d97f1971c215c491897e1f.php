<?php $__env->startSection('title'); ?>
Crear Cotizaciones
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <h1>Crear Cotizaciones</h1>
    <hr/>

    <?php echo Form::open(['url' => 'cotizaciones', 'class' => 'form-horizontal']); ?>


                <div class="form-group <?php echo e($errors->has('cod_producto_aw') ? 'has-error' : ''); ?>">
                <?php echo Form::label('cod_producto_aw', 'Cod Producto Aw: ', ['class' => 'col-sm-3 control-label']); ?>

                <div class="col-sm-6">
                    <?php echo Form::text('cod_producto_aw', null, ['class' => 'form-control']); ?>

                    <?php echo $errors->first('cod_producto_aw', '<p class="help-block">:message</p>'); ?>

                </div>
            </div>
            <div class="form-group <?php echo e($errors->has('cod_producto_proveedor') ? 'has-error' : ''); ?>">
                <?php echo Form::label('cod_producto_proveedor', 'Cod Producto Proveedor: ', ['class' => 'col-sm-3 control-label']); ?>

                <div class="col-sm-6">
                    <?php echo Form::text('cod_producto_proveedor', null, ['class' => 'form-control']); ?>

                    <?php echo $errors->first('cod_producto_proveedor', '<p class="help-block">:message</p>'); ?>

                </div>
            </div>
            <div class="form-group <?php echo e($errors->has('desc_cotizacion') ? 'has-error' : ''); ?>">
                <?php echo Form::label('desc_cotizacion', 'Desc Cotizacion: ', ['class' => 'col-sm-3 control-label']); ?>

                <div class="col-sm-6">
                    <?php echo Form::textarea('desc_cotizacion', null, ['class' => 'form-control']); ?>

                    <?php echo $errors->first('desc_cotizacion', '<p class="help-block">:message</p>'); ?>

                </div>
            </div>
            <div class="form-group <?php echo e($errors->has('part_number') ? 'has-error' : ''); ?>">
                <?php echo Form::label('part_number', 'Part Number: ', ['class' => 'col-sm-3 control-label']); ?>

                <div class="col-sm-6">
                    <?php echo Form::text('part_number', null, ['class' => 'form-control']); ?>

                    <?php echo $errors->first('part_number', '<p class="help-block">:message</p>'); ?>

                </div>
            </div>
            <div class="form-group <?php echo e($errors->has('valor') ? 'has-error' : ''); ?>">
                <?php echo Form::label('valor', 'Valor: ', ['class' => 'col-sm-3 control-label']); ?>

                <div class="col-sm-6">
                    <?php echo Form::number('valor', null, ['class' => 'form-control']); ?>

                    <?php echo $errors->first('valor', '<p class="help-block">:message</p>'); ?>

                </div>
            </div>
            <div class="form-group <?php echo e($errors->has('cantidad') ? 'has-error' : ''); ?>">
                <?php echo Form::label('cantidad', 'Cantidad: ', ['class' => 'col-sm-3 control-label']); ?>

                <div class="col-sm-6">
                    <?php echo Form::number('cantidad', null, ['class' => 'form-control']); ?>

                    <?php echo $errors->first('cantidad', '<p class="help-block">:message</p>'); ?>

                </div>
            </div>
            <div class="form-group <?php echo e($errors->has('modelo') ? 'has-error' : ''); ?>">
                <?php echo Form::label('modelo', 'Modelo: ', ['class' => 'col-sm-3 control-label']); ?>

                <div class="col-sm-6">
                    <?php echo Form::text('modelo', null, ['class' => 'form-control']); ?>

                    <?php echo $errors->first('modelo', '<p class="help-block">:message</p>'); ?>

                </div>
            </div>
            <div class="form-group <?php echo e($errors->has('imagen_ref') ? 'has-error' : ''); ?>">
                <?php echo Form::label('imagen_ref', 'Imagen Ref: ', ['class' => 'col-sm-3 control-label']); ?>

                <div class="col-sm-6">
                    <?php echo Form::text('imagen_ref', null, ['class' => 'form-control']); ?>

                    <?php echo $errors->first('imagen_ref', '<p class="help-block">:message</p>'); ?>

                </div>
            </div>


    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            <?php echo Form::submit('Create', ['class' => 'btn btn-primary form-control']); ?>

        </div>
    </div>
    <?php echo Form::close(); ?>


    <?php if($errors->any()): ?>
        <ul class="alert alert-danger">
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
        </ul>
    <?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('backLayout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>