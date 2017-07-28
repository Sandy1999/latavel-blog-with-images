<?php $__env->startSection('content'); ?>
Welcome to layout in Laravel
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>