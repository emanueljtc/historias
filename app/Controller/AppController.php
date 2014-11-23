<?php

App::uses('Controller', 'Controller');

class AppController extends Controller {
		   public $helpers = array('Html', 'Form', 'Session');
	 

	  public $components = array(
        'Session',
        'Auth' => array(
            'loginRedirect' => array(
                'controller' => 'users',
                'action' => 'index'
            ),
            'logoutRedirect' => array(
                'controller' => 'users',
                'action' => 'login'
            ),
            'authenticate' => array(
                'Form' => array(
                    'passwordHasher' => 'Blowfish'
                )
            )
        )
    );

    public function beforeFilter() {
        $this->Auth->allow('index', 'view');
    }
 

    
	
}

