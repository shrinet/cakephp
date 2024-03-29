<?php if (AuthComponent::user('id')): ?>
   Logged in as <?= AuthComponent::user('first_name') ?>
<?php endif; ?>
<div class="row">

<main class=" px-md-4">
<div class="users index">
	<h2><?php echo __('Users'); ?></h2>
	<table cellpadding="0" cellspacing="0" class="table">
	<tr>
			<th scope="col"><?php echo $this->Paginator->sort('id'); ?></th>
			<th scope="col"><?php echo $this->Paginator->sort('first_name'); ?></th>
			<th scope="col"><?php echo $this->Paginator->sort('last_name'); ?></th>
			<th scope="col"><?php echo $this->Paginator->sort('email'); ?></th>
			<th scope="col"><?php echo $this->Paginator->sort('role'); ?></th>
			<th scope="col"><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($users as $user): ?>
	<tr>
		<th scope="row"><?php echo h($user['User']['id']); ?>&nbsp;</th>
		<td><?php echo h($user['User']['first_name']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['last_name']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['email']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['is_admin'] ? 'Admin' : 'User'); ?>&nbsp;</td>
		<td><?php echo h($user['User']['created']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $user['User']['id'])); ?>
			<?php if ($this->Session->read('Auth.User')['is_admin'] ): ?>
				<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $user['User']['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?>
			<?php endif; ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	
	<nav aria-label="Page navigation example">
	<ul class="pagination">
	<?php
    echo $this->Paginator->prev('< ' . __('Previous'), array('tag' => 'li', 'class'=>'page-item', ' class'=>'page-link'), null, array('class' => 'disabled page-item', 'tag' => 'li', 'disabledTag' => 'a', ' class' =>'page-link'));
    echo $this->Paginator->numbers(array('separator' => '', 'currentTag' => 'a', 'tag' => 'li', 'class'=>'page-item',  'currentClass' => 'disabled page-link', ' class'=>'page-link'));
    echo $this->Paginator->next(__('Next') . ' >', array('tag' => 'li', 'class'=>'page-item', ' class'=>'page-link'), null, array('class' => 'disabled page-item', 'tag' => 'li', 'disabledTag' => 'a', 'currentClass'=>'page-link', ' class' =>'page-link'));
?>
	</ul>
</nav>
</div>
</main>
</div>