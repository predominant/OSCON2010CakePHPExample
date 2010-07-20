<?php
/* Requirements Test cases generated on: 2010-07-21 02:07:16 : 1279643476*/
App::import('Controller', 'Requirements');

class TestRequirementsController extends RequirementsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class RequirementsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.requirement', 'app.section', 'app.project', 'app.user');

	function startTest() {
		$this->Requirements =& new TestRequirementsController();
		$this->Requirements->constructClasses();
	}

	function endTest() {
		unset($this->Requirements);
		ClassRegistry::flush();
	}

}
?>