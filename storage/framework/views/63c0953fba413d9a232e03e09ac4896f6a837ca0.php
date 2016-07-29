<?php $__env->startSection('content'); ?>
<h1 class="sectionTitle">სპიკერის დამატება</h1>
<div class="addForms">
  <?php echo e(Form::open(array('url' => 'Admin/Speakers/store', 'files' => true))); ?>

    <div class="right">
    <div class="formGroup">
    <?php echo e(Form::submit('ივენთის დამატება', array('class' => 'button rightButton'))); ?>

    </div>
    <div class="formGroup">
        <?php echo e(Form::file('photo', array('id' => 'browseFile'))); ?>

    </div>
      <div class="upload">
        <div class="browse" onclick="document.getElementById('browseFile').click()"></div>
      </div>
    </div>
  <div class="formGroup">
    <?php echo e(Form::label('სახელი')); ?>

    <?php echo e(Form::text('title', null, array('class' => 'name','placeholder'=>'სახელი'))); ?>

  </div>
  <div class="formGroup">
    <?php echo e(Form::label('გვარი')); ?>

    <?php echo e(Form::text('location', null, array('class' => 'location','placeholder'=>'გვარი'))); ?>

  </div>
  <div class="formGroup">
    <?php echo e(Form::label('აღწერა')); ?>

    <?php echo e(Form::textarea('description', null, array('id' => 'ckeExample'))); ?>

    <div class="description"></div>
  </div>
  <?php echo e(Form::close()); ?>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>