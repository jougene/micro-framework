<!DOCTYPE html>
<html>
<head>
	<title>My ToDo app</title>
</head>
<body>
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
		<input type="text" name="task">
	</form>
</body>
</html>
