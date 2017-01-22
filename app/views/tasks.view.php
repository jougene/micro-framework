<!DOCTYPE html>
<html>
<head>
	<title>All tasks</title>
</head>
<body>
	<h1>All tasks</h1>
	<ul>
		<?php foreach($tasks as $task) : ?>
			<?php if($task->completed) :?>
				<strike><li><?= $task->title; ?></li></strike>
			<?php else: ?>
				<li><?= $task->title; ?></li>
			<?php endif; ?>	
		<?php endforeach; ?>
	</ul>
	<form method="POST" action="/task">
		<input type="text" name="title">
	</form>
</body>
</html>