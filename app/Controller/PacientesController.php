<?php
App::uses('AppController', 'Controller');
/**
 * Pacientes Controller
 *
 * @property Paciente $Paciente
 * @property PaginatorComponent $Paginator
 */
class PacientesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $helpers = array('Html','Form','Time','Js');
	public $components = array('Paginator', 'Session','RequestHandler');
	public $paginate = array (
			'limit' => 4,
			'order' => array('Paciente.nombre' => 'asc')
			);

/**
 * index method
 *
 * @return void
 */
	public function index() {
		
		$this->set('pacientes',$this->Paciente->find('all'));
        	$this->Paginator->settings =$this->paginate;
		    $this->set('pacientes',$this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Paciente->exists($id)) {
			throw new NotFoundException(__('Paciente Invalido'));
		}
		$options = array('conditions' => array('Paciente.' . $this->Paciente->primaryKey => $id));
		$this->set('paciente', $this->Paciente->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Paciente->create();
			if ($this->Paciente->save($this->request->data)) {
				$this->Session->setFlash(__('Paciente Guardado.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Paciente no guardado, intente de nuevo'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Paciente->exists($id)) {
			throw new NotFoundException(__('Paciente Invalido'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Paciente->save($this->request->data)) {
				$this->Session->setFlash(__('Paciente Actualizado.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Paciente no actualizado. Intente de nuevo'));
			}
		} else {
			$options = array('conditions' => array('Paciente.' . $this->Paciente->primaryKey => $id));
			$this->request->data = $this->Paciente->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Paciente->id = $id;
		if (!$this->Paciente->exists()) {
			throw new NotFoundException(__('Paciente Invalido'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Paciente->delete()) {
			$this->Session->setFlash(__('Paciente Borrado.'));
		} else {
			$this->Session->setFlash(__('Paciente no Borrado, Intente de nuevo'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
