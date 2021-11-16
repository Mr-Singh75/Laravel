<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>HTML Table</h2>

<table>
  <tr>
    <th>FirstName</th>
    <th>LastName</th>
    <th>Salary</th>
    <th>Address</th>
    <th>Edit</th>
    <th>Delete</th>
  </tr>
  <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <tr>
    <td><?php echo e($i->FirstName); ?></td>
    <td><?php echo e($i->LastName); ?></td>
    <td><?php echo e($i->Salary); ?></td>
    <td><?php echo e($i->address); ?></td>
    <td><a href="/<?php echo e($i->user_id); ?>/edit">Edit</a></td>
    <td><a href="/<?php echo e($i->id); ?>/delete">Delete</a></td>
  </tr>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<a href='form'>Add User</a>
</body>
</html>

<?php /**PATH C:\xampp\htdocs\blog\resources\views/User.blade.php ENDPATH**/ ?>