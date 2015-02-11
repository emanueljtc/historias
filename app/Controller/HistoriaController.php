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
	public $helpers = array('Html','Form','Time','Js');
	public $components = array('Paginator', 'Session','RequestHandler');
	public $paginate = array (
			'limit' => 4,
			'order' => array('Historium.id' => 'asc')
			);

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->set('historia',$this->Historium->find('all'));
        	$this->Paginator->settings =$this->paginate;
		    $this->set('historia',$this->paginate());
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
			throw new NotFoundException(__('Historia no Existe'));
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
				$this->Session->setFlash(__('Historia Guardada.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Historia no Guardada, Intente de Nuevo.'));
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
			throw new NotFoundException(__('Historia no Existe'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Historium->save($this->request->data)) {
				$this->Session->setFlash(__('Historia Actualizada.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Historia no Actualizada, Intente de Nuevo.'));
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
			throw new NotFoundException(__('Historia no Existe'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Historium->delete()) {
			$this->Session->setFlash(__('Historia Eliminada.'));
		} else {
			$this->Session->setFlash(__('Historia no Eliminada, Intente de nuevo.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	
}
