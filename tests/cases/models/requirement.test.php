<?php
/* Requirement Test cases generated on: 2010-07-21 02:07:14 : 1279643354*/
App::import('Model', 'Requirement');

class RequirementTestCase extends CakeTestCase {
	var $fixtures = array('app.requirement', 'app.section', 'app.project', 'app.user');

	function startTest() {
		$this->Requirement =& ClassRegistry::init('Requirement');
	}

	function endTest() {
		unset($this->Requirement);
		ClassRegistry::flush();
	}

}
?>