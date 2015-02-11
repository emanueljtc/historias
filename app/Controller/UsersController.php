<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 */
class UsersController extends AppController {

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
	 /*public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('add','logout');
    }*/
    public function login() {

    if ($this->request->is('post')) {
	    	/*if ($this->Session->read('Auth.User')) {
	        $this->Session->setFlash('You are logged in!');
	        return $this->redirect('/');
	    }*/
	        if ($this->Auth->login()) {
	            return $this->redirect($this->Auth->redirectUrl());
	        }
	        $this->Session->setFlash(__('Nombre de Usuario o Clave Invalidas'));
	    }
	}

	public function logout() {
	    $this->Session->setFlash('Cerrada la Sesion');
		$this->redirect($this->Auth->logout());
	}
	public function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Usuario Invalido'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('Usuario Guardado.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El usuario no ha sido guardado. Intente de nuevo'));
			}
		}
		$groups = $this->User->Group->find('list');
		$departamentos = $this->User->Departamento->find('list');
		$this->set(compact('groups', 'departamentos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Usuario Invalido'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('Usuario Actualizado.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Usuario no Actualizado, Intente de nuevo'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
		$groups = $this->User->Group->find('list');
		$departamentos = $this->User->Departamento->find('list');
		$this->set(compact('groups', 'departamentos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Usuario Invalido'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->User->delete()) {
			$this->Session->setFlash(__('Usuario Borrado'));
		} else {
			$this->Session->setFlash(__('Usuario no Borrado, Intente de nuevo'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	public function beforeFilter() {
    parent::beforeFilter();

    // For CakePHP 2.0
    //$this->Auth->allow('*');

    // For CakePHP 2.1 and up
    $this->Auth->allow('login','logout','initDB');
}
	public function initDB() {
    $group = $this->User->Group;

    // Acceso al grupo de administadores
    $group->id = 1;
    $this->Acl->allow($group, 'controllers');

    // Acceso al Grupo de Doctores
    $group->id = 2;
    $this->Acl->deny($group, 'controllers');
    $this->Acl->allow($group, 'controllers/Pacientes');
    $this->Acl->allow($group, 'controllers/Pages/home');
    $this->Acl->allow($group, 'controllers/Historia');

    // Acceso a otros grupos
    /*$group->id = 3;
    $this->Acl->deny($group, 'controllers');
    $this->Acl->allow($group, 'controllers/Posts/add');
    $this->Acl->allow($group, 'controllers/Posts/edit');
    $this->Acl->allow($group, 'controllers/Widgets/add');
    $this->Acl->allow($group, 'controllers/Widgets/edit');
   */
    // allow basic users to log out
    $this->Acl->allow($group, 'controllers/users/logout');

    // we add an exit to avoid an ugly "missing views" error message
    echo "todo listo";
    exit;
}

}