<div class="sections form">
<?php echo $this->Form->create('Section');?>
	<fieldset>
 		<legend><?php __('Add Section'); ?></legend>
	<?php
		echo $this->Form->input('parent_id');
		echo $this->Form->input('project_id');
		echo $this->Form->input('name');
		echo $this->Form->input('requirement_count');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Sections', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Sections', true), array('controller' => 'sections', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parent Section', true), array('controller' => 'sections', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projects', true), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project', true), array('controller' => 'projects', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Requirements', true), array('controller' => 'requirements', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Requirement', true), array('controller' => 'requirements', 'action' => 'add')); ?> </li>
	</ul>
</div>