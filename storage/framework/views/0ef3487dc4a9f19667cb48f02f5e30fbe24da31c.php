<!DOCTYPE html>
<html>
<head>
	<title>TodoList</title>
	<link rel="stylesheet" href="css/app.css">
</head>
<body>
	<?php echo $__env->make('inc.navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<div class="container">
		<?php echo $__env->yieldContent('content'); ?>
	</div>

	<footer id="footer" class="text-center">
		<p>copyright &copy; 2018 Todolist</p>
	</footer>
</body>
</html>