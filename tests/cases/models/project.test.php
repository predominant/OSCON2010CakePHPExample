<?php
/* Project Test cases generated on: 2010-07-21 02:07:00 : 1279643340*/
App::import('Model', 'Project');

class ProjectTestCase extends CakeTestCase {
	var $fixtures = array('app.project', 'app.user', 'app.section');

	function startTest() {
		$this->Project =& ClassRegistry::init('Project');
	}

	function endTest() {
		unset($this->Project);
		ClassRegistry::flush();
	}

}
?>