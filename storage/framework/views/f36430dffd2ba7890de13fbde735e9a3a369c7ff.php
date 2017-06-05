<?php $__env->startComponent('mail::message'); ?>
# Hola <?php echo e($user->name); ?>


Gracias por crear una cuenta. Por favor verifícala usando el siguiente botón:

<?php $__env->startComponent('mail::button', ['url' => route('verify', $user->verification_token)]); ?>
Confirmar mi cuenta
<?php echo $__env->renderComponent(); ?>

Gracias,<br>
<?php echo e(config('app.name')); ?>

<?php echo $__env->renderComponent(); ?>