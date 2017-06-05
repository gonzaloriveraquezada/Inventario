<?php $__env->startSection('title'); ?>
Ingresar Productos
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <h1>Ingresar Productos</h1>
    <hr/>

    <?php echo Form::open(['url' => 'productos', 'class' => 'form-horizontal']); ?>


                <div class="form-group <?php echo e($errors->has('nombre') ? 'has-error' : ''); ?>">
                <?php echo Form::label('nombre', 'Nombre: ', ['class' => 'col-sm-3 control-label']); ?>

                <div class="col-sm-6">
                    <?php echo Form::text('nombre', null, ['class' => 'form-control']); ?>

                    <?php echo $errors->first('nombre', '<p class="help-block">:message</p>'); ?>

                </div>
            </div>
            
            <div class="form-group <?php echo e($errors->has('tipo_producto') ? 'has-error' : ''); ?>">
                <?php echo Form::label('tipo_producto', 'Tipo Producto: ', ['class' => 'col-sm-3 control-label']); ?>

                <div class="col-sm-6">
                    <?php echo Form::number('tipo_producto', null, ['class' => 'form-control']); ?>

                    <?php echo $errors->first('tipo_producto', '<p class="help-block">:message</p>'); ?>

                </div>
            </div>

            <div class="form-group <?php echo e($errors->has('valor_adq') ? 'has-error' : ''); ?>">
                <?php echo Form::label('valor_adq', 'Valor Adquisicion: ', ['class' => 'col-sm-3 control-label']); ?>

                <div class="col-sm-6">
                    <?php echo Form::number('valor_adq', null, ['class' => 'form-control']); ?>

                    <?php echo $errors->first('valor_adq', '<p class="help-block">:message</p>'); ?>

                </div>
            </div>
            <div class="form-group <?php echo e($errors->has('stock') ? 'has-error' : ''); ?>">
                <?php echo Form::label('stock', 'Stock: ', ['class' => 'col-sm-3 control-label']); ?>

                <div class="col-sm-6">
                    <?php echo Form::text('stock', null, ['class' => 'form-control']); ?>

                    <?php echo $errors->first('stock', '<p class="help-block">:message</p>'); ?>

                </div>
            </div>
            <div class="form-group <?php echo e($errors->has('estado') ? 'has-error' : ''); ?>">
                <?php echo Form::label('estado', 'Estado: ', ['class' => 'col-sm-3 control-label']); ?>

                <div class="col-sm-6">
                    <?php echo Form::text('estado', null, ['class' => 'form-control']); ?>

                    <?php echo $errors->first('estado', '<p class="help-block">:message</p>'); ?>

                </div>
            </div>
            <div class="form-group <?php echo e($errors->has('empresa') ? 'has-error' : ''); ?>">
                <?php echo Form::label('empresa', 'Empresa: ', ['class' => 'col-sm-3 control-label']); ?>

                <div class="col-sm-6">
                    <?php echo Form::text('empresa', null, ['class' => 'form-control']); ?>

                    <?php echo $errors->first('empresa', '<p class="help-block">:message</p>'); ?>

                </div>
            </div>
            <div class="form-group <?php echo e($errors->has('descripcion') ? 'has-error' : ''); ?>">
                <?php echo Form::label('descripcion', 'Descripcion: ', ['class' => 'col-sm-3 control-label']); ?>

                <div class="col-sm-6">
                    <?php echo Form::textarea('descripcion', null, ['class' => 'form-control']); ?>

                    <?php echo $errors->first('descripcion', '<p class="help-block">:message</p>'); ?>

                </div>
            </div>
            <div class="form-group <?php echo e($errors->has('color') ? 'has-error' : ''); ?>">
                <?php echo Form::label('color', 'Color: ', ['class' => 'col-sm-3 control-label']); ?>

                <div class="col-sm-6">
                    <?php echo Form::text('color', null, ['class' => 'form-control']); ?>

                    <?php echo $errors->first('color', '<p class="help-block">:message</p>'); ?>

                </div>
            </div>
            <div class="form-group <?php echo e($errors->has('ubicacion') ? 'has-error' : ''); ?>">
                <?php echo Form::label('ubicacion', 'Ubicacion: ', ['class' => 'col-sm-3 control-label']); ?>

                <div class="col-sm-6">
                    <?php echo Form::text('ubicacion', null, ['class' => 'form-control']); ?>

                    <?php echo $errors->first('ubicacion', '<p class="help-block">:message</p>'); ?>

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