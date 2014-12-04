<?php
App::uses('Controller', 'Controller');

class AppController extends Controller {
	public $helpers = array('Html', 'Form', 'Session');


	public $components = array(
        'Session',
        'Auth' => array(
            'loginRedirect' => array(
                'controller' => 'pacientes',
                'action' => 'add'
            ),
            'logoutRedirect' => array(
                'controller' => 'pages',
                'action' => 'display',
                'home'
            ),
            ),
           
    );

    public function beforeFilter() {
        $this->Auth->allow('index', 'view');
    }

}
