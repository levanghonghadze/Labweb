<?php $__env->startSection('content'); ?>
<h1 class="sectionTitle">ჩემი ივენთები<a href="<?php echo e(URL::to('Admin/Events/create')); ?>">ივენთის დამატება</a></h1>
  <?php $__empty_1 = true; foreach($posts as $post): $__empty_1 = false; ?>
    <div class="adminItem">
      <h1><?php echo e($post->title); ?><i data-id="<?php echo e($post->id); ?>"></i></h1>
      <ul class="itemSett" data-id="<?php echo e($post->id); ?>">
        <li><a href="<?php echo e(URL::to('Admin/Events/edit', $post->id)); ?>">რედაქტირება</a></li>
        <li><a class="delete" data-token="<?php echo e(csrf_token()); ?>" href="<?php echo e(URL::to('Admin/Events/destroy', $post->id)); ?>">წაშლა</a></li>
      </ul>
    </div>
  <?php endforeach; if ($__empty_1): ?>
    <div class="adminInfo">ივენთები არ არის.</div>
  <?php endif; ?>
<?php echo $posts->links();; ?>

  <script>

  </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>