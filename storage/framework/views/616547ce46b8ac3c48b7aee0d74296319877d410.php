<h1><?php echo e($post->title); ?></h1>
<?php echo e($post->created_at->toFormattedDateString()); ?><br/>
<?php $__currentLoopData = $post->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<img src="<?php echo e(asset('storage/upload').'/'.$image->img_name); ?>" name="<?php echo e($image->img_name); ?>" height="300" width="300">
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<p><?php echo e($post->body); ?></p>
<div class="comments">
    <ul>
        <?php $__currentLoopData = $post->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
                <?php echo e($comment->user->name); ?>

                <strong><?php echo e($comment->created_at->diffForHumans()); ?>:</strong> &nbsp; <?php echo e($comment->body); ?>

            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>
<div class="card">
    <div class="card-block">
        <form method="POST" action="/posts/<?php echo e($post->id); ?>/comment">
                <?php echo e(csrf_field()); ?>

            <textarea cols=45 rows=4 name="body"></textarea><br/>
            <button name="comment">Comment</button>
        </form>
    </div>
</div>