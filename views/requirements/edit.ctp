<div class="requirements form">
<?php echo $this->Form->create('Requirement');?>
	<fieldset>
 		<legend><?php __('Edit Requirement'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('section_id');
		echo $this->Form->input('name');
		echo $this->Form->input('description');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Requirement.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Requirement.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Requirements', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Sections', true), array('controller' => 'sections', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Section', true), array('controller' => 'sections', 'action' => 'add')); ?> </li>
	</ul>
</div>