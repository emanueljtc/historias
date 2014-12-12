<?php
App::uses('AppController', 'Controller');
/**
 * Historia Controller
 *
 * @property Historium $Historium
 * @property PaginatorComponent $Paginator
 */
class HistoriaController extends AppController {

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
		$this->Historium->recursive = 0;
		$this->set('historia', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Historium->exists($id)) {
			throw new NotFoundException(__('Invalid historium'));
		}
		$options = array('conditions' => array('Historium.' . $this->Historium->primaryKey => $id));
		$this->set('historium', $this->Historium->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Historium->create();
			if ($this->Historium->save($this->request->data)) {
				$this->Session->setFlash(__('The historium has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The historium could not be saved. Please, try again.'));
			}
		}
		$pacientes = $this->Historium->Paciente->find('list');
		$this->set(compact('pacientes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Historium->exists($id)) {
			throw new NotFoundException(__('Invalid historium'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Historium->save($this->request->data)) {
				$this->Session->setFlash(__('The historium has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The historium could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Historium.' . $this->Historium->primaryKey => $id));
			$this->request->data = $this->Historium->find('first', $options);
		}
		$pacientes = $this->Historium->Paciente->find('list');
		$this->set(compact('pacientes'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Historium->id = $id;
		if (!$this->Historium->exists()) {
			throw new NotFoundException(__('Invalid historium'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Historium->delete()) {
			$this->Session->setFlash(__('The historium has been deleted.'));
		} else {
			$this->Session->setFlash(__('The historium could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	
}
