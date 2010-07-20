<div class="requirements index">
	<h2><?php __('Requirements');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('section_id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('description');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($requirements as $requirement):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $requirement['Requirement']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($requirement['Section']['name'], array('controller' => 'sections', 'action' => 'view', $requirement['Section']['id'])); ?>
		</td>
		<td><?php echo $requirement['Requirement']['name']; ?>&nbsp;</td>
		<td><?php echo $requirement['Requirement']['description']; ?>&nbsp;</td>
		<td><?php echo $requirement['Requirement']['created']; ?>&nbsp;</td>
		<td><?php echo $requirement['Requirement']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $requirement['Requirement']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $requirement['Requirement']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $requirement['Requirement']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $requirement['Requirement']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Requirement', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Sections', true), array('controller' => 'sections', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Section', true), array('controller' => 'sections', 'action' => 'add')); ?> </li>
	</ul>
</div>