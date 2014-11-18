<?php
App::uses('Historium', 'Model');

/**
 * Historium Test Case
 *
 */
class HistoriumTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.historium',
		'app.paciente'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Historium = ClassRegistry::init('Historium');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Historium);

		parent::tearDown();
	}

}
