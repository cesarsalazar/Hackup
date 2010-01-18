<h1>Users</h1>

<?php foreach ($users as $user): ?>
<div>
	<p><?php echo $user['User']['id']; ?></p>
	<p><?php echo $html->link($user['User']['name'],
	array('controller' => 'users', 'action' => 'view', $user['User']['id'])); ?>
	</p>
	<p><?php echo $user['User']['lastname']; ?></p>
</div>
<?php endforeach; ?>