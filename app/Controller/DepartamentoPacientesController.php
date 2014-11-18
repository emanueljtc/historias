<?php
App::uses('AppController', 'Controller');
/**
 * DepartamentoPacientes Controller
 *
 * @property DepartamentoPaciente $DepartamentoPaciente
 * @property PaginatorComponent $Paginator
 */
class DepartamentoPacientesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->DepartamentoPaciente->recursive = 0;
		$this->set('departamentoPacientes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DepartamentoPaciente->exists($id)) {
			throw new NotFoundException(__('Invalid departamento paciente'));
		}
		$options = array('conditions' => array('DepartamentoPaciente.' . $this->DepartamentoPaciente->primaryKey => $id));
		$this->set('departamentoPaciente', $this->DepartamentoPaciente->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DepartamentoPaciente->create();
			if ($this->DepartamentoPaciente->save($this->request->data)) {
				$this->Session->setFlash(__('The departamento paciente has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The departamento paciente could not be saved. Please, try again.'));
			}
		}
		$departamentos = $this->DepartamentoPaciente->Departamento->find('list');
		$pacientes = $this->DepartamentoPaciente->Paciente->find('list');
		$this->set(compact('departamentos', 'pacientes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->DepartamentoPaciente->exists($id)) {
			throw new NotFoundException(__('Invalid departamento paciente'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->DepartamentoPaciente->save($this->request->data)) {
				$this->Session->setFlash(__('The departamento paciente has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The departamento paciente could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DepartamentoPaciente.' . $this->DepartamentoPaciente->primaryKey => $id));
			$this->request->data = $this->DepartamentoPaciente->find('first', $options);
		}
		$departamentos = $this->DepartamentoPaciente->Departamento->find('list');
		$pacientes = $this->DepartamentoPaciente->Paciente->find('list');
		$this->set(compact('departamentos', 'pacientes'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->DepartamentoPaciente->id = $id;
		if (!$this->DepartamentoPaciente->exists()) {
			throw new NotFoundException(__('Invalid departamento paciente'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->DepartamentoPaciente->delete()) {
			$this->Session->setFlash(__('The departamento paciente has been deleted.'));
		} else {
			$this->Session->setFlash(__('The departamento paciente could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->DepartamentoPaciente->recursive = 0;
		$this->set('departamentoPacientes', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->DepartamentoPaciente->exists($id)) {
			throw new NotFoundException(__('Invalid departamento paciente'));
		}
		$options = array('conditions' => array('DepartamentoPaciente.' . $this->DepartamentoPaciente->primaryKey => $id));
		$this->set('departamentoPaciente', $this->DepartamentoPaciente->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->DepartamentoPaciente->create();
			if ($this->DepartamentoPaciente->save($this->request->data)) {
				$this->Session->setFlash(__('The departamento paciente has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The departamento paciente could not be saved. Please, try again.'));
			}
		}
		$departamentos = $this->DepartamentoPaciente->Departamento->find('list');
		$pacientes = $this->DepartamentoPaciente->Paciente->find('list');
		$this->set(compact('departamentos', 'pacientes'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->DepartamentoPaciente->exists($id)) {
			throw new NotFoundException(__('Invalid departamento paciente'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->DepartamentoPaciente->save($this->request->data)) {
				$this->Session->setFlash(__('The departamento paciente has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The departamento paciente could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DepartamentoPaciente.' . $this->DepartamentoPaciente->primaryKey => $id));
			$this->request->data = $this->DepartamentoPaciente->find('first', $options);
		}
		$departamentos = $this->DepartamentoPaciente->Departamento->find('list');
		$pacientes = $this->DepartamentoPaciente->Paciente->find('list');
		$this->set(compact('departamentos', 'pacientes'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->DepartamentoPaciente->id = $id;
		if (!$this->DepartamentoPaciente->exists()) {
			throw new NotFoundException(__('Invalid departamento paciente'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->DepartamentoPaciente->delete()) {
			$this->Session->setFlash(__('The departamento paciente has been deleted.'));
		} else {
			$this->Session->setFlash(__('The departamento paciente could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
