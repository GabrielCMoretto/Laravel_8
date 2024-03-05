<h1>posts</h1>

<a href="<?php echo e(route('posts.create')); ?>">Novo post</a> <!-- podia usar /posts/create, mas assim eh melhor -->

<?php if(session('message')): ?>
    <div>
        <?php echo e(session('message')); ?>

    </div>
<?php endif; ?>

<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <p>
        <?php echo e($post->title); ?>

            [<a href="<?php echo e(route('posts.show',$post->id)); ?>">Ver</a>]
    </p>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH C:\laragon\www\example-app\resources\views/admin/posts/index.blade.php ENDPATH**/ ?>