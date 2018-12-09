<?php $__env->startSection('content'); ?>
	<h1>Todos</h1>

	<?php if(count($todos) > 0): ?>
		<?php $__currentLoopData = $todos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $todo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<div class="well">
				<h3><a href="todo/<?php echo e($todo->id); ?>}"><?php echo e($todo->title); ?></a> <span class="label label-danger"><?php echo e($todo->due); ?></span></h3>
			</div>	
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>