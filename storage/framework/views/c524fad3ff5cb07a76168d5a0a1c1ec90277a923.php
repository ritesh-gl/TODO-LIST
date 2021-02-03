<?php $__env->startSection('body'); ?>
<br>
<a href="/todo" class="btn btn-info">Back</a>

<div class="col-lg-4 col-lg-offset-4">


<h1> create new item for todo list</h1>

<form class="form-horizontal" action="/todo" method=post >
<?php echo e(csrf_field()); ?>

  <fieldset>
    

     <div class="form-group">
     <div class="col-lg-10">
<textarea class="form-control" rows="5" id="textarea" name="body"></textarea>
  <br>
    <button type="submit" class="btn btn-success">Submit</button>
  </div>
  </div>
  </fieldset>
</form>
<?php if(count($errors)>0): ?>
<div class="alert alert-warning">
<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php echo e($error); ?>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php endif; ?>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>