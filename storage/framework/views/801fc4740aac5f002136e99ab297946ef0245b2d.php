<title>Posts</title>
<h1><?php echo e("Posts"); ?></h1>
<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<h2><a href= "posts/<?php echo e($post->id); ?>"><?php echo e($post->title); ?></a></h2>
<?php echo e($post->user->name); ?>

<?php echo e($post->created_at->toFormattedDateString()); ?>

<p><?php echo e($post->body); ?></p>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php if(Auth::check()): ?>
    <p><?php echo e(Auth::user()->name); ?></p>
<?php endif; ?>

<?php $__currentLoopData = $archive; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stats): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <ul>
        <li><a href="#"><?php echo e($stats['month']); ?> <?php echo e($stats['year']); ?></a></li>
    </ul>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
