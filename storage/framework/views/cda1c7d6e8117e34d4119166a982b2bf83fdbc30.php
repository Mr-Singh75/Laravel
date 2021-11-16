<!DOCTYPE html>
<html>
<body>

<h2>Edit</h2>

<form action="/<?php echo e($data->user_id); ?>/update" method="post">
<?php echo csrf_field(); ?>

  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname" value="<?php echo e($data->FirstName); ?>" ><br>
  <span style="color:red"> <?php $__errorArgs = ['fname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
  <br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname" value="<?php echo e($data->LastName); ?>"><br>
  <span style="color:red"> <?php $__errorArgs = ['lname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span><br>
  <label for="salary">Salary</label><br>
  <input type="number" id="salary" name="salary" value="<?php echo e($data->Salary); ?>" ><br>
  <span style="color:red"> <?php $__errorArgs = ['salary'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span><br>
  <label for="address">Address</label><br>
  <input type="text" id="address" name="address" value="<?php echo e($data->address); ?>"><br>
  <span style="color:red"> <?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span><br>
  <input type="submit" value="Save">
</form> 



</body>
</html><?php /**PATH C:\xampp\htdocs\blog\resources\views/edit.blade.php ENDPATH**/ ?>