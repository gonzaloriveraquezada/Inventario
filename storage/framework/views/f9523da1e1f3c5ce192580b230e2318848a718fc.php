<?php $__env->startSection('title'); ?>
Ingresar Proveedores
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <h1>Ingresar Proveedores</h1>
    <hr/>

    <?php echo Form::open(['url' => 'proveedores', 'class' => 'form-horizontal']); ?>


                <div class="form-group <?php echo e($errors->has('nombre') ? 'has-error' : ''); ?>">
                <?php echo Form::label('nombre', 'Nombre: ', ['class' => 'col-sm-3 control-label']); ?>

                <div class="col-sm-6">
                    <?php echo Form::text('nombre', null, ['class' => 'form-control']); ?>

                    <?php echo $errors->first('nombre', '<p class="help-block">:message</p>'); ?>

                </div>
            </div>
            <div class="form-group <?php echo e($errors->has('razon_social') ? 'has-error' : ''); ?>">
                <?php echo Form::label('razon_social', 'Razon Social: ', ['class' => 'col-sm-3 control-label']); ?>

                <div class="col-sm-6">
                    <?php echo Form::text('razon_social', null, ['class' => 'form-control']); ?>

                    <?php echo $errors->first('razon_social', '<p class="help-block">:message</p>'); ?>

                </div>
            </div>
            <div class="form-group <?php echo e($errors->has('rut') ? 'has-error' : ''); ?>">
                <?php echo Form::label('rut', 'Rut: ', ['class' => 'col-sm-3 control-label']); ?>

                <div class="col-sm-6">
                    <?php echo Form::text('rut', null, ['class' => 'form-control']); ?>

                    <?php echo $errors->first('rut', '<p class="help-block">:message</p>'); ?>

                </div>
            </div>
            <div class="form-group <?php echo e($errors->has('giro') ? 'has-error' : ''); ?>">
                <?php echo Form::label('giro', 'Giro: ', ['class' => 'col-sm-3 control-label']); ?>

                <div class="col-sm-6">
                    <?php echo Form::text('giro', null, ['class' => 'form-control']); ?>

                    <?php echo $errors->first('giro', '<p class="help-block">:message</p>'); ?>

                </div>
            </div>
            <div class="form-group <?php echo e($errors->has('contacto') ? 'has-error' : ''); ?>">
                <?php echo Form::label('contacto', 'Contacto: ', ['class' => 'col-sm-3 control-label']); ?>

                <div class="col-sm-6">
                    <?php echo Form::text('contacto', null, ['class' => 'form-control']); ?>

                    <?php echo $errors->first('contacto', '<p class="help-block">:message</p>'); ?>

                </div>
            </div>
            <div class="form-group <?php echo e($errors->has('aplica_descuento') ? 'has-error' : ''); ?>">
                <?php echo Form::label('aplica_descuento', 'Aplica Descuento: ', ['class' => 'col-sm-3 control-label']); ?>

                <div class="col-sm-6">
                    <?php echo Form::text('aplica_descuento', null, ['class' => 'form-control']); ?>

                    <?php echo $errors->first('aplica_descuento', '<p class="help-block">:message</p>'); ?>

                </div>
            </div>
            <div class="form-group <?php echo e($errors->has('ubicacion') ? 'has-error' : ''); ?>">
                <?php echo Form::label('ubicacion', 'Ubicacion: ', ['class' => 'col-sm-3 control-label']); ?>

                <div class="col-sm-6">
                    <?php echo Form::text('ubicacion', null, ['class' => 'form-control']); ?>

                    <?php echo $errors->first('ubicacion', '<p class="help-block">:message</p>'); ?>

                </div>
            </div>
            <div class="form-group <?php echo e($errors->has('descripcion') ? 'has-error' : ''); ?>">
                <?php echo Form::label('descripcion', 'Descripcion: ', ['class' => 'col-sm-3 control-label']); ?>

                <div class="col-sm-6">
                    <?php echo Form::textarea('descripcion', null, ['class' => 'form-control']); ?>

                    <?php echo $errors->first('descripcion', '<p class="help-block">:message</p>'); ?>

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