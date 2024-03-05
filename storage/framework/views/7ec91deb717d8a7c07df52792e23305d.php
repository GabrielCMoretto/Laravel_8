<h1>Post novo</h1>
<?php if($errors->any()): ?>
    <div>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($error); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php endif; ?>
<form action="<?php echo e(route('posts.store')); ?>" method="post">
    <?php echo csrf_field(); ?> <!-- passa o token csrf por seguranca -->
    <input type="text" name="title" id="title" placeholder="Título" value="<?php echo e(old('title')); ?>">
    <textarea name="content" id="content" cols="30" rows="4" placeholder="Conteúdo" ><?php echo e(old('content')); ?></textarea>
    <button type="submit">Enviar</button>
</form><?php /**PATH C:\laragon\www\example-app\resources\views/admin/posts/create.blade.php ENDPATH**/ ?>