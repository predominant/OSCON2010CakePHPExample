<?php
/* Project Fixture generated on: 2010-07-21 02:07:00 : 1279643340 */
class ProjectFixture extends CakeTestFixture {
	var $name = 'Project';

	var $fields = array(
		'id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'primary'),
		'user_id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36),
		'name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100),
		'section_count' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 6),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => '4c45cecc-cea8-4150-8fca-447ced78581a',
			'user_id' => 'Lorem ipsum dolor sit amet',
			'name' => 'Lorem ipsum dolor sit amet',
			'section_count' => 1,
			'created' => '2010-07-21 02:29:00',
			'modified' => '2010-07-21 02:29:00'
		),
	);
}
?>