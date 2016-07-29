<?php $__env->startSection('content'); ?>
<h1 class="sectionTitle"><?php echo e($post->title); ?></h1>
<div class="addForms">


  <form action="<?php echo e(URL::to('Admin/Events/update', $post->id)); ?>" method="put" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">

    <div class="right">
    <div class="formGroup">
      <input class="button rightButton" type="submit" value="ივენთის დამატება">
    </div>
    <div class="formGroup">
      <input class="stime" type="text" name="stime" placeholder="დაწყების დრო" id="dpt" value="<?php echo e($post->start); ?>">
    </div>
    <div class="formGroup">
      <input class="etime" type="text" name="etime" placeholder="დასრულების დრო" id="dpt" value="<?php echo e($post->end); ?>">
    </div>
      <div class="upload">
        <button></button>
      </div>
    </div>

    <div class="formGroup">
      <label>ივენთის სახელი</label>
      <input class="name" type="text" name="name" placeholder="ივენთის სახელი" value="<?php echo e($post->title); ?>">
    </div>
    <div class="formGroup">
      <label>ლოკაცია</label>
      <input id="addr" class="controls location" name="location" type="text" placeholder="ლოკაცია" value="<?php echo e($post->location); ?>"/>
    </div>
    <div class="formGroup">
      <label>განრიგი</label>
      <input class="agenda" type="text" name="agenda" placeholder="განრიგი">
    </div>
    <div class="formGroup">
      <label>სპიკერი</label>
            <div class="multipleSelect">
              <div class="selectedList"></div>
              <input name="speaker[]" class="input" type="text" placeholder="აირჩიეთ სპიკერი">
            </div>
            <ul class="multipleList">
            <li data-id="1">შოთა იორამაშვილი</li>
            <li data-id="2">დავით გოჩავა</li>
            <li data-id="3">ირაკლი ღარიბაშვილი</li>
            <li data-id="4">ლევან ასათიანი</li>
            <li data-id="5">მარი მელიქიშვილი</li>
            <li data-id="6">ალექსი ამნიაშვილი</li>
            <li data-id="7">სანდრო ასათიანი</li>
            <li data-id="8">ლევან მელიქიშვილი</li>
          </ul>
    </div>
    <div class="formGroup">
      <label>აღწერა</label>
      <textarea id="ckeExample" rows="6" type="text" name="description"><?php echo e($post->description); ?></textarea>
      <div class="description"></div>
    </div>
  </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>