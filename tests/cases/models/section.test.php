<?php
/* Section Test cases generated on: 2010-07-21 02:07:09 : 1279643349*/
App::import('Model', 'Section');

class SectionTestCase extends CakeTestCase {
	var $fixtures = array('app.section', 'app.project', 'app.user', 'app.requirement');

	function startTest() {
		$this->Section =& ClassRegistry::init('Section');
	}

	function endTest() {
		unset($this->Section);
		ClassRegistry::flush();
	}

}
?>