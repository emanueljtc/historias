<?php
App::uses('DepartamentoPaciente', 'Model');

/**
 * DepartamentoPaciente Test Case
 *
 */
class DepartamentoPacienteTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.departamento_paciente',
		'app.departamento',
		'app.paciente'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DepartamentoPaciente = ClassRegistry::init('DepartamentoPaciente');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DepartamentoPaciente);

		parent::tearDown();
	}

}
