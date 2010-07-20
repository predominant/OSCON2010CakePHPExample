<?php
/* Section Fixture generated on: 2010-07-21 02:07:09 : 1279643349 */
class SectionFixture extends CakeTestFixture {
	var $name = 'Section';

	var $fields = array(
		'id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'primary'),
		'parent_id' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 36),
		'project_id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36),
		'name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100),
		'requirement_count' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 6),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => '4c45ced5-6ce8-4715-971c-4480ed78581a',
			'parent_id' => 'Lorem ipsum dolor sit amet',
			'project_id' => 'Lorem ipsum dolor sit amet',
			'name' => 'Lorem ipsum dolor sit amet',
			'requirement_count' => 1,
			'created' => '2010-07-21 02:29:09',
			'modified' => '2010-07-21 02:29:09'
		),
	);
}
?>