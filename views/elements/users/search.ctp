<?php
echo $this->Form->create(
	'User',
	array(
		'url' => array('action' => 'index')
	)
);

echo $this->Form->input('username');

echo $this->Form->end('Search');
