<h1>detalhes do post <?php echo e($post->title); ?></h1>
<ul>
    <li><strong>Título: </strong><?php echo e($post->title); ?></li>
    <li><strong>conteudo: </strong><?php echo e($post->content); ?></li>
</ul>

<form action="<?php echo e(route('posts.destroy',$post->id)); ?>" method="post">
    <?php echo csrf_field(); ?>
    <input type="hidden" name="_method" value="DELETE">
    <button type="submit">Deletar o post: <?php echo e($post->title); ?></button>
</form><?php /**PATH C:\laragon\www\example-app\resources\views/admin/posts/show.blade.php ENDPATH**/ ?>