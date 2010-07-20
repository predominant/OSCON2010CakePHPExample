<?php
/* Sections Test cases generated on: 2010-07-21 02:07:53 : 1279643873*/
App::import('Controller', 'Sections');

class TestSectionsController extends SectionsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class SectionsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.section', 'app.project', 'app.user', 'app.requirement');

	function startTest() {
		$this->Sections =& new TestSectionsController();
		$this->Sections->constructClasses();
	}

	function endTest() {
		unset($this->Sections);
		ClassRegistry::flush();
	}

}
?>