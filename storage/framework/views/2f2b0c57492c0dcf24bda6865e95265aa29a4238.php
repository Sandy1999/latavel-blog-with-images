<h1>Create Post</h1>
<hr>
<form method="POST" action="/posts" enctype="multipart/form-data">
    <?php echo e(csrf_field()); ?>

    <label>Title</label><br>
        <input type="text" name="title"><br>
    <label>Body</label><br/>
        <textarea name="body" cols="45" rows = "15"></textarea><br>
    <label>Images:</label>
        <input type="file" name="images[]" multiple><br/>
    <button type="submit">Publish</button>
</form>
<div class="error">
    <ul>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($error); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>